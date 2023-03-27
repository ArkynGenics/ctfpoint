const express = require("express");
const router = express.Router();
const userRouter = require("../domains/user/routes")

router.use('/api/user',userRouter)

module.exports= router;