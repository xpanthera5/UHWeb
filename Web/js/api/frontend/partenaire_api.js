//Declaration des variables
$(document).ready(function () {
    initPartenaire();
});

//Fonction d'initialisation
function initPartenaire() {
    windowLocation = window.location.pathname;
    
    if (windowLocation = "/") {
        getPartners();
    }

}

function getPartners() {
    $.ajax({
        url: getHostApi() + '/partenaires/getPartenaires/8',
        type: 'GET',
        success: function (res) {
            if (res.success) {

                var exitPartners = 0;

                res.data.map(partner => {

                    var content = `<div class="brand_item text-center">
                                        <img src="${partner.logo}" alt="${partner.nom}">
                                    </div>`;

                    $("#carouselPartners").append(content)
                    
                    exitPartners++;

                    if (exitPartners == res.data.length) {
                    }
                })
            }
        },
        error: function (err) {
            console.log(err);
        }
    })
}