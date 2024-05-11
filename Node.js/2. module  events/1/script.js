// eventneri het ashxatelu hamar anhrajesht e miacnel "events" modul@

let evt = require('events')
// bolor obyektner@ voronq generacvum en Node.js - um petq e krknorinakven EventEmiter klassic
let emitter = new evt.EventEmitter()

// vorpisi texadrenq iradardzutyan@ lsox anhrajesht e ogtagordzenq on()
emitter.on('click',function(){
console.log("papken stexcvel e")
})
// iradardzutyun@ generacnelu hamar ogtagorcum enq emit()- metod@
emitter.emit('click')
