//Declaration des variables
$(document).ready(function () {
    initVilles();
    // getFormations();
});

//Fonction d'initialisation
function initVilles() {
    windowLocation = window.location.pathname;
    if ((windowLocation === "/emplois")) {
    	
    	getVilles();
    }

}

//FindJobs
function getVilles() {
	$.ajax({
		url : getHostApi() + 'villes/find',
		type : 'GET',
		success : function (data) {
			
			if (data.length > 0) {

				data.forEach(function (ville, indexVille, tabVilles) {
					
					var input = '<option value="'+ ville.id +'">'+ ville.slug +'</option>';

					$("#ville-select").append(input);
				})
			} else {

			}
		}
	})
}


//#endregion FORMATION_DETAILS