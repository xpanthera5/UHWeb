function getHostApi() {
    return 'http://localhost:8080/UHAPI/';
}

function getWebSiteHost() {
    return 'http://UHWEB.com:8080/';
}

function elementsObjectNotEmpty(object) {
    if (typeof object == 'object') {
        for (const key in object) {
            if (object.hasOwnProperty(key)) {
                const element = object[key];
                
            }
        }
    }else {
        return false;
    }
}

function customDate(date) {
    var myDate = new Date(date),
        jour = function () {

            return parseInt(myDate.getDate()) < 10 ? '0' + myDate.getDate() : myDate.getDate()
        },
        mois = function () {

            //return myDate.getMonth() + 1 < 10 ? '0' + (myDate.getMonth() + 1) : myDate.getMonth() + 1
            var month = myDate.getMonth() + 1;

            //La date par rapport à sa nomination
            switch (month) {
                case 1:
                    return 'janvier'
                    break;
                case 2:
                    return 'février'
                    break;
                case 3:
                    return 'mars'
                    break;
                case 4:
                    return 'avril'
                    break;
                case 5:
                    return 'mai'
                    break;
                case 6:
                    return 'juin'
                    break;
                case 7:
                    return 'juillet'
                    break;
                case 8:
                    return 'août'
                    break;
                case 9:
                    return 'septembre'
                    break;
                case 10:
                    return 'octobre'
                    break;
                case 11:
                    return 'novembre'
                    break;
                case 12:
                    return 'décembre'
                    break;
                default:
                    return null
                    break;
            }
        },
        heure = function () {

            return myDate.getHours() < 10 ? '0' + myDate.getHours() : myDate.getHours()

        },
        minute = function () {

            return myDate.getMinutes() < 10 ? '0' + myDate.getMinutes() : myDate.getMinutes()

        };

    return jour() + ' ' + mois() + ' ' + myDate.getFullYear() + ' à ' + heure() + ':' + minute();
}

/**
 * Permet de renvoyer les infos normales d'une date
 * @param {Date} UserDate La date qu'on veut customiser
 */
function customizerDate(UserDate) {
    var MyDate = new Date(UserDate);

    return {
        jour: function () {

            return parseInt(MyDate.getDate()) < 10 ? '0' + MyDate.getDate() : MyDate.getDate()
        },
        mois: function () {

            //return MyDate.getMonth() + 1 < 10 ? '0' + (MyDate.getMonth() + 1) : MyDate.getMonth() + 1
            var month = MyDate.getMonth() + 1;

            //La date par rapport à sa nomination
            switch (month) {
                case 1:
                    return 'janvier'
                    break;
                case 2:
                    return 'février'
                    break;
                case 3:
                    return 'mars'
                    break;
                case 4:
                    return 'avril'
                    break;
                case 5:
                    return 'mai'
                    break;
                case 6:
                    return 'juin'
                    break;
                case 7:
                    return 'juillet'
                    break;
                case 8:
                    return 'août'
                    break;
                case 9:
                    return 'septembre'
                    break;
                case 10:
                    return 'octobre'
                    break;
                case 11:
                    return 'novembre'
                    break;
                case 12:
                    return 'décembre'
                    break;
                default:
                    return null
                    break;
            }
        },
        annee: function () {
            return MyDate.getFullYear();
        }
    }
}

/**
 * Permet de customiser la date de la session
 * @param {Date} date_debut La date du début de la session
 * @param {Date} date_fin La date de la fin de la session
 */
function customDateSession(date_debut, date_fin) {
    var DateDebut = customizerDate(date_debut),
        DateFin = customizerDate(date_fin),
        response;

    if ((DateDebut.annee() == DateFin.annee()) && (DateDebut.mois() == DateFin.mois()) && (DateDebut.jour() == DateFin.jour())) {
        response = 'Le '+ DateDebut.jour() + ' ' + DateDebut.mois() + ' ' + DateDebut.annee();
    } else if ((DateDebut.annee() == DateFin.annee()) && (DateDebut.mois() == DateFin.mois()) && (DateDebut.jour() != DateFin.jour())) {
        response = 'Du ' + DateDebut.jour() + ' au ' + DateFin.jour() + ' ' + DateFin.mois() + ' ' + DateFin.annee();
    } else if ((DateDebut.annee() == DateFin.annee()) && (DateDebut.mois() != DateFin.mois())) {
        response = 'Du ' + DateDebut.jour() + ' ' + DateDebut.mois() + ' au ' + DateFin.jour() + ' ' + DateFin.mois() + ' ' + DateFin.annee();
    } else if ((DateDebut.annee() != DateFin.annee())) {
        response = 'Du ' + DateDebut.jour() + ' ' + DateDebut.mois() + ' ' + DateDebut.annee() + ' au ' + DateFin.jour() + ' ' + DateFin.mois() + ' ' + DateFin.annee();
    }

    return response;
}