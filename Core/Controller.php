<?php 
	namespace Core;

	/**
	 * Controlleur principal
	 */
	class Controller
	{
		public $page;
		public $model;
		public $action;
		public $request;
		public $user;
		protected $app;

		/**
		 * Le cosntructeur du controlleur charge les données correspondantes aux attributs
		 * @param $model = Le nom du modèle
		 * @param $action = L'action à exécuter
		 * @param $vars = les différentes variables reçues dans l'url
		 * @return void
		 */
		public function __construct($model, $action, $vars, Application $app)
		{
			$this->app = $app;
			$this->model = $this->loadModel($model);
			$this->action = $action;
			$this->vars = $vars;
			// $this->request = new Request;
			// $this->response = new Response;
			$this->user = new User;

			// $view = $model.'/'.$action;

			// $this->template = '../Applications/'.$this->app->nameApp().'/Views/layout.php';
			// $this->setContentFile($view);
			// $this->addVar('user', $this->user);

			$method = $this->action;

			if (is_callable([$this, $method])) {
				$this->$method(new Request, new Response($this->app));
			}
			
		}

		/**
		 * Permet de charger le model correspondant au controller
		 * @param $model = Le nom du modèle en question
		 * @return $mod Object = L'instance du modèle
		 */
		public function loadModel($model)
		{
			// $mod = 'Applications\\'.$this->app->nameApp().'\\Models\\'.ucfirst($model).'Model';
			// // debug($mod);

			// if (class_exists($mod)) {
			// 	return new $mod;
			// 	// throw new \RuntimeException('Le model '.$mod.' n\'existe pas.');
			// }

			return false;
		}
	}

 ?>