<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta name="description" content="Uhtec -formations professionnel, technologies">
        <meta name="keywords" content="school , professionnels , technologies">
        <meta name="author" content="Univers Higth Technology">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- ========== Title ========== -->
        <title><?= isset($title) ? $title . ' | ' . WEBSITE_NAME : WEBSITE_NAME ?></title>
        <!-- ========== Favicon Ico ========== -->
        <!--<link rel="icon" href="fav.ico">-->
        <!-- ========== STYLESHEETS ========== -->
        <!-- Bootstrap CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts Icon CSS -->
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/et-line.css" rel="stylesheet">
        <link href="/css/ionicons.min.css" rel="stylesheet">
        <!-- Carousel CSS -->
        <link href="/css/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/owl.theme.default.min.css" rel="stylesheet">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="/css/animate.min.css">
        <!-- Custom styles for this template -->
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/uhtec.css" rel="stylesheet">
        <link href="/css/nucleo.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/lib/chosen/chosen.min.css">
    	<link rel="stylesheet" href="/vendor/swiper/css/swiper.css">
        <link rel="stylesheet" href="/vendor/parsley/css/parsley.css">
        <link rel="stylesheet" href="/css/bolenge-notif.css">
    </head>
    <body <?= $page == 'forget' ? "class='bodyForForget'" : "" ?>>
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>
        </div>

        <?php if ($page != 'forget'): ?>
            <header class="header navbar fixed-top navbar-expand-md">
                <div class="container">
                    <a class="navbar-brand logo segoe-black c-white" href="/">
                        <!-- <img src="img/logo.png" alt="Evento"/> -->
                        UHTEC
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="lnr lnr-text-align-right"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
                        <ul class=" nav navbar-nav menu">
                            <li class="nav-item">
                                <a class="nav-link " href="/formations">Formations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/emplois">Offres d'emploi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/recrutement">Recrutement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Contact</a>
                            </li>

                            <?php if ($user->isAuthentificated()): ?>
                                <li class="user_link">
                                    <a href="#">
                                        <img src="/img/default-profile.png" style="width: 35px;" alt="" srcset="">
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a onclick="toggleRegisterBox('tab2', 'tab1')" class="nav-link " data-toggle="modal" data-target="#RegisterModal" class="dropdown-item" href="#">Connexion</a>
                                </li>
                                <li class="nav-item">
                                    <a onclick="toggleRegisterBox('tab1', 'tab2')" class="nav-link " data-toggle="modal" data-target="#RegisterModal" class="dropdown-item" href="#">Inscription</a>
                                </li>
                            <?php endif ?>
                           
                            <li class="search_btn">
                                <a  href="#">
                                   <i class="ion-ios-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!--header end here-->
        <?php endif ?>
       

        <!--cover section slider -->
        <?php if ($page != 'forget'): ?>
            <?php if ($page != 'profile'): ?>
            <section style="min-height: 300px;" id="home" class="home-cover">
                <center>
                    <div style="display: none;margin-top: 200px;" class="lds-ring"><div></div><div></div><div></div><div></div></div>
                </center>
            </section>
        <?php else: ?>
            <section style="min-height: 300px;" id="home" class="home-cover">
                <div class="cover_item" style="background: #333"> 
                    <div style="padding-top: 240px;padding-left: 200px;" class="row">
                        <div class="col-md-4">
                            <img style="width: 120px;height: 120px;border-radius: 50%;cursor: pointer;" src="//img/user-lg.jpg" alt="">
                        </div>
                        <div class="col-md-8">
                            
                        </div>   
                    </div>                         
                </div>
            </section>
        <?php endif ?>
        <?php endif ?>
        


        <?= $content ?>

        <?php if ($page != 'forget'): ?>
            <footer>
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-4 col-12">
                            <div class="footer_box">
                                <div class="footer_header">
                                    <div class="footer_logo">
                                        <!-- <img src="img/logo-uhtec.jpg" alt="evento"> -->
                                        <h3 style="font-family: Segoe UI black;font-size: 30px;color: white">UHTEC</h3>
                                    </div>
                                </div>
                                <div class="footer_box_body">
                                    <p class="segoe-light">
                                        Uhtec organise des formations depuis de nombreuses, specialisé dans le hight tech, uhtec a su se demarqué des autres centres de formations...
                                    </p>
                                    
                                    
                                </div>

                                
                            </div>
                            <div class="footer_box">
                                <h4 class="footer_title">
                                        Suivez nous
                                </h4>
                                <div class="footer_box_body">
                                    <ul class="footer_social">
                                        <li>
                                            <a href="#"><i class="ion-social-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-dribbble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="footer_box">
                                <div class="footer_header">
                                    <h4 class="footer_title">
                                        Pour tout contact
                                    </h4>
                                </div>
                                <div class="footer_box_body">
                                    <p class="segoe-light"><i class="ion-ios-location-outline"></i>&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magni fuga, nobis nemo, mollitia amet nesciunt voluptatum</p>
                                    <span class="segoe-light"><i class="fa fa-phone"></i> +243899641137</span><br>
                                    <span class="segoe-light"><i class="ion-email"></i> uhtec@uhtec.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="footer_box">
                                <div class="footer_header">
                                    <h4 class="footer_title">
                                        Contact rapide
                                    </h4>
                                </div>
                                <div class="footer_box_body">
                                    <div class="newsletter_form">
                                        <input type="text" class="form-control" placeholder="Votre prénom">
                                        <input type="text" class="form-control" placeholder="Votre nom">
                                        <input type="email" class="form-control" placeholder="Votre adresse email">
                                        <input type="text" class="form-control" placeholder="Numéro de téléphone">
                                        <textarea placeholder="Votre méssage" class="form-control" name="" id="" cols="5" rows="5"></textarea>
                                        <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="modal fade" id="RegisterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div style="min-height: 600px;background-color: #303030;" class="modal-content">
                        <div class="modal-body row">
                            <div class="col-md-4 js-tilt" data-tilt>
                                <img class="register_img" src="/img/img-01.png" alt="">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                              <center>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active show login-box" style="margin-top: 42%;" id="tab1">

                                        <div class="contact_form">
                                            <form action="" id="formLogiUser">
                                                <div class="form-group">
                                                    <input type="text" class="inputRegister" placeholder="Email" id="emailUserToLogIn" />
                                                </div>
                                                <div class="form-group">
                                                    <a href="/forgetMdp" class="forgetMdp"> <small>Mot de passe oublié ? </small></a>
                                                    <input type="password" class="inputRegister" placeholder="Mot de passe" id="mdpUserToLogIn" />
                                                </div>  
                                                <button type="submit" class="btn btn-primary btn-rounded segoe-light" >Se connecter</button><br>
                                                
                                                <div style="padding-top: 20px;width: 70%;">
                                                    <a href="#" onclick="toggleRegisterBox('tab1', 'tab2')" class="forgetMdp">Créer un nouveau compte uhtec</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in register-box" id="tab2" style="margin-top: 27%;">
                                        <!-- <h2 style="font-family: Segoe UI Black; text-transform: uppercase; color: #fff; letter-spacing: 1.2px;"> Inscription </h2> -->
                                        <div class="contact_form">
                                            <form action="" id="formRegisterData" autocomplete="off">
                                                    <div class="form-group">
                                                        <input type="text" class="inputRegister" placeholder="Nom" required id="nomUser" data-parsley-minlength="3"  data-parsley-trigger="keypress" />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="inputRegister" placeholder="Prénom" required id="prenomUser" data-parsley-minlength="3"  data-parsley-trigger="keypress" />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="email"  data-parsley-trigger="keypress" class="inputRegister" placeholder="Adresse email" required id="emailUser" />
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="password" class="inputRegister" data-parsley-minlength="8" placeholder="Mot de passe" required id="mdpUser" />
                                                    </div>
                                                    
                                                    <button href="#" class="btn btn-primary btn-rounded segoe-light" id="btnCreateUser">Créer un compte</button><br>
                                                   
                                                    <div style="padding-top: 17px;width: 70%;">
                                                        <a href="#" onclick="toggleRegisterBox('tab2', 'tab1')" class="forgetMdp">Je possède déjà un compte !</a>
                                                    </div> 
                                            </form>
                                        </div>
                                    </div>
                                  </div>
                              </center>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="copyright_footer">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-12">
                            <!-- <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
                        </div>
                        <div class="col-12 col-md-6 ">
                            <ul class="footer_menu">
                                <li>
                                    <a href="/">Accueil</a>
                                </li>
                                <li>
                                    <a href="#">Presentation</a>
                                </li>
                                <li>
                                    <a href="/formations">Formations</a>
                                </li>
                                <li>
                                    <a href="/emplois">Offres d'emploi</a>
                                </li>
                                <li>
                                    <a href="/recrutement">Recrutement</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
           <div class="copyright_footer">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-12">
                            <!-- <p>
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p> -->
                        </div>
                        <div class="col-12 col-md-6 ">
                            <ul class="footer_menu">
                                <li>
                                    <a href="/">Accueil</a>
                                </li>
                                <li>
                                    <a href="#">Presentation</a>
                                </li>
                                <li>
                                    <a href="/formations">Formations</a>
                                </li>
                                <li>
                                    <a href="/emplois">Offres d'emploi</a>
                                </li>
                                <li>
                                    <a href="/recrutement">Recrutement</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        
        <!--footer end -->

        <!-- jquery -->
        <script src="/js/jquery.min.js"></script>
        <!-- bootstrap -->
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/waypoints.min.js"></script>
        <!--slick carousel -->
        <script src="/js/owl.carousel.min.js"></script>
        <!--parallax -->
        <script src="/js/parallax.min.js"></script>
        <!--Counter up -->
        <script src="/js/jquery.counterup.min.js"></script>
        <!--Counter down -->
        <script src="/js/jquery.countdown.min.js"></script>
        <!-- WOW JS -->
        <script src="/js/wow.min.js"></script>
        <!-- Custom js -->
        <script src="/js/bolenge-notif.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/uhtec.js"></script>
        <script src="/vendor/parsley/js/parsley.js"></script>
        <script src="/vendor/parsley/i18n/fr.js"></script>

        <script src="/js/chosen/chosen.jquery.min.js"></script>
        <script src="/vendor/swiper/js/swiper.min.js"></script>
        <script src="/js/functions.js"></script>
        <script src="/js/init.js"></script>
        <script src="/js/api/frontend/jobs_api.js"></script>
        <script src="/js/api/frontend/compagnie_api.js"></script>
        <script src="/js/api/frontend/ville_api.js"></script>
        <script src="/js/api/frontend/formations_api.js"></script>
        <script src="/js/api/frontend/categories_api.js"></script>
        <script src="/js/api/frontend/users_api.js"></script>
        <script src="/js/api/frontend/partenaire_api.js"></script>
        <script src="/js/api/frontend/forget_api.js"></script>
        <script src="/js/api/frontend/recrutement_api.js"></script>
        <script src="/js/tilt.jquery.min.js"></script>

        <script>
           var swiper = new Swiper('.swiperTopFormations', {
              slidesPerView: 3,
              centeredSlides: false,
              spaceBetween: 30,
              grabCursor: true,
              loop:false,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              navigation: {
                  nextEl: '.swiper-btnNext-snf',
                  prevEl: '.swiper-btnPrev-snf'
              }
            })

        </script>
    </body>
</html>