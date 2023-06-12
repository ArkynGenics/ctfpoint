const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const {createFeedback} = require("./controller")

router.post("/create",async(req,res)=>{
    createFeedback(req, (err, result, code) => {
        if(err) {
            res.status(code).json({success:false,errors: err})
        }
        else {
            res.status(code).json({success: true, message: result})
        }
    })
})


module.exports = router;