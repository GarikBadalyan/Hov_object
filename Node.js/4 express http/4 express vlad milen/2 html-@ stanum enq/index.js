import express from "express"
import path from "path"
const __dirname = path.resolve()
const app = express()
const PORT = process.env.PORT ?? 3000
app.get('/',function(req,res){
res.sendFile(path.resolve(__dirname,'static','index.html'))
})
app.listen(PORT,function(){
   console.log(`gorcarkvel e ${PORT}...`)
})
