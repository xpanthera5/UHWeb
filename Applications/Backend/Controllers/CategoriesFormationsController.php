<?php 
	namespace Applications\Backend\Controllers;

	
	class CategoriesFormationsController extends \Core\Controller
	{
		public function index($req, $res)
		{
			$res->render('Categories/Formations/index', [
	          'title' => 'Categories formations -' . WEBSITE_NAME,
			  'bodyClass' => 'theme-red',
			  'page' => 'categories_formations'
	        ]);

		}

		public function create($req, $res)
		{
			
		}

		
	}


 ?>