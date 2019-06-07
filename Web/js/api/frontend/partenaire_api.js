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

                //Tri côté client
                res.data.sort((partner1, partner2) => {
                    if (partner1.id > partner2.id) {
                        return -1;
                    }

                    return 1;
                });

                res.data.map((partner, item) => {

                    verifyImageFile(getHostApi(), partner.logo, (isset, message, result) => {
                        
                        var source = () => {
                                return result && isset ? result : getWebSiteHost() + `img/brands/b${item + 1}.png`;
                            },
                            content = `<div class="col-2 col-md-3 text-center ownPartner">
                                        <img src="${source()}" alt="${partner.nom}" title="${partner.nom}">
                                    </div>`
                        ;

                        $("#AllPartners").append(content);

                    })

                })
            }
        },
        error: function (err) {
            console.log(err);
        }
    })
}