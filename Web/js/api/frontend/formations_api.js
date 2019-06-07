//Declaration des variables
$(document).ready(function () {
    initFormations();
    if (!/forgetMdp/i.test(window.location.pathname.split("/")[window.location.pathname.split("/").length -1])) {
        findCommingSessions(5);
    }
    getCommingFormations();
});

//Fonction d'initialisation
function initFormations() {
    windowLocation = window.location.pathname;
    
    if (windowLocation == "/formations") {
        CategoryCatalogue();
    }

    if ((windowLocation.split('/')[1] == "formations") && (windowLocation.split('/')[3] == "toutes-les-formations")) {

        getFormationByCat(windowLocation.split('/')[2]);
    }

}

function getCommingFormations() {
    $.ajax({
        url: getHostApi() + 'formation/sessions/getSessionsProche',
        type: 'GET',
        beforeSend: function () {

        },
        success: function (res) {
            if (res.success) {
                var formationContent = '';
                var formations = res.data;

                if (formations.length > 0) {
                    
                    formations.map(formation => {
                        
                        var content = `<div class="swiper-slide">
                        <div class="event_box">
                            <div class="overlay-form">
                                <div class="row justify-content-center">
                                    <p class="segoe-black c-white" style="font-size: 25px;padding-top: 50%">
                                        7 Jours
                                    </p>
                                </div>
                            </div>
                            <img src="img/events/event1.png" alt="event">
                            <div class="event_info">
                                <div class="event_title">
                                    ${formation.titre}
                                </div>
                                <div class="speakers">
                                    <span><i style="font-size: 25px;" class="ion-ios-location-outline"></i>&nbsp;${formation.lieu}</span>
                                </div>
                                <div class="event_date">
                                    <i style="font-size: 25px;" class="ion-ios-clock-outline"></i>&nbsp;${customDateSession(formation.date_debut_session, formation.date_fin_session)}
                                </div><br>
                                <a href="/formations/programmation_1/programmationWeb_2/4" class=" btn btn-primary segoe-light" >
                                    Voir le programme
                                </a>
                            </div>
                        </div>
                        </div>`;

                        $('#blocFormComming').append(content);
                    });

                    var swiper2 = new Swiper('.swiperComingFormations', {
                      slidesPerView: 3,
                      centeredSlides: false,
                      spaceBetween: 30,
                      grabCursor: true,
                      loop:false,
                      autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                      },
                      navigation: {
                          nextEl: '.swiper-btnNext-cmg',
                          prevEl: '.swiper-btnPrev-cmg'
                      }
                    })

                }

                
            }
        },
        error: function (err) {
            console.log(err);
        }
    })
}

//Recupere 5 formations a venirs
function findCommingSessions(limit) {
    $.ajax({
        url: getHostApi() + 'formation/sessions/getSessionsProche' + limit,
        type : 'GET',
        beforeSend : function () {
            $("#home")[0].getElementsByClassName('lds-ring')[0].style.display = "block";
        },
        success : function (donnees) {
            $("#home")[0].getElementsByClassName('lds-ring')[0].style.display = "none";
            var cover = `<div id="coverSlider"  class="cover_slider owl-carousel owl-theme">
                        </div>
                        <div class="cover_nav">
                            <ul id="dotFormationComing" class="cover_dots">
                            </ul>
                        </div>
                        `;
            $("#home").html(cover);

            // console.log(donnees);
            

            if (donnees.data.length > 0) {
                var sortieCover = 0;
                donnees.data.forEach(function (session, indexSession, tabSession) {
                    if (session.etat == '1') {
                        var dotActive = function () {
                            if (indexSession == 0) {
                                return "active";
                            }else{
                                return "";
                            }  
                        };
                        var dot = '<li class="'+ dotActive() +'" data="'+ indexSession +'"><span>'+ (indexSession + 1) +'</span></li>';
                        $("#dotFormationComing").append(dot);
                        var dateDebutSession = session.date_debut_session;
                        var dateFinSession = session.date_fin_session;

                        // console.log(customDateSession(dateDebutSession, dateFinSession));
                        

                        var sessionCover = '<div class="cover_item" style="background: url(\'http://uhweb.com:8080/img/bg/tickets.png\');">' +
                                                    '<div class="slider_content">' +
                                                    '<div class="slider-content-inner">' +
                                                        '<div class="container">' +
                                                            '<div class="slider-content-center">' +
                                                                '<h4 class="cover-title segoe-light">'+ session.titre +'</h4>' +
                                                                '<strong class="cover-xl-text segoe-black">'+ session.sous_categorie +'</strong>' +
                            '<p class="cover-date segoe-light">' + customDateSession(dateDebutSession, dateFinSession) + ' - ' + session.lieu +'.</p>' +
                                                                '<a href="#" class=" btn btn-primary btn-rounded segoe-light" >Voir le programme</a>' +
                                                            '</div>' +
                                                        '</div>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>';
                        $("#coverSlider").append(sessionCover);
                        sortieCover++;

                        if (sortieCover === donnees.data.length) {
                            
                            $(".cover_slider").owlCarousel({
                                loop: true,
                                autoplay: true,
                                smartSpeed: 1000,
                                autoplayHoverPause: false,
                                dots: false,
                                nav: false,
                                items: 1,
                                animateOut: 'fadeOut',
                                animateIn: 'fadeIn',
                                dotsContainer: '.cover_dots'
                            });
                        }
                    }
                    
                });
            }
        }
    })
}

//Recupere les category dans la partie catelogue
function CategoryCatalogue() {
    
    $.ajax({
        url: getHostApi() + 'categorieFormation/getAllcategories',
        type : 'GET',
        beforeSend : function () {
            $("#catalogueCategory")[0].getElementsByClassName('lds-ring')[0].style.display = "block";
        },
        success : function (donnees) {
            $("#catalogueCategory")[0].getElementsByClassName('lds-ring')[0].style.display = "none";
            $("#catalogueCategory").html('');
            if (donnees.data.length > 0) {
                donnees.data.forEach(function (category, indexCategory, tabCategory) {
                    if (category.etat_cat == 1) {
                        var categoryzone = `
                            <div class="col-md-12">
                                <div  class="row">
                                    <div id="headerCategoryBox${category.id_cat}" onclick="slideContent('headerCategoryBox${category.id_cat}', 'bodyCategoryBox${category.id_cat}'); formationsCategory('bodyCategoryBox${category.id_cat}', ${category.id_cat})" class="icon_box_category ferme col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <i class="lnr lnr-laptop"></i>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="content">
                                                <h4 class="segoe-black">${category.nom}</h4>
                                                <p id="sousCategoryCatelogue${category.id_cat}"></p>
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div style="background: #fe6601;height: 100%;color: white;padding-top: 22px">
                                                <center>
                                                    <div id="iconLoaderCat${category.id_cat}">
                                                        <span class="fa fa-3x fa-caret-down"></span>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div id="bodyCategoryBox${category.id_cat}" style="display: none;" class="container">
                                    
                                </div>
                            </div>
                        `;

                        $("#catalogueCategory").append(categoryzone);
                        //Recuperation des sous categories
                        getSousCat(category.id_cat);
                    }
                 })
            }
            
            
        }
    })
}

//Recupere les formations d'une categorie au niveau du catalogue
function formationsCategory(idBlock, idCategory) {
    if (typeof nomCategory == 'undefined') {
        nomCategory = 'categorie';
    }

    if($("#bodyCategoryBox" + idCategory)[0].children.length == 0){
        $.ajax({
            url : getHostApi() + 'categorieFormation/getSousCategoriesByCat/' + idCategory,
            type : 'GET',
            beforeSend : function () {
               $("#iconLoaderCat" + idCategory).html('<div  class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>');
            },
            success : function (donnees) {
               $("#iconLoaderCat" + idCategory).html('<span class="fa fa-3x fa-caret-up"></span>');
               console.log(donnees);
                if (donnees.success) {
                        donnees.data.forEach(function (sousCat, indexSousCat, tabSousCat) {
                            var sousCategorie = `
                                        <div class="container">
                                            <div style="margin-bottom:80px;" class="row">
                                                <h4 class="segoe-light" style="text-decoration: underline;text-decoration-style: auto">${sousCat.nom}</h4>
                                                <div id="formationsSousCatZone${sousCat.id_sous_cat}" class="row">
                                                </div>
                                            </div>
                                        </div>
                            `;

                            $("#bodyCategoryBox" + idCategory).append(sousCategorie);
                            sousCat.formations.forEach(function (formation, indexFormation, tabFormations) {
                                if (formation.etat == 1) {
                                    var source = function () {
                                        return formation.poster ? getHostApi() + formation.poster : 'img/logo-uhtec.jpg';
                                    },
                                    formation = `
                                                    <div class="col-md-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <img style="height: 100px;width: 100%;" src="${source()}" alt="">
                                                                <div class="overlay-form-category">
                                                                    <div  style="padding-top: 20%" class="row justify-content-center">
                                                                        <p style="font-size: 30px;color: white;font-family: Segoe Ui black">30</p>
                                                                        <p style="font-size: 20px;margin-top: 10px;text-transform: lowercase;font-family: Segoe UI black;color: white;">
                                                                            J
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <span style="font-size: 14px;" class="segoe-light"><b>${formation.titre}</b></span><br>
                                                                <span style="font-size: 11px;" class="segoe-light">${formation.lieu}</span>
                                                                <a href="/formations/${sousCat.slug}/${formation.id}">
                                                                    <button class="text-center btn-programme">
                                                                        Voir le programme
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                    `;
                                    $("#formationsSousCatZone" + sousCat.id_sous_cat).append(formation);
                                }
                            })

                        });


                }
            }
        });
    }
}

//Fonction qui renvoie les sous categories d'une categorie
function getSousCat(idCategory) {
    $.ajax({
        url : getHostApi() + 'categorieFormation/getSousCategoriesByCat/' + idCategory,
        type : 'GET',
        beforeSend : function () {
            
        },
        success : function (donnees) {
            
            if (donnees.data !== null) {
                var sortieSousCat = 0;
                function addKoma(index,sortie) {
                        if (index == sortie) {
                            return '';
                        }else{
                            return ' , ';
                        }
                };
                for (var i = 0; i <= 10; i++) {
                    
                    var sousCat = donnees.data[i].nom + addKoma(i, donnees.data.length >= 10 ? 9 : donnees.data.length -1);

                    $("#sousCategoryCatelogue" + idCategory).append(sousCat);




                }
            }
        }
    })

}

//Recupere les sous categories d'une categorie ainsi que les formations d'une sous categorie
function getFormationByCat(idcat) {
    $.ajax({
        url : getHostApi() + 'categorieFormation/getSousCategoriesByCat/' + idcat,
        type : 'GET',
        beforeSend : function () {
            $("#zoneSousCat").html('<center><div style="display: block;margin-top: 30px;" class="lds-ring"><div></div><div></div><div></div><div></div></div></center>');
        },
        success : function (donnees) {
            $("#zoneSousCat").html('');

            if (donnees.success) {

                donnees.data.forEach(function (sousCat, indexSousCat, tabSousCat) {
                    
                    var sousCategorie = `
                                    <div class="container">
                                        <div style="margin-bottom:80px;" class="row">
                                            <h4 class="segoe-light" style="text-decoration: underline;text-decoration-style: auto;"><i style="font-size: 25px;" class="fa fa-caret-right"></i>&nbsp;${sousCat.nom}</h4>
                                            <div id="ZoneFormationsSousCat${sousCat.id_sous_cat}" class="row">
                                            </div>
                                        </div>
                                    </div>
                    `;

                    $("#zoneSousCat").append(sousCategorie);

                    sousCat.formations.forEach(function (formation, indexFormation, tabFormation) {
                        if (formation.etat == 1) {
                            var source = function () {
                                return formation.poster ? getHostApi() + formation.poster : 'img/logo-uhtec.jpg';
                            },
                            formation = `
                                        <div style="margin-bottom:25px;" class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img style="width: 100%;height: 100px" src="${source()}" alt="mbuyu">
                                                    <div class="overlay-form-category">
                                                        <div  style="padding-top: 20%" class="row justify-content-center">
                                                            <p style="font-size: 30px;color: white;font-family: Segoe Ui black">30</p>
                                                            <p style="font-size: 20px;margin-top: 10px;text-transform: lowercase;font-family: Segoe UI black;color: white;">
                                                                J
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <span style="font-size: 14px;" class="segoe-light"><b>${formation.titre}</b></span><br>
                                                    <span style="font-size: 11px;" class="segoe-light">${formation.lieu}</span>
                                                    <button class="text-center btn-programme">
                                                        Voir le programme
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                            `;

                            $("#ZoneFormationsSousCat" + sousCat.id_sous_cat).append(formation);

                        }
                    })
                })
            }
        }
    })
}


//#endregion FORMATION_DETAILS