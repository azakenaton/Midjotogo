<?php
/**
 * Created by PhpStorm.
 * User: lhyve
 * Date: 23/10/2018
 * Time: 10:13
 */

require_once(PATH_VIEWS.'header.php');
require_once(PATH_VIEWS.'parralax.php');
?>

<div class="main main-raised">
    <div class="container">
        <h1>Témoignages</h1>

        <div class="container" id="myCard">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Tabea_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Tabea_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Tabea_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Tabea SCHRÖDER</h5>
                            <h6 class="card-subtitle mb-2 text-muted">19 ans, volontaire au Togo en 2016/2017, danseuse et percussioniste</h6>
                            <p class="card-text">"Pendant mon temps au Togo comme volontaire, j'ai découvert l'association Midjo Togo, qui est vire devenue une grande partie de ma vie quotidienne. Je suis y allée deux fois par semaine pour participer au cours de danse et de percussion, mais j'ai surtout pu faire des nouveaux amitiées, qui existent même après la fin de mon séjour. N'importe combien d'heures j'ai deja travaillé dans la journée et aussi quand j'ai passé une journée pas très bien - arrivée à Midjo j'ai retrouvé mon sourire. Il y avait toujours une cohésion très familial et un bon échange culturel.</br>
                                Tout le monde peut peut participer et s'engager et sera accepté a ses manières alors que chaqu'un peut vite trouver sa place dans le groupe. C'était des moments magnifiques auxquelles je me rapelle avec plaisir et qui ont faconné mon temps au Togo à grande échelle.</p>
                        </div>
                        <div class="tab-pane fade" id="Tabea_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Tabea SCHRÖDER</h5>
                            <h6 class="card-subtitle mb-2 text-muted">19 Jahre, 2016/2016 Freiwillige in Togo, hat am Tanz- und Trommelunterricht teilgenommen</h6>
                            <p class="card-text">"Während meiner Zeit als Freiwillige in Togo entdeckte ich den Verein Midjo Togo, der schnell einen großen Teil meines Alltages ausmachte. Ich ging dort zweimal die Woche zum Tanz- & Trommelunterricht, aber vor allem konnte ich tolle Freundschaften knüpfen, die auch nach Ende des Freiwilligendienstes noch bestehen. Egal, wie lang der Tag auf der Arbeit war oder auch wenn ich mal einen schlechten Tag hatte - sobald ich bei Midjo ankam, musste ich unwillkürlich lächeln und war dort immer sehr glücklich. Es ist ein sehr familiärer Zusammenhalt und ein toller kultureller Austausch.
                                Jeder, der möchte, kann mitmachen, sich engagieren und wird akzeptiert, wie er ist, sodass man ganz schnell seinen Platz in der Gruppe findet. Eine wunderbare Zeit, an die ich sehr gerne zurückdenke und die mein Jahr in Togo maßgeblich geprägt hat."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Etiam_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Etiam_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Etiam_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Etiam ABASSA</h5>
                            <h6 class="card-subtitle mb-2 text-muted">26 ans,artiste- chorégraphe- percussionniste- animateur, actuel président de l'association, membre depuis 2011</h6>
                            <p class="card-text">"Pour moi Midjo Togo est la plus meilleure des associations dans la quelle je me retrouve aujourd'hui.
                                J' apprécie toujours la motivation qui rime dans le cœur des membres et l'engagement totale de chaque membre.à Midjo. Nous sommes un et nous formons une seule famille sans différence de culture. Je suis le premier témoin  de la façon spéciale dont se fait l’intégration a midjo, de la façon
                                dont chaque activités de l'association se déroule toujours en parfait harmonie.a Midjo Togo, chacun se sent utile et engagé pour  changer, échanger, donner, promouvoir, développer  quelques choses de positive.
                                Pour vos stages ou activités  quelconques n’hésiter donc pas à essayer Midjo Togo."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Etiam_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Etiam ABASSA</h5>
                            <h6 class="card-subtitle mb-2 text-muted">26 Jahre - Künstler, Choreograph, Trommler, Animator und Mitglied von Midjo Togo midestens seit 2011 - ist der aktuelle Vorsitzende des Vereins.</h6>
                            <p class="card-text">Für mich ist Midjo Togo der beste Verein, in dem ich gerade nur sein könnte. Ich schätze die Motivation, die in den Herzen der Mitglieder regiert sehr wert, ebenso wie das absolute Engagement jedes einzelnen Mitglieds. Wir sind eins und wir bilden eine einzige Familie, ohne Unterschiede der Kulturen, Ich bin der erste, der sofort bezeugt, auf welche spezielle Weise Integration bei Midjo geschieht, in welcher perfekten Harmonie die Aktivitäten bei Midjo geschehen. Bei Midjo Togo fühlt sich jeder nützlich und engagiert um etwas zu bewegen, auszutauschen, zu geben, zu fördern, zu verbessern.
                                Für eure Praktika oder sonstige Aktivitäten - zögert also nicht, zu Midjo Togo zu kommen!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Kokou_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Kokou_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Kokou_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Kokou Mawuli Agbo</h5>
                            <h6 class="card-subtitle mb-2 text-muted">22 ans, directeur artistique, chef animateur a Midjo Togo, membre depuis 2013</h6>
                            <p class="card-text">
                                "Cette association fait partie du moitié de ma vie. J’ai vécu beaucoup de chose positive et j'ai  appris beaucoup sur  l'intégration dans la vie sociale, l'échange culturel, la communication avec le monde, des enfants et surtout sur la théorie du donner- recevoir.
                                Les portes sont grandement ouvert a tout le monde qui aimerais venir échanger avec nous sur le plan culturel, éducatif, social, touristique et environnemental."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Kokou_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Kokou Mawuli Agbo</h5>
                            <h6 class="card-subtitle mb-2 text-muted">22 Jahre, künsterischer Leiter, Chef-Animator, Mitglied seit 2013</h6>
                            <p class="card-text">
                                "Dieser Verein ist Teil meines halben Lebens. Ich habe viele positive Dinge erlebt und ich habe viel über Integration in das soziale Leben gelernt, über kulturellen Austausch, weltweite Kommunikation, über Kinder und vor allem über die Theorie des Gebens und Nehmens.
                                Die Türen stehen weit offen für alle, die sich gerne mit uns austauschen wollen auf kultureller, erzieherischer, sozialer, touritischer oder Umweltebene."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Mia_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Mia_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Mia_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Mia Waage</h5>
                            <h6 class="card-subtitle mb-2 text-muted">20 ans, coordinatrice, membre depuis 2015</h6>
                            <p class="card-text">
                                "J'ai commencé d'apprendre la danse à Midjo. Les danses traditionnelles m'ont beaucoup plu
                                mais surtout je me sentais bien avec le groupe. Avec le temps j'ai commencée de participer
                                aussi aux autres activités avec les enfants et a un moment, moi et les autres allemandes,
                                nous avons débuté d'enseigner l'allemand aux enfants - tout selon la devise du groupe: chacun
                                a quelque chose a recevoir et a donner. Midjo Togo n'est plus seulement une association
                                pour moi - nous sommes une famille. Actuellement je suis la coordinatrice en Allemagne
                                et je recommande Midjo Togo a tout le monde qui est interessé de voyager au Togo.
                                Je suis a votre disposition pour tout genre de question, aussi si vous venez de la
                                France ou d'un autre pays. Vous trouvez mon contacte dans la rubrique >>contactez-nous<<."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Mia_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Mia Waage</h5>
                            <h6 class="card-subtitle mb-2 text-muted">20 Jahre alt, Koordinatorin, Mitglied seit 2016</h6>
                            <p class="card-text">
                                "Ich habe angefangen bei Midjo Tanzunterricht zu nehmen. Die traditionellen Tänze haben
                                mir sehr viel Spaß gemacht und vor allem habe ich mich mit der Gruppe sehr wohl gefühlt.
                                Nach und nach arbeitete ich auch immer mehr bei den anderen Aktivitäten mit den Kindern
                                mit und irgendwann haben wir angefangen, einen Deutschkurs zu geben, ganz nach dem Motto
                                der Gruppe - jeder kann etwas nehmen und auch geben. Midjo Togo ist nicht mehr nur irgendein
                                Verein für mich, sie sind meine Familie! Mittlerweile bin ich die Koordinatorin hier in
                                Deutschland und kann jedem nur empfehlen, diesen Verein zu besuchen, wenn ihr nach Togo
                                geht oder gehen wollt. Für Fragen aller Art stehe ich euch gerne zur Verfügung. Schaut
                                einfach unter der Rubrik 'Kontakt' nach."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Frena_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Frena_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Frena_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Frena</h5>
                            <h6 class="card-subtitle mb-2 text-muted">25 ans, percussioniste, artiste plasticien, membre depuis 2015</h6>
                            <p class="card-text">
                                "Pour moi, Midjo est la plus belle association que je connaisse -
                                vu ces deux préoccupations fondamentaux: la domaine associative ou vie prompt,
                                vie épanouie est accordée aux enfants de tout âge sans distinction de race,
                                de sexe, d'ethnie et de réligion; puis son groupe de ballet composé de
                                percussionistes, danseurs et danseuses sympas et généreux qui dans l'unanimité
                                donnent valeur à la culture africaine. À Midjo Togo l'amour, la joie et la paix
                                existent, j'aime Midjo Togo!"
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Frena_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Frena</h5>
                            <h6 class="card-subtitle mb-2 text-muted">25 Jahre alt, Trommler, Künstler, Mitglied seit 2015</h6>
                            <p class="card-text">
                                "Für mich ist Midjo der schönste Verein, den ich kenne - bei Betrachtung dieser zwei
                                Vertiefungen: die Seite des Vereins, bei der das schnelle und aufblühende Leben auf die
                                Kinder abgestimmt wird, Kinder aller Altersklassen, Geschlechter, Ethnien und aller
                                Religionen; und die Seite der Musikgruppe, die aus sympathischen und gutherzigen Musikern
                                und TänzerInnen besteht, die in Einstimmigkeit Wert in die afrikanische Kultur legen.
                                Bei Midjo existieren die Liebe, Freude, Frieden, ich liebe Midjo!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Charbelle_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Charbelle_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Charbelle_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Charbelle LAWSON-DJEKY</h5>
                            <h6 class="card-subtitle mb-2 text-muted">22 ans, trésorière, danseuse, animatrice, membre depuis 2012</h6>
                            <p class="card-text">
                                "Midjo Togo m'a permis de m'intégrer dans la vie sociale et d'apprendre beaucoup plus
                                sur l'échange culturel et surtout la vie avec les enfants. J'aime tellement le centre
                                Midjo Togo et j'invite tout le monde a y faire un tour pour l'échange culturel et le
                                tourisme, et tout un acceuil chaleureux vous sera reservé! Ensemble promouvons la culture et promouvons les droits des enfants!"
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Charbelle_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Charbelle LAWSON-DJEKY</h5>
                            <h6 class="card-subtitle mb-2 text-muted">22 Jahre alt, Kassenwartin, Tänzerin, Animatorin, Mitglied seit 2012</h6>
                            <p class="card-text">
                                "Midjo Togo hat es mir erlaubt mich in das soziale Leben zu integrieren und viel über
                                kulturellen Austausch zu lernen, vor allem aber auch über das Leben mit Kindern. Ich mag
                                das Zentrum Midjo Togo so gerne und ich lade alle ein, für einen kulturellen Austausch
                                oder Tourismus vorbei zu kommen und ein warmherziger Empfang sei euch reserviert! Lasst
                                uns gemeinsam die Kultur und die Rechte der Kinder fördern!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card" id="mycard">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="card-tab" data-toggle="tab" role="tab" aria-controls="français" aria-selected="true" href="#Marilen_fr">Français</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="card-tab" data-toggle="tab" role="tab" aria-controls="allemand" aria-selected="false" href="#Marilen_all">Allemand</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Marilen_fr" role="tabpanel" aria-labelledby="français-tab">
                            <h5 class="card-title">Marilen GAISER</h5>
                            <h6 class="card-subtitle mb-2 text-muted">20 ans, danseuse, membre depuis 2015</h6>
                            <p class="card-text">
                                "Le temps que j'ai pu passer à Midjo m'a beaucoup marqué et est toujours tellement important
                                pour moi. Presque cinq mois j'y ai dansé, joué le djembé, chanté, rigolé et vecu des moments
                                qui comptent parmi les meilleurs de ma vie. Notre famille forme un cadre dans lequel tous
                                les enfants, les membres et autres visiteurs peuvent s'épanouir formidablement parce que
                                (chez nous) tout le monde est le bienvenue, est accepté et est la pour l'un pour l'autre,
                                Je suis fière d'être un membre de Midjo."
                            </p>
                        </div>
                        <div class="tab-pane fade" id="Marilen_all" role="tabpanel" aria-labelledby="allemand-tab">
                            <h5 class="card-title">Marilen GAISER</h5>
                            <h6 class="card-subtitle mb-2 text-muted">20 Jahre alt, Tänzerin, Mitglied seit 2015</h6>
                            <p class="card-text">
                                "Die Zeit, die ich bei Midjo verbringen durfte, hat mich sehr geprägt und ist immer noch
                                sehr wichtig für mich. Fast fünf Monate habe ich dort getanzt, getrommelt, gesungen, gelacht
                                und einige Momente erlebt, die zu den Besten meines Lebens gehören. Unsere Familie bietet
                                einen Rahmen in dem dich alle Kinder, Mitglieder und andere Besucher wunderbar entfalten
                                können, da wir jeden Willkommen heißen, akzeptieren und alle für einander da sind. Ich bin
                                stolz, ein Teil von Midjo zu sein."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once (PATH_VIEWS.'footer.php');?>