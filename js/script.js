var Resizer = {
	iWrapper: null,
	iVerticle: null,
	iContent: null,
	iProfile: null
}

Resizer.init = function(evt){
	if(evt.type == "load"){
		Resizer.iWrapper = document.getElementById("wrap");
		Resizer.iVerticle = document.getElementById("verticle");
		Resizer.iContent = document.getElementById("content")
		Resizer.iProfile = document.getElementById("profile");
	}
	var iDocHeight = document.documentElement.clientHeight;
	
	Resizer.iWrapper.style.height = iDocHeight - 140+"px";
	Resizer.iContent.style.height = iDocHeight - 140+"px";
	Resizer.iProfile.style.height = iDocHeight - 140+"px";
}

window.onload = Resizer.init;
window.onresize = Resizer.init;