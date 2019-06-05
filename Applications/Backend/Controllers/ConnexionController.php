<?php 
	namespace Applications\Backend\Controllers;

	/**
	 * Utilisé pour certains fichiers qui n'ont pas de catégorie
	 * comme des fichiers pour l'accueil
	 */
	class ConnexionController extends \Core\Controller
	{
		public function index($req, $res)
		{
			$res->render('Connexion/index', [
			  'title' => 'Connexion admin' . WEBSITE_NAME,
			  'bodyClass' => 'theme-red',
			  'page' => 'connexion_admin'
	        ]);
		}
	}


 ?>