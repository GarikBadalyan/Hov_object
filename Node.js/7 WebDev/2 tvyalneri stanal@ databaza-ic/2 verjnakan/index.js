//const mysql = require('mysql')
import mysql from 'mysql'
const conn = mysql.createConnection({
   host:"localhost",
   user:"mysql",
   database:"magazin",
   password:"mysql"
})
conn.connect(function(err){
   if(err){
      console.log(err)
      return err
   }
   else{
      console.log("database --- miacel e")
   }
})
let query11 = "SELECT * FROM `users` "
conn.query(query11,function(err,result,field){
   console.log(err)
   console.log(result)
   console.log(result[1]['name'])
   //console.log(field)
})
conn.end(function(err){
   if(err){
      console.log(err)
      return err
   }
   else{
      console.log("Database === close")
   }
})
