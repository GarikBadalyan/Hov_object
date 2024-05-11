const express = require('express')
const authoController = require('../controllers/auth')
const router = express.Router()
router.post('/register',authoController.register)

module.exports = router
