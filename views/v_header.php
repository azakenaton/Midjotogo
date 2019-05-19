<!DOCTYPE html>
<html>
  <head>
  	<title><?= TITRE ?></title>

<meta content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF -8" />
<meta name="Language" content="<?= LANG ?>"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


<!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="<?= PATH_CSS ?>moncss.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!-- Bootstrap core CSS -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Bootstrap -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.6.0/css/mdb.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?= PATH_SCRIPTS ?>MonJS.js"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
</head>
<body class="index-page sidebar-collapse">

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php?page=accueil">
        <img alt="logo" title="Accueil" id="img_navbar" src="<?= PATH_IMAGES ?>logo1.jpg">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>-->

    <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a <?php if($_SESSION['nav_en_cours'] == 'inscription') {echo 'id="en-cours"';} ?> class="nav-link" href="index.php?page=inscription">Inscription</a>
            </li>
            <li class="nav-item">
                <a <?php if($_SESSION['nav_en_cours'] == 'temoignage') {echo 'id="en-cours"';} ?> class="nav-link" href="index.php?page=temoignage">Témoignage</a>
            </li>
            <li class="nav-item">
                <a <?php if($_SESSION['nav_en_cours'] == 'photo') {echo 'id="en-cours"';} ?> class="nav-link" href="index.php?page=photo">Photo</a>
            </li>
            <li class="nav-item">
                <a <?php if($_SESSION['nav_en_cours'] == 'actualite') {echo 'id="en-cours"';} ?> class="nav-link" href="index.php?page=actualites">Actualités</a>
            </li>
            <li class="nav-item">
                <a <?php if($_SESSION['nav_en_cours'] == 'stage') {echo 'id="en-cours"';} ?> class="nav-link" href="index.php?page=stage">Stage</a>
            </li>
        </ul>
    </div>
</nav>
