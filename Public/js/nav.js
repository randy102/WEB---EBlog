window.onscroll = function(){
	var width = window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;

	var scroll = document.body.scrollTop || document.documentElement.scrollTop;
	
	var menu = document.getElementsByTagName("menu-wrap");

	if(width > 768){
		if(scroll > 50){
			menu[0].classList.add("menu-scroll");
		}
		else{
			menu[0].classList.remove("menu-scroll");
		}
	}	
	
}