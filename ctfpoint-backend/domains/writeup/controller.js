const db = require("../../config/database")
const multer = require('multer')
const path = require('path')
const fs = require('fs');


const listWriteups = (req, result) =>{
    var query = "SELECT * FROM writeups"
    db.query(query, (err, res) => {
        if (err) {
            return result(err.message,null,500)
        }
        else {
            return result(null, res, 200)
        }
    })
}
const getWriteupById = (writeupId, result) =>{
    var query = "SELECT * FROM writeups WHERE writeup_id = ?"
    db.query(query,[writeupId],(err, res) => {
        if(err) {
            return result(err.message,null,500)
        }
        else if(res.length < 1){
            return result("Writeup not Found",null,500)
        }
        else {
            return result(null, res[0],200)
        }
    })
}
const createWriteup = (req,result) =>{
    const data = req.body
    let query = "INSERT INTO writeups SET ?"
    db.query(query, data,(err)=>{
        if(err){
            return result(err.message,null,500)
        }
        else{
            result(null,"writeup Inserted Successfully",200)
        }
    })
}
// const uploadWriteup = (req,result) =>{
//     try{
//         const { mimetype, filename, path: filePath } = req.files['image'][0];
//         // Check if the uploaded file is an image
//         if (!mimetype.startsWith('image/')) {
//             return res.status(400).send('The uploaded file is not an image.');
//         }
//         const targetDir = path.join("uploads","writeup");
//         const targetPath = path.join(targetDir, filename);
//         fs.mkdirSync(targetDir,{recursive:true})
//         fs.renameSync(filePath, targetPath);
//         result(null,{success:true,image_name:filename},200)
//     }catch(err){
//         result({success:false,message:"Upload Failed"},null,500)
//     }
// }
const deleteWriteupById = (writeupId,result) =>{
    let query = "DELETE FROM writeups WHERE writeup_id = ?"
    let params = [writeupId]
    db.query(query,params,
    (err)=>{
       if(err){
        return result(err.message,null,500)
        }
       else{
        result(null,"writeup Deleted Successfully",200)
       }
    })
}
const updateWriteupById = (req,result)=>{
    let data = req.body;
    let writeupId = req.body.writeup_id
    let query = "UPDATE writeups SET ? WHERE writeup_id = ?"
    db.query(query,[data,writeupId],
    (err)=>{
        if(err){
            return result(err.message,null,500)
        }
        else{
            result(null,"Writeup Edited Successfully",200)
        }
    })
}
module.exports = {
    listWriteups,
    getWriteupById,
    createWriteup,
    deleteWriteupById,
    updateWriteupById
}