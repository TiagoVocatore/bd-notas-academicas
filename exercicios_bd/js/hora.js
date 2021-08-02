function carregar() {
	
var msg = document.getElementById("msg");
var img = document.getElementById ("imagem");
var data = new Date();
var hora = data.getHours();


if ( hora <12) {
	msg.innerHTML = "Bom Dia! agora são " +hora+ " horas."
	img.src="imagens/manha.jpg";

}

else if ( hora <17) {
	msg.innerHTML = "Boa Tarde! agora são " +hora+ " horas."
	img.src="imagens/tardein.jpg";

}

else if ( hora <18) {
	msg.innerHTML = "Boa Tarde! agora são " +hora+ " horas."
	img.src="imagens/tardefim.jpg";

}


if ( hora >=18) {
	msg.innerHTML = "Boa Noite! agora são " +hora+ " horas."
	img.src="imagens/noite.jpg";

}
}