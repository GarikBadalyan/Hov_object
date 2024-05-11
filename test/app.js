const express = require("express");
const path = require('path');
const mysql = require("mysql");

const cookieParser = require('cookie-parser')
const dotenv = require('dotenv');
dotenv.config({path:'./.env'});
const app = express();
const db = mysql.createConnection({
    host:process.env.DATABASE_HOST,
    user:process.env.DATABASE_USER,
    password:process.env.DATABASE_PASSWORD,
    database:process.env.DATABASE
});
const publicDirectory = path.join(__dirname, './public')
app.use(express.static(publicDirectory))
//Анализировать тела в кодировке URL (отправленные HTML-формами)
app.use(express.urlencoded({ extended: false}));
//Анализировать тела JSON
app.use(express.json());
//для анализа файлов cookie.
app.use(cookieParser());
//console.log(__dirname);
app.set('view engine', 'hbs');
db.connect(function(error){
    if(error){
        console.log(error)
    }else{
        console.log("mysql connected")
    }
})
/*
app.get("/",function(req,res){
    //res.send("<h1>home page</h1>")
    res.render("index")
})
app.get('/register',function(req,res){
    res.render("register")
})
 */
//Define Routes:  определить маршрутизатор
app.use('/',require('./routes/pages'));
app.use('/auth',require('./routes/auth'));
app.listen(5003,function(){

    console.log("server connected")
})