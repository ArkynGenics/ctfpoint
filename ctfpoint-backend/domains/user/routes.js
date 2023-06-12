const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const {createUser,verifyUser,updateUserById,getUserProfile} = require("./controller")

router.post("/login",async(req,res)=>{
    verifyUser(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({"success":false,"Message": err.message})
        }
        else {
            res.status(code).cookie('token',result.token,{
                expires : new Date(Date.now()+ 8982458),
                secure : false,
                httpOnly : true,
            }).cookie('username',result.username).json({"success":true, message: "Successfully Logged In",username:result.username,token:result.token});
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
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({"success":true, message: result})
        }
    })
})
router.put("/update",async(req,res)=>{
    updateUserById(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({"success":true, message: result})
        }
    })
})
router.get("/:username",async(req,res)=>{
    getUserProfile(req.params.username,(err,result,code)=>{
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({"success":true, data: result})
        }
    })
})



module.exports = router;