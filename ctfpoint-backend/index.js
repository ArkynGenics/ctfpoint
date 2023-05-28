require("dotenv").config();
const express = require('express');
const cors = require('cors');
const db = require("./config/database.js");
const app = express();
const router = require("./routes/index")
const cookies = require("cookie-parser")
app.use(cors({
    origin : "*",
    credentials : true
}))
app.use(cookies())
app.use(express.json())
app.use(router)
app.listen(process.env.PORT || 8080,()=>{
    console.log("Backend Server Started on port %PORT%".replace("%PORT%",process.env.PORT));
})