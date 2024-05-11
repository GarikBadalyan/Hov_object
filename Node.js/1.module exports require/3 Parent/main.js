function StexcelKap() {
   this.kap = ()=>{
      console.log(("kap@ hastatvel e connection established"))
   }
  }
function kapiPorcarkum(){
   console.log('kap@ porcarkvac e ...')
   new StexcelKap().kap()
}
if(module.parent){
   module.exports = StexcelKap
}
else{
kapiPorcarkum()
}
