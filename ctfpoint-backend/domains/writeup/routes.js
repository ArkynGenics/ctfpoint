const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const multer = require('multer');
const path = require('path');
const upload = multer({ dest: 'uploads/writeup' });

const {} = require("./controller")

router.get("/",(req,res)=>{
    listWriteups(req, (err, result,code) => {
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({data: result})
        }
    })
})
router.get("/:id",(req,res)=>{
    getWriteupById(writeupId, (err, result,code) => {
        if(err) {
            return res.status(code).json({errors:err})
        }
        else {
            return res.status(code).json({data: result ? result : {}})
        }
    })
})
router.put("/update",async(req,res)=>{
    updateWriteupById(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
})
router.delete("/delete", async(req,res)=>{
    customerId = req.query.customerId
    deleteWriteupById(customerId,(err,result,code)=>{
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
    
})
router.post("/create",async(req,res)=>{
    createWriteup(req, (err, result, code) => {
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
})
router.post("/upload",upload.fields([{ name: 'image', maxCount: 1 }, {name: 'data', maxCount: 1}]),
    async(req,res)=>{
    uploadWriteupImage(req, (err, result, code) => {
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
})

module.exports = router;