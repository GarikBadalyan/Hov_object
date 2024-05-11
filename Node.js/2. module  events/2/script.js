
let a = 0
let print = ()=>{
   a++
   console.log(a)
}
let evt = require('events')
let emt = new evt.EventEmitter()
emt.on('click',print)
emt.addListener('click',print)
emt.once('click',print)
emt.emit('click')
emt.emit('click')
