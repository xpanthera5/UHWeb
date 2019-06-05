<?php
	namespace Applications\Frontend\Controllers;

	/**
	 * Utilisé pour certains fichiers qui n'ont pas de catégorie
	 * comme des fichiers pour l'accueil
	 */
	class PagesController extends \Core\Controller
	{
		public function index($req, $res)
		{
			$res->render('pages/index', [
				'title' => 'Bienvenue sur ' . WEBSITE_NAME,
				'page' => 'uhtec_home'
			]);
			// $res->send(['nom' => 'moliso']);
		}
	}


 ?>
