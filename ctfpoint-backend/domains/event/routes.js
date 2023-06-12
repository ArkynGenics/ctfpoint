const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const multer = require('multer');
const path = require('path');
const upload = multer({ dest: 'uploads/event' });

const {listEvents,insertEvent,deleteEventById,updateEventById,getEventById} = require("./controller")

router.get("/",(req,res)=>{
    listEvents(req, (err, result,code) => {
        if(err) {
            res.status(code).json({success:false,errors: err})
        }
        else {
            res.status(code).json({success:true,data: result})
        }
    })
})
router.get("/:id",(req,res)=>{
    getEventById(req.params.id, (err, result,code) => {
        if(err) {
            return res.status(code).json({success:false, errors:err})
        }
        else {
            return res.status(code).json({success:true,data: result ? result : {}})
        }
    })
})
router.put("/update",async(req,res)=>{
    updateEventById(req,(err,result,code)=>{
        if(err) {
            res.status(code).json({success:false, errors: err})
        }
        else {
            res.status(code).json({success:true,message: result})
        }
    })
})
router.delete("/delete/:id", async(req,res)=>{
    deleteEventById(req.params.id,(err,result,code)=>{
        if(err) {
            res.status(code).json({success:false, errors: err})
        }
        else {
            res.status(code).json({success:true,message: result})
        }
    })
    
})
router.post("/insert",async(req,res)=>{
    insertEvent(req, (err, result, code) => {
        if(err) {
            res.status(code).json({success:false, errors: err})
        }
        else {
            res.status(code).json({success:true,message: result})
        }
    })
})
// router.post("/upload",upload.fields([{ name: 'image', maxCount: 1 }]),
//     async(req,res)=>{
//     addEventImage(req, (err, result, code) => {
//         if(err) {
//             res.status(code).json({errors: err})
//         }
//         else {
//             res.status(code).json({message: result})
//         }
//     })
// })

module.exports = router;