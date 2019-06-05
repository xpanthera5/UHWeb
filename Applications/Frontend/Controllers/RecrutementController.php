<?php
    namespace Applications\Frontend\Controllers;

    use \Core\Controller;

    /**
     * Controller offre d'emploi
     */
    class RecrutementController extends Controller
    {

      function index($req, $res)
      {
        $res->render('recrutement/index', [
          'title' => 'Abonnement aux recrutement' .WEBSITE_NAME,
          'page' => 'Recrutement'
        ]);

      }
    }


 ?>
