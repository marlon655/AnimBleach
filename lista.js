window.onload = function (){

//DESCRIÇÃO DESTAQUE - GERADOR DE RETICÊNCIAS-------------------------------------------------------------------------------------------------------------------
let destaqueImg = document.querySelectorAll('.box');
let descricao = document.querySelectorAll('.box .overlay .descricao-catalogo span');
for (var i = 0; i < destaqueImg.length; i++) {
if (descricao[i].textContent.length > 135) {
	descricao[i].textContent = descricao[i].textContent.substr(0,135) + "... Leia Mais";
}
}

//LARGURA DO CONTAINER DE DESTAQUES.------------------------------------------------------------------------------------------------------------------------------
	let destaque = document.querySelector('.destaques-wraper');
	// let destaqueImg = document.querySelectorAll('.box');
	let destaqueWidth = 0;
	for (var i = 0; i < destaqueImg.length; i++) {
		destaqueWidth += destaqueImg[i].clientWidth;
	}
		destaque.style.width = destaqueWidth + "px";

//--estilizaçao temporada ao iniciar o navegador.------------------------------------------------------------------------------------------------------------------
	let temporada = document.querySelectorAll('.temporada-item h2');
	let temporadaItem = document.querySelector('.temporada-item');
		temporada[0].textContent += ' Temporada';
		temporada[0].style.backgroundColor = "#F5941B";

//--Ao clicar na temporada.
	let lastIndex = 0;
	temporada.forEach((item,index)=>{
		temporada[index].addEventListener('click',()=>{
			let lastText = document.querySelectorAll('.temporada-item h2')[lastIndex];
			let actualText = document.querySelectorAll('.temporada-item h2')[index];
			// console.log(lastText);
			lastText.textContent = lastText.textContent.replace(' Temporada','');
			lastText.style.backgroundColor = "";
			actualText.textContent += ' Temporada';
			actualText.style.backgroundColor = "#F5941B";
			lastIndex = index;
		})
	})

//calculo da largura da box de temporadas.-----------------------------------------------------------------------------------------------------------------------
	let tempContainer = 67; //Provisório.
	for (var i = 0; i < temporada.length; i++) {
		tempContainer += temporada[i].clientWidth;
	}
	temporadaItem.style.width = tempContainer+"px";

// -----------------------Responsivo-para-imagens-e-videos---------------------------------------------------------------------------------------------------------
	//TO DO: passar como argumento para funçao para poder ser reutilizado.
	let x = document.querySelector('.box-imagem');
	let playList = document.querySelector('.play-list');
	const imgX = 732;
	function lista(){
	let xw = x.clientWidth;
    let calc = (xw / imgX);
    let height = 370 * calc;
    playList.style.height = height+"px";

    if(window.innerWidth < 930){
    	   height = 700 * calc;
    	   playList.style.height = height+"px";
    }
	}
	lista();
	window.addEventListener('resize',()=>{
    lista();
     
})
};