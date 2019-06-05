/* Contient certaines autres fonctions utilisées dans le projet */

/**
 * 
 * @param {*} url L'url à rediriger
 */
function redirect(url) {
    window.location.pathname = url;
}

/*Fonction permettant de definir les valeurs dans les zone spécifié*/
function setValue(id){
	var span = document.getElementById(id),
		input;

	span.removeAttribute("style");

	if (id == "yourSelf") {
		input = document.getElementById("noms").value;

	}else if(id == "yourEmail"){
		input = document.getElementById("email").value
	}

	span.innerHTML = input;
}