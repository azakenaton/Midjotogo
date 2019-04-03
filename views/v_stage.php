<?php
/**
 * Created by PhpStorm.
 * User: lhyve
 * Date: 30/03/2019
 * Time: 15:02
 */

require_once(PATH_VIEWS.'header.php');
require_once(PATH_VIEWS.'parralax.php');
?>

<div class="main main-raised">
    <div class="container">
        <h1>Stage</h1>
        <div class="row">
            <div class="col-sm">
                <p>L'association Midjo Togo vous propose d'effectuer des stages conventionnés ou non pour les personnes voulant découvrir une autre culture, une autre manière de vivre.</p></br>
                <a href="<?PATH_PDF?>stage1.pdf" download>Téléchargement</a>
            </div>
            <div class="col-sm">
                <iframe src="<?PATH_PDF?>stage1.pdf" width="450" height="600" id="iframe"></iframe>
            </div>
        </div>
        <h3>Nos missions</h3>
        <div class="row">
            <div class="col-sm">
                <p>Les missions proposées :</p></br>
                <a href="<?PATH_PDF?>stage2missions.pdf" download>Téléchargement</a>
            </div>
            <div class="col-sm">
                <iframe src="<?PATH_PDF?>stage2missions.pdf" width="450" height="600" id="iframe"></iframe>
            </div>
        </div>
        <h3>Chantier</h3>
        <div class="row">
            <div class="col-sm">
                <iframe src="<?PATH_PDF?>camp_chantier_ete_2019.pdf" width="450" height="600" id="iframe"></iframe>
            </div>
            <div class="col-sm">
                <iframe src="<?PATH_PDF?>camp chantier environnement.pdf" width="450" height="600" id="iframe"></iframe>
            </div>
        </div>
    </div>
</div>

<?php require_once (PATH_VIEWS.'footer.php');?>