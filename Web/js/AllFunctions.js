/* Module gérant l'affichage de setflash*/
function setFlash(data, bloc) {
	var flash = document.createElement("div"),
		color = "#fff",
		backColor = "#333";

	flash.id = "setFlash";

	if (/success|succes|ok|parfait/i.test(data.type)) {
		backColor = "#2ff14f";

	}else if(/warning|error|unexpected|erreur|nosucces/i.test(data.type)){
		backColor = "#f00";
	}


	if (/top|haut/i.test(data.position)) {
		flash.style.top = "10px";
    	flash.className = 'flashTop';
	}else if (/bottom|bas/i.test(data.position)) {
		flash.style.bottom = "10px";
    	flash.className = 'bottom';
	}
	
	flash.style.display = 'block';
    flash.style.color = color;
    flash.style.backgroundColor = backColor;
    flash.style.opacity = '1';

	$(bloc).append(flash);

	setTimeout(function() {

	    flash.style.opacity--;
	    flash.removeAttribute('class');

	    if (flash.style.opacity < 0) {
	        flash.style.opacity = '0';
	        
	    }

	    setTimeout(function() {
            if (data.urlRedirect) window.location.href = data.urlRedirect;
        }, data.timeRedirect && data.urlRedirect ? parseInt(data.timeRedirect) : 10)

	    document.body.removeChild(flash)

    }, 4000);
    

    flash.innerHTML = (data.icon ? data.icon : (data.img ? "<img src='" + data.img +"' style='height: 50px; width: 50px;'/>" : "")) + "&nbsp;&nbsp;" + data.message;
}