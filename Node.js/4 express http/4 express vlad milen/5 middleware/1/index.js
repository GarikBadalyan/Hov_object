import express from "express"
import path from "path"
const __dirname = path.resolve()
const app = express()
const PORT = process.env.PORT ?? 3000
//app.use(express.static(path.resolve(__dirname,'static')))
app.use(function(req,res,next){
   if(req.url =='/'){
      res.end("Hello")
   }else{
      next()
   }
})
app.use(function(req,res,next){
   if(req.url =='/test'){
      res.end("Test")
   }else{
      next()
   }
})
app.use(function(req,res){
   res.send(404,"Page not found Sorry")
})
app.listen(PORT,function(){
   console.log(`gorcarkvel e ${PORT}...`)
})
