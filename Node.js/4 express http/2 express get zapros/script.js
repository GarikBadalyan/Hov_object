let express = require('express')
let app = express()
app.get('/',function(request,response){
   console.log(request.url);
   console.log('method ' + request.method)
   console.log('query ' + request.query)
   console.log('protocol ' + request.protocol)
   response.send('<h1> hello world </h1>')
})
app.get('/about',function(request,response){
   console.log(request.url)
   response.send('<h1> About Page </h1>')
})
app.get('/products',function(request,response){
   console.log(request.url)
   response.send('<h1> Products page </h1>')
})
app.listen(3003)
