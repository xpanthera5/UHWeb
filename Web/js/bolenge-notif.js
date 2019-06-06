/**
 * Permet de lencer un message de notification
 * @param {Object} data L'objet de l'alert contient {type: '', message: '', buttons: ''}
 */
function launcNotification(data, callback) {
    if (typeof callback == 'undefined') {
        callback = function () {
            return false;
        }
    }
    var buttons = data.buttons ? data.buttons : null;
    var elementButton = '';

    if (buttons) {
        for (var i = 0; i < buttons.length; i++) {
            elementButton += '<button id="' + buttons[i].id + '" data-href="' + buttons[i].href + '">' + buttons[i].text + '</button>';
        }
        var classBlocMessage = 'bloc-message';

    } else {
        var classBlocMessage = 'bloc-message-pd';
    }


    var blocAlertNotfi = '<div id="blocAlertNotfi" class="bloc-alert">' +
        '<div id="blocType" class="bloc-type bloc-' + data.type + '">&nbsp;</div>' +
        '<div class="bloc-content">' +
        '<div class="' + classBlocMessage + '">' + data.message + '</div>' +
        '<div class="buttons">' + elementButton + '</div>' +
        '</div>' +
        '</div>';
    var taille = $('#blocAlertNotfi').height();
    $('#blocType').css({ height: taille });

    $('body').append(blocAlertNotfi);

    $('#blocAlertNotfi').animate({
        transition: '1s linear',
        left: '20px'
    }, 700);

    setTimeout(function () {
        $('#blocAlertNotfi').animate({
            transition: '1s linear',
            left: '-500px'
        }, 1000);

        setTimeout(function () {
            $('#blocAlertNotfi').remove();
        }, 2000)

    }, 15000)

    callback();
}

<<<<<<< HEAD
/**
 * Permet de stoper la notification, quand on click sur le button Ok
 */
=======

>>>>>>> d925ea3bb1c87406059bd2b6a8005fc3141da69e
function stopNotication() {
    $('#stopNotif').click(function (e) {
        e.preventDefautl();

        var hrefLink = $(this).data('href');

        alert(hrefLink);
    })
}