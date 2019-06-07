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
		users.login();
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

			if (userData) {
				$.ajax({
					url: getHostApi() + 'users/register',
					type: 'POST',
					data: userData,
					beforeSend: function () {
						
					},
					success: function (res) {
						
						if (res.success) {
							var data = res.data;

							setFlash({
								message: res.message,
								type: "success",
								urlRedirect: "/users/profile",
								timeRedirect: 5,
								icon: "<i class=\"now-ui-icons ui-1_check\"></i>",
								position: "Top"
							}, "#RegisterModal");

						}else {
							setFlash({
								message: res.message,
								type: "warning",
								icon: "<i class=\"now-ui-icons travel_info\"></i>",
								position: "Top"
							}, "#RegisterModal");
						}
						
					},
					error: function (err) {
						console.log(err);
					}
				})
			}else{
				setFlash({
					message: "Certains champs sont requis...",
					type: "warning",
					icon: "<i class=\"now-ui-icons travel_info\"></i>",
					position: "Top"
				}, "#RegisterModal");
			}
		})
	},

	/**
	 * Permet de faire connecter un utilisateur
	 * @return {void}
	 */
	login: function () {
		$('#formLogiUser').submit(function (e) {
			e.preventDefault();

			var userDatalog = {
				email: $('#emailUserToLogIn').val(),
				password: $('#mdpUserToLogIn').val()
			}
			
			$.ajax({
					url: getHostApi() + 'users/login',
					type: 'POST',
					data: userDatalog,
					beforeSend: function () {
						// A mettre un loader
					},
					success: function (res) {
						if (res.success) {
							var data = res.data;

							if (data) {
								users.connectUser(data);
								
								setFlash({
									message: res.message,
									type: "success",
									urlRedirect: "/users/profile",
									timeRedirect: 5,
									icon: "<i class=\"now-ui-icons ui-1_check\"></i>",
									position: "Top"
								}, "#RegisterModal");
							}

							

						} else {

							setFlash({
								message: res.message,
								type: "warning",
								icon: "<i class=\"now-ui-icons travel_info\"></i>",
								position: "Top"
							}, "#RegisterModal");
						}

					},
					error: function (err) {
						console.log(err);
					}
				})
		})
	},

	/**
	 * Permet de connecté l'utilisateur en ajoutant ses sessions
	 * @param {Object} user les données de l'utilisateur
	 */
	connectUser: function (user) {
		$.ajax({
			url: '/ajax/users/connect',
			type: 'POST',
			data: user,
			dataType: 'json',
			success: function (res) {
				if (res.success) {
					redirect('/');
				}
			},
			error: function (err) {
				console.log(err.responseText);
			}

		})
	}
}

users.init();