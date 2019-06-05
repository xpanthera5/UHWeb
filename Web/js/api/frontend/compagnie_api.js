//Declaration des variables
$(document).ready(function () {
    initCompagnie();
    // getFormations();
});

//Fonction d'initialisation
function initCompagnie() {
    windowLocation = window.location.pathname;
    if ((windowLocation === "/emplois")) {
    	
    	getCompagnies();
    }

}

//FindJobs
function getCompagnies() {
	$.ajax({
		url : getHostApi() + 'compagnies/find',
		type : 'GET',
		success : function (data) {
			
			if (data.length > 0) {

				data.forEach(function (compagnie, indexCompagnie, tabCompagnie) {
					
					var input = '<option value="'+ compagnie.id +'">'+ compagnie.nom +'</option>';

					$("#compagnie-select").append(input);
				})
			} else {

			}
		}
	})
}


//#endregion FORMATION_DETAILS