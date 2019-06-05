//Declaration des variables
$(document).ready(function () {
    initCategories();
});

//Fonction d'initialisation
function initCategories() {
    windowLocation = window.location.pathname;
    
    if ((windowLocation === "/")) {
        
        findHomecategories(12);
    }

    if ((windowLocation.split('/')[1] == "formations") && (windowLocation.split('/')[3] == "toutes-les-formations")) {

        getSelectedCategory();

        $("#formationCategorieSelect").on('change', function () {
            
            getFormationByCat($("#formationCategorieSelect").val());
        })
    }

}

//Recupere 5 formations a venirs
function findHomecategories(limit) {
    $.ajax({
         url: getHostApi() + 'categorieFormation/getAllcategoriesByLimit/' + limit,
         type : 'GET',
         beforeSend : function () {
             $("#categoryZone")[0].getElementsByClassName('lds-ring')[0].style.display = "block";
         },
         success : function (reponse) {
             $("#categoryZone")[0].getElementsByClassName('lds-ring')[0].style.display = "none";

            if (reponse.data.length > 0 ) {

                var zoneCategory = '<div class="container">' + 
                                    '<div class="section_title">' +
                                        '<h3 class="title segoe-black">' +
                                            'Uhtec training' +
                                        '</h3>' +
                                    '</div>' +
                                    '<div class="row">' +
                                        '<div class="col-12 col-md-8">' +
                                            '<p class="segoe-light" style="font-size: 20px;">' +
                                                'L\'une des offres de formation les plus vastes du marché pour les professionnels de l\'informatique avec un catalogue proposant plus de 1000 cours'+
                                            '</p>' +
                                        '</div>' +
                                    '</div>' +
                                    '<div id="categorySingle" class="row mt30">' +
                                    '</div>' +
                                    '</div>';

                $("#categoryZone").html(zoneCategory);

                reponse.data.forEach(function (category, indexCategory, tabCategory) {
                    var category = '<div class="col-md-6 col-lg-3">' +
                                    '<a href="#">' +
                                        '<div class="icon_box_one">' +
                                            '<i class="lnr lnr-mic"></i>' +
                                            '<div class="content">' +
                                                '<h4 class="segoe-black">' + category.nom + '</h4>' +
                                                '<a class="segoe-light" href="/formations/'+ category.id_cat +'/toutes-les-formations">Voir les formation</a>' +
                                            '</div>' +
                                        '</div>' +
                                    '</a>' +
                               ' </div>';
                    $("#categorySingle").append(category);

                })
            }
         }
    })
}

//Recupere les categories dans le select input
function getSelectedCategory() {
    $.ajax({
        url : getHostApi() + 'categorieFormation/getAllcategories',
        type : 'GET',
        beforeSend : function () {
            
        },
        success : function (donnees) {
            
            if (donnees.success) {

                donnees.data.forEach(function (category, indexCategory, tabCategory) {
                    if (category.etat_cat == 1) {
                        var selected = function () {
                            if (category.id_cat == windowLocation.split('/')[2]) {

                                return "selected=\"selected\""; 
                            }else{
                                return ''
                            }
                        },
                        categoryInput = `
                                    <option value="${category.id_cat}" ${selected()}>${category.nom}</option>
                        `;

                        $("#formationCategorieSelect").append(categoryInput);
                    }
                })
            }
        }
    })
}

//#endregion FORMATION_DETAILS