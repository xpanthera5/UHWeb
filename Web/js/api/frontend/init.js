//Librairie de test d'existance d'un fichier
function verifyImageFile(host, source, callback) {
	$.ajax({
        url: host + source,
        type: 'GET',
        success: function (res) {
            callback(true, "Image existant", res.data.url)
        },
        error: function (err) {
            callback(false, err.responseJSON.message)
        }
    })
}