const express = require('express');
//У express объекта верхнего уровня есть метод Router (), который создает новый router объект
//Создает новый объект маршрутизатора .
const router = express.Router();
router.get('/', (req,res) => {
    res.render('index');
});
router.get('/register', (req,res) => {
    res.render('register');
});

router.get('/login', (req,res) => {
    res.render('login');
});

router.get('/home', (req,res) => {
    res.render('home');
});
module.exports = router