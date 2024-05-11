
let evt = require('events')
let emitter = new evt.EventEmitter()
emitter.on('click',function(name){
   console.log(`hello ${name}`)
})
emitter.emit('click',"Garik")
