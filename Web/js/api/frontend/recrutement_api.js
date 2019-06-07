//Declaration des variables
$(document).ready(function () {
    initRecrutement();
});

//Fonction d'initialisation
function initRecrutement() {
    windowLocation = window.location.pathname;
    
    if (/recrutement/i.test(windowLocation)) {
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

			var recrut = document.querySelector(".userRecrute");
			
			$(".formRecrutement").fadeOut(function () {

				$(".userRecrute").removeClass("col-md-4");
				$(".userRecrute").addClass("col-md-12");
				$(".userRecrute").addClass("step2");

				abonnement.removeAttribute("id");
				abonnement.setAttribute("id", "sendRecrutement");
				abonnement.innerText = "Finaliser";

				var content = `<div class="form-group">
                                	<input type="password" class="form-control" placeholder="Entrer un mot de passe...">
                                </div>`;

                $("#sendRecrutement").click(function (e) {
                	e.stopPropagation();
                })

                $('#formMdp').append(content);
			});
			
		}
	})
}