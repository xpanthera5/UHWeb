<?php 
	namespace Applications\Backend\Controllers;

	/**
	 * Utilisé pour certains fichiers qui n'ont pas de catégorie
	 * comme des fichiers pour l'accueil
	 */
	class PagesController extends \Core\Controller
	{
		public function index($req, $res)
		{
			$res->render('Pages/index', [
	          'title' => 'Parcourez notre catalogue de formations' . WEBSITE_NAME
	        ]);
		}
	}


 ?>