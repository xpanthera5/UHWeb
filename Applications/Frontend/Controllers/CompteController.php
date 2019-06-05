<?php
    namespace Applications\Frontend\Controllers;

    /**
     * Controller offre d'emploi
     */
    class CompteController extends \core\Controller
    {

      function accueil($req, $res)
      {

        $res->render('Compte/accueil', [
          'title' => 'Josue mbuyu | profile' . WEBSITE_NAME,
          'page' => 'profile'
        ]);

      }

    }


 ?>
