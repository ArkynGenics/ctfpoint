const express = require("express");
const router = express.Router();
const userRouter = require("../domains/user/routes")
const eventRouter = require("../domains/event/routes")
const writeupRouter = require("../domains/writeup/routes")
const feedbackRouter = require("../domains/feedback/routes")

router.use('/api/user', userRouter)
router.use('/api/event', eventRouter)
router.use('/api/writeup', writeupRouter)
router.use('/api/feedback', feedbackRouter)

module.exports= router;