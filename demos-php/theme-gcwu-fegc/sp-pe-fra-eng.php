<?php

//always set the page language options first
$_PAGE['lang1'] = "fra";
$_PAGE['lang2'] = "eng";

//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
//
//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));
$_SLASH_ = "/";
$_CONFIG_PATH = substr($_PAGE_PATH_, 0, strrpos($_PAGE_PATH_, $_SLASH_)) . "/inc" . substr($_PAGE_PATH_, strrpos($_PAGE_PATH_, $_SLASH_));
require_once $_CONFIG_PATH ."/config.php";


$_PAGE['title_eng'] = "Splash page - Bilingual (eng-fra) - GC Web Usability theme - Web Experience Toolkit (WET)";
$_PAGE['title_fra'] = "Page d'entrée - Bilingue (eng-fra) - Thème de la facilité d'emploi Web GC - Exemples pratiques - Boîte à outils de l'expérience Web (BOEW)";

$_PAGE['short_title_eng'] = "Welcome";
$_PAGE['short_title_fra'] = "Bienvenue";

$_PAGE['issplash'] = "1";

$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>
<!-- CustomCSSStart -->
<!-- CustomCSSEnd -->
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
<!-- no content needed for splash page -->
<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
