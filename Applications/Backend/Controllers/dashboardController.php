<?php 
	namespace Applications\Backend\Controllers;

	
	class dashboardController extends \Core\Controller
	{
		public function index($req, $res)
		{
			$res->render('Dashboard/index', [
	          'title' => 'Accueil' . WEBSITE_NAME,
			  'bodyClass' => 'theme-red',
			  'page' => 'dashboard_home'
	        ]);

		}

		//Cree la session d'un administrateur
		public function create_session($req, $res)
		{
		   $user_admin_id	=	(int)	$_POST['user_admin_id'];
		   $req->setSession('user_admin_id', $user_admin_id);
		   $res->send($_SESSION['user_admin_id']);
		}

		//Recuperation de la valeur d'une session
		public function session_value($req, $res)
		{
		  $res->send($req->getSession('nom'));
		}
	}


 ?>