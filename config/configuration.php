<?php
/**
 * Created by PhpStorm.
 * User: HYVERNAT
 * Date: 03/07/2018
 * Time: 20:56
 */
// Langue du site
const LANG ='FR-fr';
//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entities/');
define('PATH_ASSETS','./asset/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

//sous dossiers
define('PATH_CSS','./assets/css/');
define('PATH_IMAGES','./assets/img/');
define('PATH_SCRIPTS','./assets/js/');
define('PATH_PDF','./assets/pdf/');
//define("PATH_GALERIE",'galerie/');
//define('PATH_LOG','log/');

//fichiers
//define('LOG_BDD','logbdd.txt');
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');