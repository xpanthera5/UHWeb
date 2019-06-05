//Declaration des variables
$(document).ready(function () {
    initForget();
});

//Fonction d'initialisation
function initForget() {
    windowLocation = window.location.pathname;
    
    if ((windowLocation == "/forgetMdp")) {
        getAccount()
    }

}

//Fonction non-dynamisé de récupération de mot de passe
function getAccount() {
    var step = 0;
    document.getElementById('getAccount').addEventListener("click", function (e) {
        e.preventDefault();

         $.ajax({
             url: "/",
             type : 'GET',
             beforeSend : function () {
                 $("#getAccount").text("Loading...")
             },
             success : function (reponse) {
                step++;

                if (step > 0) {
                    $(".formForget form").fadeOut();
                    $(".formForget .userConnect").fadeOut();

                    var content = `<div class="svgSucces">
                                    <svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 1920 1080" style="enable-background:new 0 0 1920 1080;" xml:space="preserve">
                                            <style type="text/css">
                                                .st10{fill:#E6E6E6;stroke:#B3B3B3;stroke-miterlimit:10;}
                                                .st11{opacity:0.39;fill:#CCCCCC;stroke:#B3B3B3;stroke-miterlimit:10;}
                                                .st12{fill:#B3B3B3;}
                                                .st13{fill:none;stroke:#B3B3B3;stroke-miterlimit:10;}
                                                .st14{fill:#FFD700;}
                                                .st15{fill:#B3B3B3;stroke:#FF4500;stroke-width:12;stroke-miterlimit:10;}
                                            </style>
                                            <rect x="731" y="341" class="st10" width="480" height="282"/>
                                            <polygon class="st11" points="971.8,427.5 1211.5,617.5 732.2,617.5 "/>
                                            <path class="st12" d="M968.6,529.8l-229.5-182c-2.6-2.1-1.2-6.3,2.2-6.3h459.1c3.3,0,4.8,4.2,2.2,6.3L973,529.8
                                                C971.7,530.8,969.9,530.8,968.6,529.8z"/>
                                            <line class="st13" x1="165.5" y1="435.5" x2="165.5" y2="435.5"/>
                                            <path id="lune_2_" class="st14 animated flip infinite" d="M1187.8,686.4l-5.4-22.2l-5.4,22.3l-22.5,5.3l22.5,5.4l5.4,22.8l5.4-22.7l22.5-5.4L1187.8,686.4z
                                                 M1182.7,691.8L1182.7,691.8L1182.7,691.8L1182.7,691.8L1182.7,691.8z"/>
                                            <path id="lune_1_" class="st14 animated fadeIn infinite" d="M605.8,380.4l-5.4-22.2l-5.4,22.3l-22.5,5.3l22.5,5.4l5.4,22.8l5.4-22.7l22.5-5.4L605.8,380.4z
                                                 M600.7,385.8L600.7,385.8L600.7,385.8L600.7,385.8L600.7,385.8z"/>
                                            <path id="lune_3_" class="st14 animated lightSpeedIn" d="M1298.8,504.4l-5.4-22.2l-5.4,22.3l-22.5,5.3l22.5,5.4l5.4,22.8l5.4-22.7l22.5-5.4L1298.8,504.4z
                                                 M1340.7,444.4L1340.7,444.4L1340.7,444.4L1340.7,444.4L1340.7,444.4z"/>
                                            <path id="lune_4_" class="st14 animated rotateIn" d="M931.8,248.4l-5.4-22.2l-5.4,22.3l-22.5,5.3l22.5,5.4l5.4,22.8l5.4-22.7l22.5-5.4L931.8,248.4z
                                                 M926.7,284.4L926.7,284.4L926.7,284.4L926.7,284.4L926.7,284.4z"/>
                                            <path class="st15" d="M731,341l234.2,185.4c3.4,2.7,8.3,2.7,11.7,0L1210,341"/>
                                            <path id="lune_5_" class="st14" d="M690.8,628.4l-5.4-22.2l-5.4,22.3l-22.5,5.3l22.5,5.4l5.4,22.8l5.4-22.7l22.5-5.4L690.8,628.4z
                                                 M685.7,664.4L685.7,664.4L685.7,664.4L685.7,664.4L685.7,664.4z"/>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            </svg>

                                  </div>
                                  <div>
                                    <h1 class="user-select" style="font-size: 3.5em; color: #333; font-family: Century gothic, "Segeo UI Black", sans-serif;">Mail envoyé avec succès</h1>
                                  </div>`;


                    $(".formForget").append(content);
                }
             }
        })
    })
}