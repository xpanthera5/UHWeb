<?php
    namespace Applications\Frontend\Controllers;

    use \Core\Controller;

    /**
     * Controller offre d'emploi
     */
    class ForgetController extends Controller
    {

      function index($req, $res)
      {
        $res->render('forget/index', [
          'title' => 'Recuperation de mot de passe - ' .WEBSITE_NAME,
          'page' => 'forget'
        ]);

      }
    }


 ?>
