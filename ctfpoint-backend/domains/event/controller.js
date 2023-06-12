const db = require("../../config/database")
const multer = require('multer')
const path = require('path')
const fs = require('fs');


const listEvents = (req, result) =>{
    var query = "SELECT * FROM events"
    db.query(query, (err, res) => {
        if (err) {
            return result([{errorCode: "ERROR_SERVER",location: "server", message: err.message}], null,500)
        }
        else {
            return result(null, res, 200)
        }
    })
}
const getEventById = (eventId, result) =>{
    var query = "SELECT * FROM events WHERE event_id = ?"
    db.query(query,[eventId],(err, res) => {
        if(err) {
            return result([{errorCode: "ERROR_SERVER",location: "server", message: err.message}], null,500)
        }
        else if(res.length < 1){
            return result([{errorCode: "ERROR_NOT_FOUND", location:"server", message: "Event Not Found"}],null,404)
        }
        else {
            return result(null, res[0],200)
        }
    })
}
const insertEvent = (req,result) =>{
    const data = req.body
    let query = "INSERT INTO events SET ?"
    db.query(query, data,(err)=>{
        if(err){
            result({success:false,message:err.message},null,500)
        }
        else{
            result(null,"Event Inserted Successfully",200)
        }
    })
}
// const addEventImage = (req,result) =>{
//     try{
//         const { mimetype, filename, path: filePath } = req.files['image'][0];
//         // Check if the uploaded file is an image
//         if (!mimetype.startsWith('image/')) {
//             return res.status(400).send('The uploaded file is not an image.');
//         }
//         const targetDir = path.join("uploads","event");
//         const targetPath = path.join(targetDir, filename);
//         fs.mkdirSync(targetDir,{recursive:true})
//         fs.renameSync(filePath, targetPath);
//         result(null,{success:true,image_name:filename},200)
//     }catch(err){
//         result({success:false,message:"Upload Failed"},null,500)
//     }
// }
const deleteEventById = (eventId,result) =>{
    let query = "DELETE FROM events WHERE event_id = ?"
    db.query(query,eventId,
    (err)=>{
       if(err){
        result({success: false, message: err.message},null,500)
       }
       else{
        result(null,"Event Deleted Successfully",200)
       }
    })
}
const updateEventById = (req,result)=>{
    let data = req.body;
    let eventId = req.body.event_id
    let query = "UPDATE events SET ? WHERE Event_id = ?"
    db.query(query,[data,eventId],
    (err)=>{
        if(err){
            result({success:false,message:err.message},null,500)
        }
        else{
            result(null,"Event Edited Successfully",200)
        }
    })
}
module.exports = {
    listEvents,
    insertEvent,
    deleteEventById,
    updateEventById,
    getEventById
}