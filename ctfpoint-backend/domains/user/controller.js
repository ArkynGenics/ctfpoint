const db = require("../../config/database")
const bcrypt = require("bcrypt")
const jwt = require("jsonwebtoken")

const verifyUser = async (req,result) =>{
    query = "SELECT * FROM users WHERE username = ? LIMIT 1"
    username = req.body.username;
    password = req.body.password;
    if(!(username && password)){
        result("Invalid Username/Password",null,401);
    }else{
        db.query(query,[username], async(err,res)=>{
            if(res[0] == null){
                result("Invalid Username/Password",null,401)
            }
            else{
                let user = res[0]
                if(await bcrypt.compare(password,user.password)){
                    const token = jwt.sign({
                        user_id : user.user_id, 
                        username: user.username,
                        privilege : user.privilege
                    },process.env.JWT_TOKEN_KEY,{
                        expiresIn: "2h",
                    });
                    result(null,{token:token,username:user.username},200);
                }else{
                    result("Invalid Username/Password",null,401)
                }
            }
        })
    }
}


const verifyPassword = (password) =>{
    const passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    if(password.match(passwordFormat)){
        return true;
    }else{
        return false;
    }
}
const verifyEmail = (email) =>{
    const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(emailFormat)){
        return true;
    }else{
        return false;
    }
}
const createUser = async (req,result) =>{
    const data = req.body
    if(!(data.username && verifyPassword(data.password) && verifyEmail(data.email))){
        return result("Invalid Input",null,400);
    }
    else{
        data.role = 0;
        let query = "INSERT INTO users SET ?"
        data.password = await bcrypt.hash(req.body.password,10)
        db.query(query,data,(err)=>{
        if(err){
            return result(err.message,null,500)
        }
        else{
            return result(null,"New User Created",200)
        }
        })
    }
}
const updateUserById = (req,result)=>{
    let data = req.body;
    let userId = req.body.user_id
    let query = "UPDATE users SET ? WHERE user_id = ?"
    db.query(query,[data,userId],(err,results)=>{
        if(results.affectedRows === 0){
            result("Failed to update user",null,500)
        }
        else{
            result(null,"User Edited Successfully",200)
        }
    })
}

const getUserProfile = (username, result) =>{
    var query = "SELECT * from users where username = ? limit 1"
    db.query(query,[username], (err, res) => {
        if (err) {
            return result(err.message,null,500)
        }
        else {
            return result(null, res[0], 200)
        }
    })
}
module.exports = {
    createUser,
    verifyUser,
    updateUserById,
    getUserProfile
}