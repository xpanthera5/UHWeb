var btnLogin,inputLogin,inputPwd;
$(document).ready(function () {
    initClientAdmin()
});

function initClientAdmin() {
    windowLocation = window.location.pathname;

    if (windowLocation.split("/")[1] == "admin" && windowLocation.split("/")[2] == "connexion") {
        btnLogin = $("#ALogin");
        //Fonction permattant de faire la connexion
        login()
    }
    
}

function login() {
    btnLogin.on('click', function (e) {
        e.preventDefault();
        inputLogin = $("#inputLogin").val();
        inputPwd = $("#inputPwd").val();

        if (inputLogin != "" && inputPwd != "") {
            
            //Ajout de l'id trouver en session
            $.ajax({
                url : getWebSiteHost() + 'admin/session/creation',
                type : 'POST',
                data : {
                    "user_admin_id" : 10
                },
                success : function (data) {
                    
                    window.location.href = '/admin/' + data + '/tableau-de-bord'
                }
            });
        } else {
            
        }
    })
}

