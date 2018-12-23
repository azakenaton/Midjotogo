<?php
/**
 * Created by PhpStorm.
 * User: HYVERNAT
 * Date: 03/07/2018
 * Time: 21:33
 */


require_once(PATH_VIEWS.'header.php');
require_once(PATH_VIEWS.'parralax.php');?>

<div class="main main-raised">
    <div class="container">
        <div class="section">
            <div class="title">
                <h2>Bienvenue sur l'accueil du site de Midjo Togo</h2>
            </div>
            <div class="presentation">
                <p> L’ association MIDJO-Togo est une association de la loi 1901 de solidarité internationale créée le 25 avril 2011 à Lomé et enregistrée au Ministère de l’Administration Territoriale de la Décentralisation et des Collectivités Locales.

                    Pour trouver le récépissé de l'agrément de création de l'association délivré par le Ministère veuillez cliquer ici.<br>
                    Elle a pour objectifs de :
                </p>
                <ul>
                    <li><p>Développer l'éducation des enfants togolais</p></li>
                    <li><p>Favoriser la diffusion de la culture et des arts africains</p></li>
                    <li><p>Faire découvrir le Togo (ses paysages ; ses coutumes ; ses traditions et  ses modes de vie)</p></li>
                </ul>
                <p>
                    MIDJO-Togo travaille dans les domaines culturels et artistiques (danses africaines, percussions, arts africains), touristiques (tourisme solidaire) et socio-éducatifs (animations et soutien scolaire auprès des enfants). Elle est organisée et a à sa tête une équipe dynamique composée d’un président, d’un secrétaire et d’un trésorier. L’association MIDJO-Togo est constituée au jour d’aujourd’hui d’une quinzaine de jeunes volontaires issus de milieux divers (artistes, étudiants) maîtrisant des disciplines telles que : la danse, les percussions, les arts plastiques.<br><br>

                    Lors de sa création, les fondateurs de MIDJO-Togo avaient pour idée de constituer une troupe de danse traditionnelle et de guides touristiques. L’idée du tourisme solidaire a été associée  à la danse car ces deux domaines se rassemblent autour du concept de découverte des traditions et des cultures du pays à travers les visites. Vers la fin de l’année 2011, les membres de MIDJO-Togo ont décidé d’élargir leurs activités en intégrant des interventions socio-culturelles et éducatives auprès des enfants, car ils sont l’avenir du Togo et seront ceux qui transmettront les us et coutumes  vers les générations futures. L’association MIDJO-Togo s’incarne dans l’idée que « chacun a quelque chose à donner et à recevoir de l’autre », et s’unit autour de sa devise : « ensemble pour la culture !».
                    Vous trouvez une description plus détaillée ici.

                </p>

            </div>
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    <li data-target="#carousel" data-slide-to="5"></li>
                    <li data-target="#carousel" data-slide-to="6"></li>
                    <li data-target="#carousel" data-slide-to="7"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/photo_membres.jpg" alt="Première">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Photo des membres</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/etiam.jpg" alt="Deuxième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Etiam</h5>
                            <p id="carousel-text">ABASSA président, animateur, percussioniste </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/charbelle.jpg" alt="Troisième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Charbelle</h5>
                            <p id="carousel-text">Trésorière, animatrice, danseuse </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/Edem.jpg" alt="Quatrième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Edem</h5>
                            <p id="carousel-text">Animateur, danseur </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/Ekue.jpg" alt="Cinquième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Ekue</h5>
                            <p id="carousel-text">Animateur, danseur </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/aaron.jpg" alt="Sixième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Aaron</h5>
                            <p id="carousel-text">Percussioniste </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/Fréna.jpg" alt="Septième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Fréna</h5>
                            <p id="carousel-text">Percussioniste, artiste plasticien </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= PATH_IMAGES ?>membres/victoire.jpg" alt="Huitième">
                        <div class="carousel-caption d-none d-md-block" id="carousel_desc">
                            <h5>Victoire</h5>
                            <p id="carousel-text">Danseuse</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>


<?php require_once (PATH_VIEWS.'footer.php');?>

