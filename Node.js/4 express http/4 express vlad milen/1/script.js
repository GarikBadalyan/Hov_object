import express from "express"
const PORT = process.env.PORT ?? 3000
const app = express()
app.get('/',function(req,res){
   res.send("<h1> Hello Worlds!!!! </h1>")
})
app.listen(PORT,function(){
   console.log(`gorcarkvel e ${PORT} `)
})
