const jwt = require('jsonwebtoken');
const cookies = require("cookie-parser")
const verifyToken = (req,res,next) =>{
    const token = req.cookies.token;
    if(!token){
        return res.status(403).json({errors: ["Token is Required for Authentication"]})
    }

    jwt.verify(token,process.env.JWT_TOKEN_KEY,(err,payload)=>{
        if(err){
            return res.status(403).json({errors: ["Token is Invalid"]})
        }
        req.jwtPayload = payload;
        next();
    });
};
module.exports = verifyToken;