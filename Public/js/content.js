function changeLang(){
	var button = document.getElementById("button-lang");

	var viLang = document.getElementById("vi-lang");
	var enLang = document.getElementById("en-lang");

	var viHead = document.getElementById("vi-head");
	var enHead = document.getElementById("en-head");

	var viBody = document.getElementById("vi-body");
	var enBody = document.getElementById("en-body");

	var viTitle = document.getElementById("vi-title");
	var enTitle = document.getElementById("en-title");

	if(button.className == "butt-en"){
		//Vi Mode
		button.classList.remove("butt-en");
		enLang.classList.remove("active");
		enTitle.style.display = "none";
		enHead.style.display = "none";
		enBody.style.display = "none";

		button.classList.add("butt-vi");
		viLang.classList.add("active");
		viTitle.style.display = "block";
		viHead.style.display = "block";
		viBody.style.display = "block";
	}
	else{
		//Eng Mode
		button.classList.remove("butt-vi");
		viLang.classList.remove("active");
		viTitle.style.display = "none";
		viHead.style.display = "none";
		viBody.style.display = "none";

		button.classList.add("butt-en");
		enLang.classList.add("active");
		enTitle.style.display = "block";
		enHead.style.display = "block";
		enBody.style.display = "block";
		
	}
}

//Item overflow
$(document).ready(function(){
	
	var lim = 200;
	
	$(".main-item item-head").each(function(){
		var text = $(this).text();
		if(text.length > lim){
			var newText = text.substr(0,lim);
			$(this).text(newText+"...");
		}
	});
});