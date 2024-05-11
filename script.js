//hello functiayi mijocov
function hello() {
  document.write("Hello");
}
hello();
//functiayi mijocov orinak hashvel 5 -i 4-i 3 -i qarakusin
function hashiv(x) {
  return x * x;
}
document.write(
  "<br />" + hashiv(5) + "<br />" + hashiv(4) + "<br />" + hashiv(3) + "<br />"
);
// mek ayl dzevi
function ardyunq(a) {
  document.write(a * a);
}
// erku tveri artadryal@
ardyunq(5);
function ardyunq(a, b) {
  return a * b;
}
document.write(ardyunq(5, 4));
//ayspisi ban
function ardyunq(aaa) {
  document.write(aaa);
}
ardyunq("arev"); //ktpi arev
//asorva exanak@ arevayin
function exanak3(ooo) {
  document.write("aysorva exanak@" + " " + ooo);
}
exanak3("arevayin");

function exanak3(ooo) {
  document.write("aysorva exanak@" + " " + ooo * 2);
}
exanak3(5); //ktpi aysorva exanak@ 10

// erb functiayi mej mek ayl functia enq kanchum
function sum(a) {
  console.log("Barev axper jan" + a * a);
}
sum(8);
console.log("------------------");

function gum(x, y) {
  let z = x + y;
  sum(z);
}
console.log(gum(10, 10));
document / write("<br />");
// 
function a(text) {
  document.write(text);
}
a("axpers");

document.write("<br />");
let gum;
function num(x, y) {
  gum = x + y;
}
num(10, 2);
a("gum =" + gum);

//ditarkenq ays depq@ 2 dzevi
function sum(a) {
  document.write(a);
}
sum("hello <br /> world");

function num() {
  document.write("hello <br /> world ");
}
num();