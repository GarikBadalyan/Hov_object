let express = require('express')
let app = express()
app.all('*',function(req,res){
   console.log('method ' + req.method)
   console.log('query ' + req.query)
   console.log('protocol ' + req.protocol)
   console.log('secure ' + req.secure)
   console.log('accepts ' + req.accepts(['text/html','application/json']))
   console.log('content type header: ' + req.get('Content-type'))
   console.log("-------------------")
   res.end()
})
app.listen(3002)