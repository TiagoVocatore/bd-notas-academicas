

function contar() {
 var tn1 = document.getElementById ("tnum1");
 var rest =  document.getElementById ("rest");
 
 var n1 = Number(tn1.value);
 
 rest.innerHTML = " <br> Contando: <br>";
 
 for (c=1;c<=10;c++) {
 

  rest.innerHTML += " "+n1+" x "+c+" = "+n1*c+ " <br>";
 }
 
 }

 function calcular() {
 var tn1 = document.getElementById ("cnum1");
 var tn2 = document.getElementById ("cnum2");
 var resc = document.getElementById ("resc");
 var n1 = Number(tn1.value);
 var n2 = Number(tn2.value);
 var soma = n1 + n2;
 var div = n1 / n2;
 var mult = n1 * n2;
 var exp = n1 ** n2;
 var rest = n1 % n2;
 
 if (n2 == 0) {
 resc.innerHTML =  ` <br> A soma entre ${n1} e ${n2} é ${soma}`+ 
 ` <br> Não existe divisão pro zero`+ 
 ` <br> A multiplicação entre ${n1} e ${n2} é ${mult}`+ 
 ` <br> ${n1} elevado a ${n2} é ${exp}`;
	 
 }
 
 else {
 resc.innerHTML =  ` <br> A soma entre ${n1} e ${n2} é ${soma}`+ 
 ` <br> A divisão entre ${n1} e ${n2} é ${div.toFixed(2)}`+ 
 ` <br> A multiplicação entre ${n1} e ${n2} é ${mult}`+ 
 ` <br> ${n1} elevado a ${n2} é ${exp}`+ 
 ` <br> O resto entre ${n1} e ${n2} é ${rest}`;
 }
 }


function país() {
 var txlugar = document.getElementById("lugar");
 var res = document.getElementById("resb");
 var lugar = (txlugar.value.toUpperCase());
 
 
 
 if (lugar == "BRASIL" || lugar =="BRA" || lugar=="BR") {
  resb.innerHTML = " <p> <br> Você é brasileiro </p>";
 }
 else {
  resb.innerHTML = " <p> <br> Você é estrangeiro </p>";
 }
}

function votar() {
 var txidade = document.getElementById("idade");
 var resv = document.getElementById("resv");
 var idade = Number(txidade.value);
 
 

 if (idade<=0) {
 resv.innerHTML = " <p> <br>Sua idade é de 0 ano. Você não vota </p>";
 }
 
 else if (idade ==1) {
 resv.innerHTML = " <p> <br>Sua idade é de "+idade+" ano. Você não vota </p>";
 }
 
 else if (idade < 16 ) {
  resv.innerHTML = " <p> <br>Sua idade é de "+idade+" anos. Você não vota </p>";
 }
 else if (idade <18 || idade > 65) {
  resv.innerHTML = " <p> <br>Sua idade é de "+idade+" anos. O voto é opcional </p>";
 }
 
 else {
 resv.innerHTML = " <p> <br>Sua idade é de "+idade+" anos. O voto é obrigatório </p>";
 }
 
}


 
 