import express from "express"
const PORT = process.env.PORT ?? 3003
import path from 'path'
const app = express()
const __dirname = path.resolve()
app.get('/',function(req,res){
    res.send("<h1>hello worlds!!!!</h1>")
})
app.get('/now',function(req,res){
    res.redirect(301,"old")
})
app.get("/old",function(req,res){
    res.send("<h1>AAAAAAAAAAAA</h1>")
})
app.listen(PORT,function(){
    console.log(`gorcarkvel e ${PORT} `)
})
