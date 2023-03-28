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
const getEventById = (req, result) =>{
    let eventId = req.params.id
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
const addEvent = (req,result) =>{
    const data = JSON.parse(req.body.data)
    const { mimetype, filename, path: filePath } = req.files['image'][0];
    // Check if the uploaded file is an image
    if (!mimetype.startsWith('image/')) {
        return res.status(400).send('The uploaded file is not an image.');
    }
    const targetDir = path.join("uploads","event");
    const targetPath = path.join(targetDir, filename);
    fs.mkdirSync(targetDir,{recursive:true})
    fs.renameSync(filePath, targetPath);
    data.image_name = filename
    let query = "INSERT INTO events SET ?"
    db.query(query, data,(err)=>{
        if(err){
            result([{errorCode: "ERROR_SERVER",location: "server", message: err.message}],null,500)
        }
        else{
            result(null,"Event Inserted Successfully",200)
        }
    })
}
const deleteEventById = (eventId,result) =>{
    let query = "DELETE FROM event WHERE event_id = ?"
    let params = [eventId]
    db.query(mysql.format(query,params),
    (err)=>{
       if(err){
        result([{errorCode: "ERROR_SERVER",location: "server", message: err.message}],null,500)
       }
       else{
        result(null,"Event Deleted Successfully",200)
       }
    })
}
const updateEvent = (req,result)=>{
    let data = req.body;
    let eventId = req.body.eventId
    let query = "UPDATE Events SET ? WHERE Event_id = ?"
    db.query(query,[data,eventId],
    (err)=>{
        if(err){
            result([{errorCode: "ERROR_SERVER",location: "server", message: err.message}],null,500)
        }
        else{
            result(null,"Event Edited Successfully",200)
        }
    })
}
module.exports = {
    listEvents,
    addEvent,
    deleteEventById,
    updateEvent,
    getEventById
}