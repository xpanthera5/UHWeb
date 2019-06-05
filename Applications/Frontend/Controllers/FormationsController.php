<?php
    namespace Applications\Frontend\Controllers;

    /**
     * Controller offre d'emploi
     */
    class FormationsController extends \Core\Controller
    {
      //Renvoi la page affichant les catalogues de formation
      function index($req, $res)
      {
        $res->render('Formations/index', [
          'title' => 'Parcourez notre catalogue de formations' . WEBSITE_NAME,
          'page' => 'catalogue'
        ]);

      }

      //Renvoi la categorie ainsi que ses formations
      function formationsByCat($req, $res)
      {
        $res->render('Formations/formationsByCat', [
          'title' => 'Toutes les formations',
          'page' => 'categories_formation'
        ]);
      }

      //Details d'une formation
      function detailsFormation($req, $res)
      {
        // debug($req->get());
        $res->render('Formations/detailsFormation', [
          'title' => 'Détails formations',
          'page' => 'details_formation'
        ]);
      }

      //details d'une session
      function detailsSession($req, $res)
      {
        $res->render('Formations/detailsSession', [
          'title' => 'Details de la session',
          'page' => 'details_session'
        ]);
      }

    }


 ?>
