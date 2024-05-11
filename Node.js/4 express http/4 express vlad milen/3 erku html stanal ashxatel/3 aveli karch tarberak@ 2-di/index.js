import express from "express"
import path from "path"
const __dirname = path.resolve()
const app = express()
const PORT = process.env.PORT ?? 3000
app.use(express.static(path.resolve(__dirname,'static')))
app.listen(PORT,function(){
   console.log(`gorcarkvel e ${PORT}...`)
})
