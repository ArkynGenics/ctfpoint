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
            res.status(code).json({"Success":true,"jwtToken": result});
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