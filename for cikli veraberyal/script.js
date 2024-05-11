//1-ic 5 tver@ tpel
for (let i = 1; i <= 5; i = i + 1) {
  document.write(" " + i);
}
// 1 - ic 10 tveri gumar@ tpel
let a = 0;
for (let i = 1; i <= 10; i++) {
  a = a + i;
}
document.write("<br />" + a);
//1 -ic 20 tveri mijic tpenq kent ev zuyg tver@ naev zuyg tveri gumar2 ev kent tveri gumar@
document.write("<br />");
let a1 = 0;
for (let i = 0; i <= 20; i = i + 2) {
  a1 = a1 + i;
  document.write(" " + i);
}
document.write("<br />");
document.write(a1);
document.write("<br />");
let a2 = 0;
for (let i = 1; i <= 20; i = i + 2) {
  a2 = a2 + i;
  document.write(" " + i);
}
document.write("<br />" + a2);
//1-ic 10 tveri mijic tpenq bolor@ baci 7ic ev 8-ic
document.write("<br />");
for (let i = 1; i <= 10; i++) {
  if (i == 7 || i == 8) continue;
  document.write(" " + i);
}
//tpenq -4 ic +8 tver@
document.write("<br />");
for (let i = -4; i <= 8; i++) {
  document.write(" " + i);
}
//0-ic 30 tveri mijic voronq 3-i bajanvum en ev chen baanvum
document.write("-------------------");
document.write("<br />");
for (let i = 1; i <= 30; i++) {
  if (i % 3 == 0) document.write(" " + i);
}
document.write("<br />");
for (let i = 1; i <= 30; i++) {
  if (i % 3 == 0) continue;
  document.write(" " + i);
}
document.write("<br />");

nextprime: for (let i = 2; i <= 100; i++) {
  for (let j = 2; j < i; j++) {
    if (i % j == 0) continue nextprime;
  }
  document.write(" " + i);
}
/* tpel 1-ic 100 tver@  ete tiv@ anmnacord bajanvume e miayn 3-i apa tpel
 "fizz" bar@ ete bajanvum e miayn 5-i apa tpel "buzz" bar@, ete tiv@ bajanvum e ev 3-i ev 5-i apa tpel fizzbuzz
 bar@ mnacac depqerum uxaki tpel tiv@*/

for (let i = 1; i < 100; i++) {
  if (i % 3 == 0 && i % 5 == 0) document.write("<br />" + "Fizzbuzz");
  else if (i % 5 == 0) document.write("<br /> " + "Fizz");
  else if (i % 3 == 0) document.write("<br />" + "buzz");
  else {
    document.write("<br />" + i);
  }
}
//tpel 30-ic 40 ev 50-ic 60 mijakayqi tver@
for (let i = 0; i < 100; i++) {
  if ((i >= 30 && i <= 40) || (i >= 60 && i <= 70)) document.write(" ," + i);
  else {
    continue;
  }
}
//tpel arajin zuyg tiv@ vor@ 17-ov bazmapatkeluc stacvum e 300-ic mec tiv
for (let i = 10; i < 100; i++) {
  if (i * 17 < 300) continue;
  else if (i * 17 > 317) break;
  document.write(i);
}
// KAM VOR NUYNN E
document.write("<br />");
for (let j = 10; j < 100; j++) {
  if (17 * j >= 300) {
    document.write(j);

    break;
  }
}

//1-ic 20 tveri mijic tpel kent tver@ ev hasnelov 15 dadarecnel
for (let i = 1; i < 20; i++) {
  if (i % 2 == 0) continue;
  else if (i == 15) break;
  document.write("<br />" + i);
}
//krknaki ciklner kam nerkarucvac ciklner haskanal manramasn

//erankyunu tesqov astxanishneri dasavorel@
for (let i = 0; i <= 10; i++) {
  for (let j = 0; j < i + 1; j++) {
    document.write(" " + "*");
  }
  document.write("<br />");
}
//ernkyunin astxanishnerov bayc tars dzevov
for (let i = 5; i >= 1; i--) {
  for (let j = 0; j < i; j++) {
    document.write("*");
  }
  document.write("<br />");
}

//erankyunu tesqov tveri dasavorum
for (let i = 0; i < 10; i++) {
  for (let j = 0; j < i; j++) {
    document.write(" " + i);
  }
  document.write("<br />");
}
//astxanishnerov qarakusi
for (let i = 1; i <= 5; i++) {
  for (let j = 1; j <= 5; j++) {
    document.write(" " + "*");
  }
  document.write("<br />");
}
//astxanishnerov qarakusi bayx miayn ezrerum mejtex@ lini orinak 7 tiv@
let n = 4;
for (let i = 0; i <= n; i++) {
  for (let j = 0; j <= n; j++) {
    if (i == 0 || j == 0 || i == n || j == n) {
      document.write(" * ");
    } else {
      document.write(" 7 ");
    }
  }
  document.write("<br />");
}


for (let i = 0; i < 3; i++) {
  for (let j = 0; j < i; j++) {
    document.write(i, "--" + j + "<br /> ");
  }
}
document.write("<br />");

for (let i = 0; i < 3; i++) {
  for (let j = 0; j < i; j++) {
    document.write(j + "<br />");
  }
  document.write(i + "<br />");
}


document.write("<br />");

for (let i = 0; i < 3; i++) {
  for (let j = 0; j < 3; j++) {
    document.write(i, "--" + j + "<br /> ");
  }
}
document.write("<br />");
for (let i = 0; i < 3; i++) {
  for (let j = 0; j < i; j++) {
    document.write(j, "<br /> ");
  }
}

for (let i = 0; i < 3; i++) {
  for (let j = 0; j < i; j++) 
  document.write(i + "<br />");
}
