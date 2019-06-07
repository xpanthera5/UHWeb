<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
    	<?=
			isset($title) ? $title . ' | ' . 'WEBSITE_NAME' : 'WEBSITE_NAME';
		 ?>
    </title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= WEBSITE_URL ?>css/fonts/material design/material-icons.css">

    <!-- Bootstrap Core Css -->
    <link href="<?= WEBSITE_URL ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= WEBSITE_URL ?>vendor/bootstrap-select/css/bootstrap-select.css" rel="stylesheet">
    <link href="<?= WEBSITE_URL ?>vendor/multi-select/css/multi-select.css" rel="stylesheet">
    <link href="<?= WEBSITE_URL ?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?= WEBSITE_URL ?>vendor/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?= WEBSITE_URL ?>vendor/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?= WEBSITE_URL ?>css/admin/style.css" rel="stylesheet">
    <link href="<?= WEBSITE_URL ?>css/admin/uhtec.css" rel="stylesheet">

    <link href="<?= WEBSITE_URL ?>vendor/morrisjs/morris.css" rel="stylesheet" />

    <link href="<?= WEBSITE_URL ?>vendor/jquery-steps/jquery.steps.css" rel="stylesheet" />


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?= WEBSITE_URL ?>css/admin/themes/all-themes.css" rel="stylesheet" />
</head>


<body class="<?= $bodyClass ?>">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p style="font-family: Segoe UI Light;">Chargement</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <?php if ($page != 'connexion_admin'): ?>
        
        <div class="search-bar">
            <form action="">
                <div class="search-icon">
                    <i class="material-icons">search</i>
                </div>
                <input type="text" placeholder="VOTRE RECHERCHE ICI" style="font-family: Segoe UI Light;text-transform: uppercase;">
                <div class="close-search">
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->

        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand font-primary" href="index.html">ADMINISTRATION</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Notifications -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">notifications</i>
                                <span class="label-count">7</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header font-secondary">NOTIFICATIONS</li>
                                <li class="body">
                                    <ul class="menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4 class="font-secondary">12 new members joined</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 14 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-cyan">
                                                    <i class="material-icons">add_shopping_cart</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>4 sales made</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 22 mins ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-red">
                                                    <i class="material-icons">delete_forever</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy Doe</b> deleted account</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-orange">
                                                    <i class="material-icons">mode_edit</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>Nancy</b> changed name</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 2 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-blue-grey">
                                                    <i class="material-icons">comment</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> commented your post</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 4 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">cached</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4><b>John</b> updated status</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> 3 hours ago
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <div class="icon-circle bg-purple">
                                                    <i class="material-icons">settings</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>Settings updated</h4>
                                                    <p>
                                                        <i class="material-icons">access_time</i> Yesterday
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Notifications -->
                        <!-- Tasks -->
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">flag</i>
                                <span class="label-count">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">TASKS</li>
                                <li class="body">
                                    <ul class="menu tasks">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Footer display issue
                                                    <small>32%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Make new buttons
                                                    <small>45%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Create new dashboard
                                                    <small>54%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Solve transition issue
                                                    <small>65%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <h4>
                                                    Answer GitHub questions
                                                    <small>92%</small>
                                                </h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="javascript:void(0);">View All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- #END# Tasks -->
                        <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="<?= WEBSITE_URL ?>img/user.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name font-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                        <div class="email font-secondary">john.doe@example.com</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li class="font-primary"><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="font-secondary"><a href="javascript:void(0);"><i class="material-icons">input</i>Deconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header font-secondary">MENU PRINCIPAL</li>
                        <li class="active">
                            <a href="index.html">
                                <i class="material-icons">cast</i>
                                <span class="font-secondary text-uppercase">Tableau de bord</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">school</i>
                                <span class="font-secondary text-uppercase">Formations</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a class="font-secondary" href="<?= WEBSITE_URL ?>admin/5/formation/ajouter">Ajouter une formation</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/ui/animations.html">Toutes les formations</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/ui/badges.html">Souscriptions</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/ui/badges.html">Plus d'options</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span class="font-secondary text-uppercase">Catégories</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a class="font-secondary" href="<?= WEBSITE_URL ?>admin/2/categories/formations">Catégories formations</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/ui/animations.html">Catégories job</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">card_travel</i>
                                <span class="font-secondary text-uppercase">Offres d'emplois</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a class="font-secondary" href="pages/forms/basic-form-elements.html">Ajouter une offre d'emplois</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/forms/advanced-form-elements.html">Toutes les offres d'emplois</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/forms/form-examples.html">Souscriptions</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/forms/form-validation.html">Candidats</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/forms/form-validation.html">Plus d'options</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">people_outline</i>
                                <span class="font-secondary text-uppercase">Comptes</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a class="font-secondary" href="pages/tables/normal-tables.html">Utilisateurs</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/tables/jquery-datatable.html">Agents</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/tables/jquery-datatable.html">Parametres de comptes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">business_center</i>
                                <span class="font-secondary text-uppercase">Entreprise</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a class="font-secondary" href="pages/tables/normal-tables.html">Ajouter une entreprise</a>
                                </li>
                                <li>
                                    <a class="font-secondary" href="pages/tables/jquery-datatable.html">Toutes les entreprises</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->
            <aside id="rightsidebar" class="right-sidebar">
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                    <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                        <ul class="demo-choose-skin">
                            <li data-theme="red" class="active">
                                <div class="red"></div>
                                <span>Red</span>
                            </li>
                            <li data-theme="pink">
                                <div class="pink"></div>
                                <span>Pink</span>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                                <span>Purple</span>
                            </li>
                            <li data-theme="deep-purple">
                                <div class="deep-purple"></div>
                                <span>Deep Purple</span>
                            </li>
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                                <span>Indigo</span>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                                <span>Blue</span>
                            </li>
                            <li data-theme="light-blue">
                                <div class="light-blue"></div>
                                <span>Light Blue</span>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                                <span>Cyan</span>
                            </li>
                            <li data-theme="teal">
                                <div class="teal"></div>
                                <span>Teal</span>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                                <span>Green</span>
                            </li>
                            <li data-theme="light-green">
                                <div class="light-green"></div>
                                <span>Light Green</span>
                            </li>
                            <li data-theme="lime">
                                <div class="lime"></div>
                                <span>Lime</span>
                            </li>
                            <li data-theme="yellow">
                                <div class="yellow"></div>
                                <span>Yellow</span>
                            </li>
                            <li data-theme="amber">
                                <div class="amber"></div>
                                <span>Amber</span>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                                <span>Orange</span>
                            </li>
                            <li data-theme="deep-orange">
                                <div class="deep-orange"></div>
                                <span>Deep Orange</span>
                            </li>
                            <li data-theme="brown">
                                <div class="brown"></div>
                                <span>Brown</span>
                            </li>
                            <li data-theme="grey">
                                <div class="grey"></div>
                                <span>Grey</span>
                            </li>
                            <li data-theme="blue-grey">
                                <div class="blue-grey"></div>
                                <span>Blue Grey</span>
                            </li>
                            <li data-theme="black">
                                <div class="black"></div>
                                <span>Black</span>
                            </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">
                        <div class="demo-settings">
                            <p>GENERAL SETTINGS</p>
                            <ul class="setting-list">
                                <li>
                                    <span>Report Panel Usage</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Email Redirect</span>
                                    <div class="switch">
                                        <label><input type="checkbox"><span class="lever"></span></label>
                                    </div>
                                </li>
                            </ul>
                            <p>SYSTEM SETTINGS</p>
                            <ul class="setting-list">
                                <li>
                                    <span>Notifications</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Auto Updates</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>
                            </ul>
                            <p>ACCOUNT SETTINGS</p>
                            <ul class="setting-list">
                                <li>
                                    <span>Offline</span>
                                    <div class="switch">
                                        <label><input type="checkbox"><span class="lever"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <span>Location Permission</span>
                                    <div class="switch">
                                        <label><input type="checkbox" checked><span class="lever"></span></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- #END# Right Sidebar -->
        </section>

    <?php endif ?>


    <?= $content ?>
    <!-- Jquery Core Js -->
    <script src=" <?= WEBSITE_URL ?>vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= WEBSITE_URL ?>vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>



    <!-- Waves Effect Plugin Js -->
    <script src="<?= WEBSITE_URL ?>vendor/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?= WEBSITE_URL ?>vendor/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?= WEBSITE_URL ?>js/admin.js"></script>
    <script src="<?= WEBSITE_URL ?>js/pages/examples/sign-in.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/jquery-countto/jquery.countTo.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/raphael/raphael.min.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/morrisjs/morris.js"></script>
    <script src="<?= WEBSITE_URL ?>vendor/jquery-sparkline/jquery.sparkline.js"></script>
     <!-- Jquery Validation Plugin Css -->
    <script src="<?= WEBSITE_URL ?>vendor/jquery-validation/jquery.validate.js"></script>
    <!-- Ckeditor -->
    <script src="<?= WEBSITE_URL ?>vendor/ckeditor/ckeditor.js"></script>

    <!-- TinyMCE -->
    <script src="<?= WEBSITE_URL ?>vendor/tinymce/tinymce.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="<?= WEBSITE_URL ?>vendor/jquery-steps/jquery.steps.js"></script>
    <script src="<?= WEBSITE_URL ?>js/pages/forms/form-wizard.js"></script>
    <!-- Demo Js -->
    <script src="<?= WEBSITE_URL ?>js/pages/forms/advanced-form-elements.js"></script>
    <script src="<?= WEBSITE_URL ?>js/demo.js"></script>
    <script src="<?= WEBSITE_URL ?>js/init.js"></script>
    <script src="<?= WEBSITE_URL ?>js/api/backend/client_api.js"></script>

</body>

</html>