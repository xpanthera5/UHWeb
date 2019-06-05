//Declaration des variables
$(document).ready(function () {
    initJobs();
    // getFormations();
});

//Fonction d'initialisation
function initJobs() {
    windowLocation = window.location.pathname;
    if ((windowLocation === "/emplois")) {
    	motValue = $("#motJob").val() ? $("#motJob").val() : null;
    	compagnie_id = $("#compagnie-select").val() ? $("#compagnie-select").val() : null;
    	ville_id = $("#ville-select").val() ? $("#ville-select").val() : null;
        findJobs(motValue, compagnie_id, ville_id);
    }

}

//FindJobs
function findJobs(mot, compagnie_id, ville_id) {
	$.ajax({
		url : getHostApi() + 'jobs/find',
		type : 'POST',
		data : {
			"mot" : mot,
			"compagnie_id" : compagnie_id,
			"ville_id" : ville_id
		},
		success : function (data) {

			if (data.length) {

				var jobsbox = '<div class="table-responsive">' + 
					            '<table class="event_calender table">' +
					                '<tbody id="bodyJob">' +
					                '</tbody>' +
					            '</table>' +
					        '</div>';

				$("#jobsbox").html(jobsbox);

				data.forEach(function (job, indexJob, tabJobs) {
					
					var job = '<tr class="tb-offre">' + 
		                        '<td>' +
		                            '<img src="img/cleander/c1.png" alt="event">' +
		                        '</td>' +
		                        '<td class="event_date segoe-black">' +
		                            '<span>February</span>' +
		                            '<span>2019</span>' +
		                        '</td>' +
		                        '<td>' +
		                            '<div class="event_place">' +
		                                '<a href="#"><h5 class="segoe-light">'+ job.offre_titre +'</h5></a>' +
		                                '<span class="segoe-light">'+ job.offre_compagnie_nom +'</span>' +
		                                '<p class="segoe-light"><i style="font-size: 15px;" class="ion-ios-location-outline"></i>&nbsp;'+ job.offre_ville_slug +'</p>' +
		                            '</div>' +
		                        '</td>' +
		                        '<td class="buy_link">' +
		                            '<p class="segoe-black">'+ job.offre_type_contrat_slug +'</p>' +
		                        '</td>' +
		                        '<td>' +
		                            '<a href="#" class="btn btn-primary btn-rounded">Postulez</a>' +
		                        '</td>' +
		                    '</tr>';
		            $("#bodyJob").append(job);
				})

			} else {

			}
		}
	})
}


//#endregion FORMATION_DETAILS