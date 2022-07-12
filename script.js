	let menu = document.querySelector('nav.mobile');
	let ul = document.querySelector('.mobile ul');

	let open = false;
	menu.addEventListener('click',()=>{
		if(open){
			open = false;
			ul.style.display = 'none';
		}else{
			open = true;
			ul.style.display = 'block';
		}
	})