import express from 'express'
import path from 'path'
let app = express()
let PORT = process.env.PORT ?? 3000

let __dirname = path.resolve()
app.set('view engine','ejs')
app.set('views',path.resolve(__dirname,'ejs'))
app.get('/',function(req,res){
   res.render('index')
})
app.get('/fuechers',function(req,res){
   res.render('fuechers')
})
app.listen(PORT,function() {
   console.log("Gorcarkvel e")
  })
