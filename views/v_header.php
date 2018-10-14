<!DOCTYPE html>
<html>
  <head>
  	<title><?= TITRE ?></title>

<meta content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF -8" />
<meta name="Language" content="<?= LANG ?>"/>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="<?= PATH_CSS ?>MonCSS.css" rel="stylesheet">
<link href="<?= PATH_CSS ?>material-kit.min.css?v=2.0.4" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="index-page sidebar-collapse">


<nav class="navbar navbar-expand-md bg fixed-top">
    <div class="container">
        <div class="navbar-translate">
            <a href="index.php?page=accueil" class="brand-logo" id="title"><?= TITRE ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul id="nav-mobile" class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.php?page=accueil"><?= NAV_ACCUEIL ?></a></li>
                <li class="nav-item"><a href="index.php?page=foot"><?= NAV_STAGE?></a></li>
                <li class="nav-item"><a href="index.php?page=basket"><?= NAV_INSCRIPTION?></a></li>
                <li class="nav-item"><a href="index.php?page=esport"><?= NAV_TEMOIGNAGE?></a></li>
                <li class="nav-item"><a href="index.php?page=esport"><?= NAV_PHOTOS?></a></li>
            </ul>
        </div>
    </div>
</nav>