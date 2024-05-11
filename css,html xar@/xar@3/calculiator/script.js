function plus() {
  let num1 = document.getElementById("n1").value;
  num1 = parseInt(num1);
  let num2 = document.getElementById("n2").value;
  num2 = parseInt(num2);
  let rezult = num1 + num2;
  document.getElementById("out").innerHTML = rezult;
}
function hanum() {
  let num1 = document.getElementById("n1").value;
  num1 = parseInt(num1);
  let num2 = document.getElementById("n2").value;
  num2 = parseInt(num2);
  let rezult = num1 - num2;
  document.getElementById("out").innerHTML = rezult;
}
function bazmapatkum() {
  let num1 = document.getElementById("n1").value;
  num1 = parseInt(num1);
  let num2 = document.getElementById("n2").value;
  num2 = parseInt(num2);
  let rezult = num1 * num2;
  document.getElementById("out").innerHTML = rezult;
}
function bajanum() {
  let num1 = document.getElementById("n1").value;
  num1 = parseInt(num1);
  let num2 = document.getElementById("n2").value;
  num2 = parseInt(num2);
  let rezult = num1 / num2;
  document.getElementById("out").innerHTML = rezult;
}
