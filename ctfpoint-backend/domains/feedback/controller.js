const db = require("../../config/database")
const bcrypt = require("bcrypt")
const jwt = require("jsonwebtoken")

const createFeedback = (req,result) =>{
    const data = req.body
    let query = "INSERT INTO feedbacks SET ?"
    db.query(query, data,(err)=>{
        if(err){
            return result(err.message,null,500)
        }
        else{
            result(null,"Thanks for your feedback",200)
        }
    })
}

module.exports = {
    createFeedback
}