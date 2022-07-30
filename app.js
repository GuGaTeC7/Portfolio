const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

function toggle(){
	var cinema = document.querySelector(".cinema")
	cinema.classList.toggle("active")
}

function toggle1(){
	var banco = document.querySelector(".banco")
	banco.classList.toggle("active")
}

function toggle2(){
	var pacMan = document.querySelector(".pacMan")
	pacMan.classList.toggle("active")
}

function toggle3(){
	var neWorld = document.querySelector(".neWorld")
	neWorld.classList.toggle("active")
}

function lerMais() {
	var pontos = document.getElementById("pontos")
	var maisTexto = document.getElementById("mais")
	var btnLeia = document.getElementById("lerMais")
	var card = document.getElementById("card")

	if(pontos.style.display === "none"){
		pontos.style.display = "inline";
		maisTexto.style.display = "none";
		btnLeia.innerHTML = "Ler Mais";
		card.style.height = "650px";
	} else {
		pontos.style.display = "none";
		maisTexto.style.display = "inline";
		btnLeia.innerHTML = "Ler Menos";
		card.style.height = "800px";
	}
}

function lerMais1() {
	var pontos = document.getElementById("pontos1")
	var maisTexto = document.getElementById("mais1")
	var btnLeia = document.getElementById("lerMais1")

	if(pontos.style.display === "none"){
		pontos.style.display = "inline";
		maisTexto.style.display = "none";
		btnLeia.innerHTML = "Ler Mais";
	} else {
		pontos.style.display = "none";
		maisTexto.style.display = "inline";
		btnLeia.innerHTML = "Ler Menos";
	}
}

function lerMais2() {
	var pontos = document.getElementById("pontos2")
	var maisTexto = document.getElementById("mais2")
	var btnLeia = document.getElementById("lerMais2")

	if(pontos.style.display === "none"){
		pontos.style.display = "inline";
		maisTexto.style.display = "none";
		btnLeia.innerHTML = "Ler Mais";
	} else {
		pontos.style.display = "none";
		maisTexto.style.display = "inline";
		btnLeia.innerHTML = "Ler Menos";
	}
}

function lerMais3() {
	var pontos = document.getElementById("pontos3")
	var maisTexto = document.getElementById("mais3")
	var btnLeia = document.getElementById("lerMais3")
	var card = document.getElementById("card3")

	if(pontos.style.display === "none"){
		pontos.style.display = "inline";
		maisTexto.style.display = "none";
		btnLeia.innerHTML = "Ler Mais";
		card.style.height = "650px";
	} else {
		pontos.style.display = "none";
		maisTexto.style.display = "inline";
		btnLeia.innerHTML = "Ler Menos";
		card.style.height = "800px";
	}
}