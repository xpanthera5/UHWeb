<?php
    namespace Applications\Frontend\Controllers;

    use \Core\Controller;

    /**
     * Controller offre d'emploi
     */
    class EmploisController extends Controller
    {

      function index($req, $res)
      {
        $res->render('emplois/index', [
          'title' => 'Parcourez nos offres d\'emplois ' . WEBSITE_NAME,
          'page' => 'emplois'
        ]);

      }
    }


 ?>
