<?php
/**
 * Created by PhpStorm.
 * User: lhyve
 * Date: 02/01/2019
 * Time: 22:23
 */

require_once(PATH_VIEWS.'header.php');
require_once(PATH_VIEWS.'parralax.php');
?>

<div class="main main-raised" data-spy="scroll" data-target="#navbar-ins">
    <div class="container">
        <h1>Inscription</h1>

        <div>
            <p>Sur cette page vous trouverez des informations sur les sujets suivants:</p>
            <ul>
                <li><p>Le programme des missions et des activités</p></li>
                <li><p>Comment s'inscrire à nos activités</p></li>
                <li><p>Comment financier son voyage</p></li>
                <li><p>Comment préparer son séjour</p></li>
            </ul>
        </div>

        <nav id="navbar-ins" class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navigation</a>
            <nav class="nav nav-pills">
                <a class="nav-link link_scroll" href="#programmes">Programmes</a>
                <a class="nav-link link_scroll" href="#inscrire">S'inscrire</a>
                <a class="nav-link link_scroll" href="#frais">Frais</a>
                <a class="nav-link link_scroll" href="#financement">Financement</a>
                <a class="nav-link link_scroll" href="#sejour">Préparer son séjour</a>
                <a class="nav-link link_scroll" href="#stage">Stage</a>
            </nav>
        </nav>

        <div id="navbar-scroll" data-y="scroll" data-target="#navbar-ins" data-offset="0">
            <h3 id="programmes" class="titre_scroll">Programmes</h3>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;}
                .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg .tg-ycr8{background-color:#9aff99;text-align:left;vertical-align:top}
                .tg .tg-baqh{text-align:center;vertical-align:top}
                .tg .tg-zuva{background-color:#c0c0c0;text-align:left}
                .tg .tg-y6fn{background-color:#c0c0c0;text-align:left;vertical-align:top}
                .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>
            <table class="tg">
                <tr>
                    <th class="tg-zuva">Code</th>
                    <th class="tg-y6fn">Localité</th>
                    <th class="tg-y6fn">Type de mission</th>
                    <th class="tg-y6fn">Activités</th>
                    <th class="tg-y6fn">Periode</th>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Animation</td>
                    <td class="tg-0lax">Lomé</td>
                    <td class="tg-0lax">Animations socioéducatives didiées pricipalement aux enfants du quartier Totsi</td>
                    <td class="tg-0lax">1.:Activitées ludiques (jeux, …) </br> 2.:Sorties récréatives (plage, piscine,...)</td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Arts & Culture</td>
                    <td class="tg-0lax">Lomé</td>
                    <td class="tg-baqh">Stage initiatique de danse et de percussion africaines</td>
                    <td class="tg-0lax">1.: Paricipation aux répétitions</br>
                        2.: Participation aux spectacles </td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Éducation</td>
                    <td class="tg-0lax">Lomé</td>
                    <td class="tg-0lax">Soutenir et participer activement àl'éveil éducatif des enfants</td>
                    <td class="tg-0lax">1.: Cours d'alphabétisation </br>2.:Séances de soutien scolaire
                        </br>3.: Séances d'éveil créatif (dessins, peinture, …)
                        </br>4.: Séances de lecture</td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Sensibilisation</td>
                    <td class="tg-0lax">Lomé</td>
                    <td class="tg-0lax">Interventions de Midjo dans des établissements scolaires et autres centres d'enfants dans le but de les sensibiliser et les former</td>
                    <td class="tg-0lax">1.: Préparation des spectacles artistiques dans les écoles
                        </br>2.: Aider les écoliers à trverser la route poureviter les accidents</td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Biblimédiathèque</td>
                    <td class="tg-0lax">Lomé</td>
                    <td class="tg-0lax">Projet de construire une bibliothèque ainsi qu'une salle informatique dans les locaux de Midjo Togo</td>
                    <td class="tg-0lax">1.: Participer aux differents chantiers pour faire sortir de terre les deux espaces</td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
                <tr>
                    <td class="tg-ycr8">Midjo Campagnes</td>
                    <td class="tg-0lax">Kpalimé et ses environs</td>
                    <td class="tg-0lax">Interventions dans les villages pour soutenir les acteurs locaux</td>
                    <td class="tg-0lax">1.: Former les paysans aux nouvelles techniques d'agriculture
                        </br>2.:Sensibiliser les acteurs locaux sur le bon maintien de l'environnement
                        </br>3.: Mettre en place un programme de sensibilisation concernant le planning familial, travail des enfants, ...</td>
                    <td class="tg-0lax">Tout au long de l'année</td>
                </tr>
            </table>
            <h3 class="titre_scroll" id="inscrire">S'inscrire</h3>
            <p>Pour trouver la fiche d'inscription aux stages <a href="<?PATH_PDF?>inscription_stage.pdf" download>cliquez ici.</a></br>
                <iframe src="<?PATH_PDF?>inscription_stage.pdf" width="600" height="800" id="iframe"></iframe>
            </br>
                Midjo Togo recherche des volontaires souhaitant s'impliquer dans le quotidien d'une association de
                solidarité internationale togolaise. Nous proposons diverses missions solidaires à durées flexibles.</p>
            <h3 class="titre_scroll" id="frais">Frais</h3>
            <p>En tant qu’association de solidarité internationale ne percevant aucune subvention, nous dépendons
                des soutiens financiers de nos membres permanents ainsi que des dons de généreux donateurs étrangers.
                Néanmoins nos moyens restent très limités ce qui nous empêche d’entrevoir l’avenir de l’association de
                manière positive. C’est pour cela que, dans le cadre de nos projets de bénévolat, nous avons décidé de
                demander aux personnes souhaitant travailler bénévolement avec nous de contribuer au développement de
                MIDJO-Togo à hauteur de 50€ (32.800CFA)</br></br>
                Ce montant correspond aux frais d’inscription et n’est payé qu’une seule fois. Ces 50€ serviront à nous
                aider au paiement de certains frais répertoriés dans la grille ci-dessous :
                </br></br>1€ = 656CFA
            </p>

            <style type="text/css">
                .tg2  {border-collapse:collapse;border-spacing:0;}
                .tg2 td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg2 th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                .tg2 .tg-zuva{background-color:#c0c0c0;text-align:left}
                .tg2 .tg-gx9h{background-color:#9aff99;text-align:left}
                .tg2 .tg-s268{text-align:left}
            </style>
            <table class="tg2">
                <tr>
                    <th class="tg-zuva">FRAIS</th>
                    <th class="tg-zuva">JUSTIFICATION</th>
                    <th class="tg-zuva">%</th>
                    <th class="tg-zuva">MONTANT</th>
                </tr>
                <tr>
                    <td class="tg-gx9h">Gestion de l’association</td>
                    <td class="tg-s268">Dépenses liées à la logistique et à la gestion administrative de MIDJO</td>
                    <td class="tg-s268">30%</td>
                    <td class="tg-s268">15€ / 9.840CFA</td>
                </tr>
                <tr>
                    <td class="tg-gx9h">Sous-location appartement</td>
                    <td class="tg-s268">Midjo sous –loue un appartement existant dans les locaux de l’association
                        pour les volontaires-bénévoles. Cette contribution permet de nous soutenir lorsque l’habitation
                        est laissée vacante</td>
                    <td class="tg-s268">30%</td>
                    <td class="tg-s268">15€ / 9.840CFA</td>
                </tr>
                <tr>
                    <td class="tg-gx9h">Indemnisation animateurs / éducateurs</td>
                    <td class="tg-s268">Nous souhaitons que nos animateurs et éducateurs puissent recevoir une petite
                        rémunération pour leurs conseils et le temps qu’ils dédient aux formations.</td>
                    <td class="tg-s268">40%</td>
                    <td class="tg-s268">20€ / 13.120CFA</td>
                </tr>
                <tr>
                    <td class="tg-gx9h">TOTAL</td>
                    <td class="tg-s268"></td>
                    <td class="tg-s268">100%</td>
                    <td class="tg-s268">50€ / 32.800CFA</td>
                </tr>
            </table>
            <p>
                Si vous le désirez nous pouvons vous loger dans un appartement que nous sous-louons se trouvant
                dans les locaux de l'association.</br></br>
                Si vous le désirez, des excursions sont possible (Togoville, Aného, Kpalimé, Atakpamé...).
                Midjo-Togo se propose de vous aidez à organiser vos expéditions, les membres de Midjo-Togo se feront
                un plaisir si vous le souhaiter de vous servir de guide. Néanmoins, ces excursions sont à votre charge.</br></br>
                Pour les groupes de bénévoles (étudiants, scouts, éducateurs spécialisés, assistants de service social, etc...)
                qui souhaiteraient s'investir sur nos projets de solidarité internationale, les dates des chantiers sont
                flexibles.</br></br>
                Lors de votre séjour, d’autres volontaires expatriés peuvent-être présents. Cependant, il est possible
                de réserver un chantier si vous voulez le réaliser uniquement avec des personnes de votre entourage.
                Les groupes seront assistés sur le terrain par des animateurs et volontaires locaux de Midjo Togo.</br></br>
                Certaines dates sont encore à définir, selon la disponibilité des volontaires et de leur choix de chantier.
            </p>
            <h3 class="titre_scroll" id="financement">Financement</h3>
            <p>
                Partir effectuer des missions de bénévolat et/ou de volontariat implique des coûts qui peuvent être un
                frein pour le ou la future volontaire. Ne vous inquiétez pas car de nombreux outils sont à votre
                disposition pour financer votre projet. En effet, en vous adressant à votre entourage ou à des organismes
                privés ou publiques vous pourrez récupérer des fonds qui vous permettront d'avoir un sérieux budget pour
                partir.
                </br></br>
                En suivant ce <a href="https://drive.google.com/file/d/0Bw6S3V-ZJ-XZQzhnc29RQjdibnc/view">lien</a> vous pourrez consulter un document qui vous indique les démarches à suivre pour
                obtenir des soutiens financiers pour préparer votre projet plus sereinement.
            </p>
            <h3 class="titre_scroll" id="sejour">Préparer son séjour</h3>
            <p>
                Il n'est jamais simple de préparer un séjour et c'est encore moins simple lorsque l'on s'apprête à
                découvrir l'Afrique pour la première fois (sauf pour les récidivistes 😉). Avant de se lancer il est
                important de se renseigner sur sa destination pour cerner un minimum son futur environnement, il est
                indispensable de prendre certaines précautions afin d'éviter de rencontrer des difficultés une fois sur
                place. L'ambassade de France au Togo et France Volontaires sont à votre entière disposition et ont mis
                en ligne cet excellent document qui vous permettra d'y voir plus clair:</br></br>
                <a href="https://tg.ambafrance.org/Futurs-volontaires-et-stagiaires-au-Togo-Precautions-d-usage">Cliquez ici</a></br></br>
                Ensuite il faut savoir comment préparer ses affaires. Il faut avant tout savoir que la majorité des compagnies
                aériennes autorisent d'avoir deux valises de 23 kilos chacune en soute plus un bagage cabine de 12 kilos maximum.
                </br></br>
                <a href="https://www.airfrance.fr/FR/fr/local/resainfovol/aba/BagCalculatorAction.do?method=jspProcess">
                    Lien Air France: Cliquez ici
                </a></br></br>
                Puis arrive le moment de remplir ses valises et là vous aurez à faire des choix car remplir deux valises
                de 23 kilos ça n'est pas rien. Donc nous vous avons dressé une liste des affaires que vous seriez susceptibles
                de prendre avec vous:</br></br><a href="https://drive.google.com/file/d/0Bw6S3V-ZJ-XZZk9GUktnVWtvWjQ/view">Cliquez ici</a>
                </br></br>
            </p>
            <h3 class="titre_scroll" id="stage">Stage</h3>
            <p>L'association Midjo Togo vous propose d'effectuer des stages conventionnés ou non pour les personnes voulant découvrir une autre culture, une autre manière de vivre.</p>
            <iframe src="<?PATH_PDF?>stage1.pdf" width="600" height="800" id="iframe"></iframe>
            <p>Les missions proposées :</p>
            <iframe src="<?PATH_PDF?>stage2missions.pdf" width="600" height="800" id="iframe"></iframe>
        </div>
        <?php require_once (PATH_VIEWS.'footer.php');?>
    </div>
</div>
