const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const {createUser,verifyUser} = require("./controller")

router.post("/login",async(req,res)=>{
    verifyUser(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({"Success":false,"Message": err.message})
        }
        else {
            res.status(code).cookie('token',result,{
                expires : new Date(Date.now()+ 8982458),
                secure : false,
                httpOnly : true,
            }).json({"Success":true, message: "Successfully Logged In"});
        }
    })
});
router.post("/logout",async(req,res)=>{
    res.status(200).clearCookie('token')
    res.end()
});
router.post("/register",async(req,res)=>{
    createUser(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({"Success":false,errors: err})
        }
        else {
            res.status(code).json({"Success":true, message: result})
        }
    })
})

module.exports = router;