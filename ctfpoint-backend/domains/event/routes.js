const bcrypt = require('bcrypt');
const jwb = require('jsonwebtoken');
const express = require('express');
const router= express.Router();
const multer = require('multer');
const path = require('path');
const upload = multer({ dest: 'uploads/event' });

const {listEvents,addEvent,deleteEventById,updateEvent, updateEventById} = require("./controller")

router.get("/",(req,res)=>{
    listEvents(req, (err, result,code) => {
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({data: result})
        }
    })
})
router.get("/:id",(req,res)=>{
    getEventById(eventId, (err, result,code) => {
        if(err) {
            return res.status(code).json({errors:err})
        }
        else {
            return res.status(code).json({data: result ? result : {}})
        }
    })
})
router.put("/update",async(req,res)=>{
    updateEventById(req,(err,result,code)=>{
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
    deleteEventById(customerId,(err,result,code)=>{
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
    
})
router.post("/create",upload.fields([
    { name: 'data', maxCount: 1 },
    { name: 'image', maxCount: 1 }
]),async(req,res)=>{
    addEvent(req, (err, result, code) => {
        if(err) {
            res.status(code).json({errors: err})
        }
        else {
            res.status(code).json({message: result})
        }
    })
})

module.exports = router;