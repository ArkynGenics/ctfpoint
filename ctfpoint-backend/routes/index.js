const express = require("express");
const router = express.Router();
const userRouter = require("../domains/user/routes")
const eventRouter = require("../domains/event/routes")

router.use('/api/user', userRouter)
router.use('/api/event', eventRouter)

module.exports= router;