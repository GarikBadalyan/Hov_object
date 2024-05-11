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
      console.log("database --- ok")
   }
})
let query = "SELECT * FROM `users` "
conn.query(query,function(err,result,field){
   console.log(err)
   console.log(result)
   //console.log(field)
})
