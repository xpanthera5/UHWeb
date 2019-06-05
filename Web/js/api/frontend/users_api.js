/**
 * Permet de vérifier si les éléments de l'objet ne sont pas vides
 * @param {Object} data L'objet à vérifier
 */
function elementsObjectNotEmpty(data) {
	if (typeof data == 'object') {
		for (var key in data) {
			if (data[key].length == 0) {
				return false;
			}
		}
	} else {
		return false;
	}

	return true;
}

/**
 * Objet contenant des méthodes pour le compte utilisateurs
 */
var users = {
	init: function () {
		users.register();
	},

	/**
	 * Permet de faire l'enregistrement d'un nouvel utilisateur
	 */
	register: function () {
		$('#formRegisterData').submit(function (e) {
			e.preventDefault();

			var userData = {
				nom: $('#nomUser').val(),
				prenom: $('#prenomUser').val(),
				email: $('#emailUser').val(),
				password: $('#mdpUser').val()
			}

			if (elementsObjectNotEmpty(userData)) {
				$.ajax({
					url: getHostApi() + 'users/register',
					type: 'POST',
					data: userData,
					beforeSend: function () {
						
					},
					success: function (res) {
						console.log(res);
						if (res.success) {
							var data = res.data;
							// launcNotification({
							// 	type: 'success',
							// 	message: 'Vous êtes enregistré avec succès',
							// 	buttons: [{
							// 		id: 'cancel',
							// 		text: 'Ok',
							// 		href: '#'
							// 	}]
							// })

							window.location.pathname = '/users/profile';
						}else {
							launcNotification({
								type: 'danger',
								message: res.message,
								buttons: [{
									id: 'confirme',
									text: 'Ok',
									href: '#'
								}]
							});
						}
						
					},
					error: function (err) {
						console.log(err);
						
					}
				})
			}else{
				
			}
		})
	}
}

users.init();