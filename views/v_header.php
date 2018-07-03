<!DOCTYPE html>
<html>
  <head>
  	<title><?= TITRE ?></title>

<meta content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF -8" />
<meta name="Language" content="<?= LANG ?>"/>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?= PATH_CSS ?>materialize.min.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= PATH_SCRIPTS ?>materialize.min.js"></script>
<script type="text/javascript" src="<?= PATH_SCRIPTS ?>MonJS.js"></script>


</head>


<nav class="teal accent-3">
    <div class="nav-wrapper">
        <a href="index.php?page=accueil" class="brand-logo"><?= TITRE ?></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down ">
            <li><a href="index.php?page=accueil"><?= NAV_ACCUEIL ?></a></li>
            <li><a href="index.php?page=foot"><?= NAV_INFOS?></a></li>
            <li><a href="index.php?page=basket"><?= NAV_DOMAINES?></a></li>
            <li><a href="index.php?page=esport"><?= NAV_CONTACT?></a></li>
        </ul>
    </div>
</nav>
