const express = require('express')
const mysql = require('mysql')
const dotenv = require('dotenv')
const path = require('path')
const app = express()
dotenv.config({path:"./.env"})
const db = mysql.createConnection({
   host:process.env.DATABASE_HOST,
   user:process.env.DATABASE_USER,
   password:process.env.DATABASE_PASSWORD ,
   database:process.env.DATABASE
})
db.connect(function(error){
   if(error){
      console.log(error)
   }else{
      console.log("mysql conneqted")
   }
})
app.set('view engine', "hbs")
let publikDirectory = path.join(__dirname,"./publik")
console.log(publikDirectory)
app.use(express.static(publikDirectory))

app.use(express.urlencoded({extended:false}));
app.use(express.json())
/*
app.get("/",function(req,res){
    //res.send("<h1>home page</h1>")
    res.render("index")
})
app.get('/register',function(req,res){
    res.render("register")
})
 */
app.use('/',require('./routes/pages'));
app.use('/auth', require("./routes/auth"))

app.listen(5003,function(){
   console.log('server@ gorcarkvel e')
})
