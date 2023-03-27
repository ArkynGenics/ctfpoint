const mysql = require("mysql2")

const db = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASS,
    database: process.env.DB_NAME,
})
db.connect(err =>{
    if(err){
        console.error(err.message)
        throw err
    }
    else{
        console.log("Database Connected")
    }
})
module.exports = db;