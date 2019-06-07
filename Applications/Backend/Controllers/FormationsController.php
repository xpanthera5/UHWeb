<?php 
	namespace Applications\Backend\Controllers;

	
	class FormationsController extends \Core\Controller
	{
		public function create($req, $res)
		{
			$res->render('Formations/create', [
	          'title' => 'Création d\'une formation' . WEBSITE_NAME,
			  'bodyClass' => 'theme-red',
			  'page' => 'formation_create'
	        ]);

		}

	}


 ?>