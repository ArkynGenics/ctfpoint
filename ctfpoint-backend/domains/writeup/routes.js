const bcrypt = require('bcrypt');
const jws = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const {listWriteups,createWriteup,deleteWriteupById,updateWriteupById,getWriteupById} = require("./controller")
// const multer = require('multer');
// const ejs = require('ejs');
// const path = require('path');
// const fs = require('fs');
// const upload = multer({ dest: 'uploads/writeup' });

// const {} = require("./controller")
// const dirPath = path.join(__dirname, 'public/pdf');
// const files = fs.readdirSync(dirPath).map((name) => {
// 	return {
// 		name: path.basename(name, '.pdf'),
// 		url: `/pdfs/${name}`,
// 	};
// });if(err) {


router.get("/",(req,res)=>{
    listWriteups(req, (err, result,code) => {
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({success: true, data: result})
        }
    })
})
router.get("/:id",(req,res)=>{
    getWriteupById(req.params.id, (err, result,code) => {
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            return res.status(code).json({success:true, data: result ? result : {}})
        }
    })
})
// router.get("/pdf/:filename",(req,res)=>{
//     res.render('index',{files});
// })
router.put("/update",async(req,res)=>{
    updateWriteupById(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({success: true, message: result})
        }
    })
})
router.delete("/delete/:id", async(req,res)=>{
    deleteWriteupById(req.params.id,(err,result,code)=>{
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({success:true, message: result})
        }
    })
    
})
router.post("/create",async(req,res)=>{
    createWriteup(req, (err, result, code) => {
        if(err) {
            res.status(code).json({"success":false,errors: err})
        }
        else {
            res.status(code).json({success: true, message: result})
        }
    })
})
// router.post("/upload",upload.fields([{ name: 'image', maxCount: 1 }, {name: 'data', maxCount: 1}]),
//     async(req,res)=>{
//     uploadWriteupImage(req, (err, result, code) => {
//         if(err) {
//             res.status(code).json({errors: err})
//         }
//         else {
//             res.status(code).json({message: result})
//         }
//     })
// })

module.exports = router;