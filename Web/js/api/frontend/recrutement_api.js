//Declaration des variables
$(document).ready(function () {
    initRecrutement();
});

//Fonction d'initialisation
function initRecrutement() {
    windowLocation = window.location.pathname;
    
    if (windowLocation = "/recrutement") {
        abonnementRecrut();
    }

}

function abonnementRecrut() {
	var abonnement = document.getElementById("abonnement");

	abonnement.addEventListener("click", (e) => {
		e.preventDefault();

		var form = document.getElementById("formRecrute"),
			inputs = form.querySelectorAll("input");

		if ((inputs[0].value != "") && (inputs[1].value != "") && (inputs[2].value != "") && (inputs[3].value != "")) {

			var recrut = document.querySelector("userRecrute");
			
			$(".formRecrutement").fadeOut(function () {

				recrut.classList.remove("col-md-4");
				recrut.classList.add("col-md-12");
				recrut.classList.add("step2");

				abonnement.setAttribute("id", "sendRecrutement");
				abonnement.innerText = "Finaliser"
			});
			
		}
	})
}