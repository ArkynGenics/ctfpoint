const db = require("../../config/database")
const mysql = require('mysql2')
const bcrypt = require("bcrypt")
const jwt = require("jsonwebtoken")

const verifyUser = async (req,result) =>{
    query = "SELECT * FROM users WHERE username = ? LIMIT 1"
    username = req.body.username;
    password = req.body.password;
    if(!(username && password)){
        result([{errorCode: "ERROR_SERVER",location: "server", message: "Invalid Username/Password"}],null,401);
    }else{
        db.query(query,[username], async(err,res)=>{
            if(res[0] == null){
                result([{errorCode: "ERROR_SERVER",location: "server", message: "Invalid Username/Password"}],null,401)
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
                    result(null,token,200);
                }else{
                    result([{errorCode: "ERROR_SERVER",location: "server", message: "Invalid Username/Password"}],null,401)
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
    if(password.match(emailFormat)){
        return true;
    }else{
        return false;
    }
}
const createUser = async (req,result) =>{
    const data = req.body
    if(!(data.username && verifyPassword(data.password) && verifyEmail(data.email))){
        return result(["Input Invalid"],null,400);
    }
    else{
        data.status = 0;
        let query = "INSERT INTO users SET ?"
        req.body.password = await bcrypt.hash(req.body.password,10)
        db.query(query,data,(err)=>{
        if(err){
            return result([err.message],null,500)
        }
        else{
            return result(null,"New User Created",200)
        }
    })
    }
}

module.exports = {
    createUser,
    verifyUser
}