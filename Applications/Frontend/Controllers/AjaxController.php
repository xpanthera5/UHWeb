<?php
	namespace Applications\Frontend\Controllers;

	use \Core\Controller;

	/**
	 * Utilisé pour certains fichiers qui n'ont pas de catégorie
	 * comme des fichiers pour l'accueil
	 */
	class AjaxController extends Controller
	{
		public function index($req, $res)
		{
			// $res->render('pages/index', [
			// 	'title' => 'Bienvenue sur ' . WEBSITE_NAME,
			// 	'page' => 'uhtec_home'
			// ]);
			$res->send(['success' => 'moliso']);
		}

		/**
		 * Permet de faire connecter un utilisateur en ajoutant ses données dans la session
		 */
		public function connectUser($req, $res)
		{
			if (!empty($req->body())) {
				$this->user->setAttribute('user_id', $req->body('id'));
				$this->user->setAttribute('user_nom', $req->body('nom'));
				$this->user->setAttribute('user_email', $req->body('email'));
				$this->user->setAttribute('user_prenom', $req->body('prenom'));
				$this->user->setAttribute('user_postnom', $req->body('postnom'));

				$this->user->setAuthentificated(true);

				$this->objetRetour['success'] = true;
				$this->objetRetour['message'] = 'Vous êtes connectée avec succès';
			}else {
				$this->objetRetour['message'] = 'Erreur de connexion';
			}

			$res->send($this->objetRetour);
		}
	}


 ?>
