<?php
require_once("./action/IndexAction.php");

$action = new IndexAction();
$action->execute();

require_once("./partial/header.php");
?>
<!-- Accueil -->

<?php
if ($action->mailed) {
?>
    <div class="bandeau mailed">
        Le message a été envoyé
    </div>
<?php
}
if ($action->failed) {
?>
    <div class='bandeau failed'>
        Le message n'as pas été envoyé...
    </div>
<?php
}
?>
<section id="top">
    <main class="masthead opener rel-1">
        <div class="lead col-lg-6">
            
        </div>
    </main>
    <aside id="propos-abstract" class="masked">
        <div class="container">
        <h1 class="wow fadeInDown"> Faciliter le passage au numérique des revues savantes et culturelles.</h1>
        <p class="lead-text"> Portée par le laboratoire NT2 (et la plateforme Érudit), la Structure d’accompagnement des revues québécoises et canadiennes vise à faciliter la création de sites web adaptés aux besoins spécifiques et évolutifs des revues savantes et culturelles.</p>
        <div class="lead-controls">
            <button onclick="openModal()" class="btn-lead btn">En savoir plus</button>
        </div>
        </div>

    </div>
</section>

<header id="menu" class="navbar navbar-expand-lg navbar-dark affix-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" ria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <i class="fas fa-bars"></i>
            </button>
            <a href="index.php#top" class="brand js-target-scroll">
                <img class="brand-img-white" alt="" width="130" src="img/logo/sarqc-logo-blanc_292x74px.png">
                <img class="brand-img" alt="" width="130" src="img/logo/sarqc-logo-orange_292x74px.png">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse" aria-expanded="false">
            <nav role="navigation" aria-labelledby="block-vanessa-main-menu-menu" id="block-vanessa-main-menu" class="block block-menu navigation menu--main">
                <div>
                    <ul class="clearfix navbar-nav mr-auto">
                        <li class="js-target-scroll-container">
                            <a href="index.php#mandats" class="is-active js-target-scroll">Nos mandats</a>
                        </li>
                        <li class="js-target-scroll-container">
                            <a href="index.php#offres" class="is-active js-target-scroll">Nos offres</a>
                        </li>
                        <li class="js-target-scroll-container">
                            <a href="index.php#realisations" class="is-active js-target-scroll">Nos réalisations</a>
                        </li>
                        <li class="js-target-scroll-container">
                            <a href="index.php#telechargement" class="is-active js-target-scroll">La distribution</a>
                        </li>
                        <li class="js-target-scroll-container">
                            <a href="index.php#contact" class="is-active js-target-scroll">Nous joindre</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Contenu -->

<section id="mandats" class="mandat text-center section">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="section-title">Nos mandats</h2>
                <p>La SARQC vous offre les outils et méthodes nécessaires pour maîtriser les enjeux de l’édition numérique et ainsi les intégrer dans votre processus de production, de gestion et de diffusion.</p>
            </div>
        </div>
        <div class="row">
            <div class="column column-padding col-md-4">
                <i class="icon fa fa-5x fa-map"></i>
                <h3>Faciliter</h3>
                <h4>Une réalisation à votre portée</h4>
                <p>De la réflexion à la création, nous pouvons vous aider à évaluer vos besoins pour concrétiser votre plateforme de revue en ligne.</p>
            </div>

            <div class="column column-padding col-md-4">
                <i class="icon fa fa-5x fa-bullhorn" aria-hidden="true"></i>
                <h3>Diffuser</h3>
                <h4>Une diffusion structurée et élargie de vos contenus</h4>
                <p>En offrant des ressources de gestion de contenus qui répondent aux standards de l’édition numérique, notamment du consortium interuniversitaire Érudit, la SARCQ accroît le rayonnement de votre revue et assure sa pérennité.</p>
            </div>
            <div class="column column-padding col-md-4">
                <i class="icon fa fa-5x fa-code" aria-hidden="true"></i>
                <h3>Personnaliser</h3>
                <h4>Un site web personnalisé et adapté à vos besoins</h4>
                <p>À l’inverse des plateformes standardisées qui offrent une d’identité graphique limitée et des fonctionnalités restreintes, la SARQC offre un contenu web lié à l’identité éditoriale de votre revue.</p>
            </div>
        </div>
    </div>
</section>

<section id="offres" class="features bgc-light section">
    <h2 class="section-title" style="text-align:center"> Nos offres en trois axes</h2>
    <div class="container">
        <div class="row-columns row-padding row">
            <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft">
                <img src="http://picsum.photos/350/450" width="350" height="450" alt="img" typeof="foaf:Image">
            </div>
            <div class="col-feature column column-padding col-md-6">
                <div class="section-body">
                    <h3>Conseil</h3>
                    <p>Comprendre les langages techniques et les outils disponibles pour faire des choix adaptés à vos besoins. </p>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-pencil" aria-hidden="true"></i>
                        </div>
                        <div class="media-right">
                            <h4>Soutien aux demandes de subvention</h4>
                            <p>Réalisation de devis technique et aide à la rédaction des parties techniques.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-book"></i>
                        </div>
                        <div class="media-right">
                            <h4>Production d'un cahier des charges</h4>
                            <p>Architecture de l’information et définition des fonctionnalités.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-bullseye"></i>
                        </div>
                        <div class="media-right">
                            <h4>Consultation personnalisée</h4>
                            <p>Identification de prestataires, choix technologiques, services d’hébergement, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-feature column column-padding col-md-6">
                <div class="section-body">
                    <h3>Développement</h3>
                    <p>Nous pouvons vous accompagner dans toutes les étapes du développement de votre plateforme. </p>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-newspaper" aria-hidden="true"></i>
                        </div>
                        <div class="media-right">
                            <h4>La distribution SARQC</h4>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-life-ring"></i>
                        </div>
                        <div class="media-right">
                            <h4>Support technique </h4>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-cogs"></i>
                        </div>
                        <div class="media-right">
                            <h4>Customisation de la distribution</h4>
                            <p>Intégration graphique et implémentation de fonctionnalités supplémentaires.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft">
                <img src="http://picsum.photos/350/450" width="350" height="450" alt="img" typeof="foaf:Image">
            </div>
            <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft">
                <img src="http://picsum.photos/350/450" width="350" height="450" alt="img" typeof="foaf:Image">
            </div>
            <div class="col-feature column column-padding col-md-6">
                <div class="section-body">
                    <h3>Formation</h3>
                    <p>S’approprier les outils techniques pour développer une plus grande autonomie votre projet.</p>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-drupal fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="media-right">
                            <h4>Formation Drupal</h4>
                            <p>
                                - Utilisation de la distribution SARQC.
                                <br />
                                - Formation Drupal avancée et personnalisée.
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-line-chart "></i>
                        </div>
                        <div class="media-right">
                            <h4>Formation SEO </h4>
                            <p>Techniques de référencement, Google Analytics.</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="media-left">
                            <i class="fa fa-2x fa-film"></i>
                        </div>
                        <div class="media-right">
                            <h4>Formation à la production de contenus médiatiques</h4>
                            <p>Montage audio et vidéo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="realisations" class="reviews text-center section">
    <div class="text-center col-md-6 col-md-offset-3">
        <h2 class="section-title">Nos réalisations</h2>
    </div>
    <div class="content">
        <div class="section-body">
            <div class="owl-carousel owl-theme review-carousel">
                <div class="item review">
                    <div class="text-center">
                        <img src="http://picsum.photos/150/150" width="150" height="150" alt="img" typeof="Image">
                        <h3>Captures</h3>
                        <i class="fa fa-2x fa-quote-right"></i>
                        <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                    </div>
                </div>
                <div class="item review">
                    <div class="text-center">
                        <img src="http://picsum.photos/150/150" width="150" height="150" alt="img" typeof="Image">
                        <h3>Captures</h3>
                        <i class="fa fa-2x fa-quote-right"></i>
                        <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                    </div>
                </div>
                <div class="item review">
                    <div class="text-center">
                        <img src="http://picsum.photos/150/150" width="150" height="150" alt="img" typeof="Image">
                        <h3>Captures</h3>
                        <i class="fa fa-2x fa-quote-right"></i>
                        <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                    </div>
                </div>
                <div class="item review">
                    <div class="text-center">
                        <img src="http://picsum.photos/150/150" width="150" height="150" alt="img" typeof="Image">
                        <h3>Captures</h3>
                        <i class="fa fa-2x fa-quote-right"></i>
                        <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="telechargement" class="prices text-center masked section">
    <div class="container">

        <div class="row">
            <div class="text-center text-white col-md-6 col-md-offset-3">
                <h2 class="text-white section-title">Téléchargement</h2>
            </div>
        </div>
        <div class="section-body">
            <div class="row-price">
                <div class="col-price Featured">
                    <div class="price-box">
                        <div class="price-body">
                            <div class="price-inner">
                                <header class="price-header">
                                    <h3 class="price-title">Faites le vous mêmes !</h3>
                                </header>
                                <div class="price-features">
                                    <div class="item-list">
                                        <p class="text-opacity">La SARQC a produit un outil open source. Vous possédez les compétences techniques ? La distribution offre deux thèmes de qualité. Pour posséder votre propre identité graphique, nous pouvons vous aider pour la personnalisation.</p>
                                    </div>
                                </div>
                                <a href="https://github.com/" class="btn">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contacts text-center section">
    <div class="container">
        <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
                <h2 class="section-title">Nous joindre </h2>
                <p>Prenez un rendez-vous de consultation et d’évaluation de vos besoins :</p>
            </div>
        </div>
        <div class="section-body">
            <form class="contact-message-feedback-form contact-message-form contact-form" data-user-info-from-browser="" action="index.php" method="post" id="contact-message-feedback-form" accept-charset="UTF-8">
                <input type="hidden" name="consultation">
                <input type="text" name="firstname" class="form-control" required="required" aria-required="true" placeholder="Votre prénom">
                <input type="text" name="lastname" maxlength="255" class="form-control" required="required" aria-required="true" placeholder="Votre nom">
                <input type="email" name="mail" maxlength="254" class="form-control" required="required" aria-required="true" placeholder="Votre courriel">
                <textarea class="form-control" name="message" rows="12" cols="60" placeholder="Message" required="required" aria-required="true"></textarea>
                <input type="submit" id="edit-submit" name="op" value="Envoyer" class="btn btn-b-white" placeholder="">


            </form>
        </div>

    </div>
</section>

<section id="propos-page" class="masthead masked">
    <div class="prices text-center section">


        <div class="container ">
            <div class="row">
                <h2>À propos</h2>
            </div>
            <div class="row equal">

                <div class="col-sm-4">
                    <div class="propos-box">
                        <h4 class="price-title">SARCQ</h4>
                        <p>Le projet SARQC s'inscrit dans le projet CO.SHS (Cyberinfrastructure ouverte pour les sciences humaines et sociales). Financé par la Fondation canadienne pour l’innovation dans le cadre du concours Initiative sur la cyberinfrastructure le projet est chapeauté par Vincent Larivière, professeur agrégé à l’École de bibliothéconomie et des sciences de l’information, titulaire de la Chaire de recherche du Canada sur les transformations de la communication savante et directeur scientifique d’Érudit (ancre). Sa réalisation est assurée par une équipe pluridisciplinaire de chercheur.e.s et un solide réseau de partenaires.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="propos-box">
                        <h4 class="price-title">Le NT2</h4>
                        <p>Fondé en 2004, et soutenu financièrement par la Fondation canadienne pour l'innovation (FCI) dans le cadre du programme des Fonds de l'avant-garde (FA) jusqu'en 2012, le Laboratoire NT2 a pour mission de promouvoir l’étude, la création et l’archivage de nouvelles formes de textes et d’œuvres hypermédiatiques.</p>
                        <a href="http://nt2.uqam.ca/fr/chaire-nt2" class="btn">En lire plus...</a>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="propos-box">
                        <h4 class="price-title">Érudit</h4>
                        <p>Érudit est un consortium inter-universitaire canadien et sans but lucratif.<br>Depuis plus de 20 ans, Érudit accompagne le milieu de la recherche et de la culture dans l’édition et la diffusion numérique de documents avec une gamme de services étendue, allant du balisage de données jusqu’à l’indexation de documents auprès des agrégateurs de contenu internationaux.</p>
                        <a href="https://www.erudit.org/fr/" class="btn">En lire plus...</a>
                    </div>
                </div>

            </div>
        </div>
        <button onclick="closeModal()" class="btn close-btn">Fermer</button>
    </div>
</section>

</div>
<?php
require_once("./partial/footer.php");
