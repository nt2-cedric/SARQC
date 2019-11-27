<?php
    require_once("./action/IndexAction.php");

    $action = new IndexAction();
    $action->execute();

    require_once("./partial/header.php");
?>
<!-- Accueil -->
<main class="masthead masked" id="top">
    <div class="container">
        <div class="row">
            <div class="lead col-lg-6">                
                <h1 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">  Faciliter le passage au numérique des revues savantes et culturelles.</h1>
                <p class="lead-text"> Portée par le laboratoire NT2 (et la plateforme Érudit), la Structure d’accompagnement des revues québécoises et canadiennes vise à faciliter la création de sites web adaptés aux besoins spécifiques et évolutifs des revues savantes et culturelles.</p>
                <div class="lead-controls">
                    <a href="./a-propos.php" class="btn-lead btn">En savoir plus</a>
                    <a href="https://www.youtube.com" class="text-white play-home js-play">
                        <i class="fa fa-play-circle"></i>
                        Regardez la video
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Contenu -->
<div class="content">
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
                                    <i class="icon fa fa-5x fa-tasks"></i>
                                    <h3>Faciliter</h3>
                                    <h4>la réalisation de votre projet</h4>
                                    <p>De la réflexion à la création, nous pouvons vous aider à évaluer vos besoins pour concrétiser votre plateforme de revue en ligne.</p>
                                </div>
                                
                                <div class="column column-padding col-md-4">
                                    <i class="icon fa fa-5x fa-users" aria-hidden="true"></i>
                                    <h3>Diffuser</h3>
                                    <h4>Une diffusion structurée et élargie de vos contenus</h4>
                                    <p>En offrant des ressources de gestion de contenus qui répondent aux standards de l’édition numérique, notamment du consortium interuniversitaire Érudit, la SARCQ accroît le rayonnement de votre revue et assure sa pérennité.</p>
                                </div>
                                <div class="column column-padding col-md-4">
                                    <i class="icon fa fa-5x fa-user-circle" aria-hidden="true"></i>
                                    <h3>Personnaliser</h3>
                                    <h4>Un site web personnalisé et adapté à vos besoins</h4>
                                    <p>À l’inverse des plateformes standardisées qui offrent une d’identité graphique limitée et des fonctionnalités restreintes, la SARQC offre un contenu web lié à l’identité éditoriale de votre revue.</p>
                                </div>
                        </div>
                </div>
</section>
    <section id="offres" class="features bgc-light section">
        <h2 class="section-title" style="text-align:center">  Nos offres en trois axes</h2>
        <div class="container">
            <div class="row-columns row-padding row">  
                <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <img src="img/test/test-350x450.jpg" width="350" height="450" alt="img" typeof="foaf:Image">
                </div>
                <div class="col-feature column column-padding col-md-6">
                    <div class="section-body">
                        <h3>Conseil</h3>
                        <p>Comprendre les langages techniques et les outils disponibles pour faire des choix adaptés à vos besoins.  </p>
                        <div class="column">
                            <div class="media-left">
                                <i class="fa fa-2x fa-money" aria-hidden="true"></i>
                            </div>
                            <div class="media-right">
                                <h4>Soutien aux demandes de subvention</h4>
                                <p>Réalisation de devis technique et aide à la rédaction des parties techniques</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="media-left">
                                <i class="fa fa-2x fa-book"></i>
                            </div>
                            <div class="media-right">
                                <h4>Production cahier des charges</h4>
                                <p>Architecture de l’information, Définition des fonctionnalités</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="media-left">
                                <i class="fa fa-2x fa-user"></i>
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
                            <p>Nous pouvons vous accompagner dans toutes les étapes du développement de votre plateforme </p>
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
                                    <p>Intégration graphique et implémentation de fonctionnalités supplémentaires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <img src="img/test/test-350x450.jpg" width="350" height="450" alt="img" typeof="foaf:Image">
                        </div>
                    <div class="col-feature-img column column-padding col-md-5 text-center wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                            <img src="img/test/test-350x450.jpg" width="350" height="450" alt="img" typeof="foaf:Image">
                        </div>
                    <div class="col-feature column column-padding col-md-6">
                        <div class="section-body">
                            <h3>Formation</h3>
                            <p>S’approprier les outils techniques pour développer une plus grande autonomie votre projet</p>
                            <div class="column">
                                <div class="media-left">
                                    <i class="fa fa-drupal fa-2x" aria-hidden="true"></i>
                                </div>
                                <div class="media-right">
                                    <h4>Formation Drupal</h4>
                                    <ul>
                                        <li>
                                            <b>Utilisation de la distribution SARQC</b>
                                        </li>
                                        <li>
                                            <b>Formation Drupal avancée et personnalisée</b>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column">
                                <div class="media-left">
                                    <i class="fa fa-2x fa-bar-chart"></i>
                                </div>
                                <div class="media-right">
                                    <h4>Formation SEO </h4>
                                    <p>Techniques de référencement, Google Analytics</p>
                                </div>
                            </div>
                            <div class="column">
                                <div class="media-left">
                                    <i class="fa fa-2x fa-film"></i>
                                </div>
                                <div class="media-right">
                                    <h4>Formation à la production de contenus médiatiques</h4>
                                    <p>Montage audio et vidéo</p>
                                </div>
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
                            <img src="./img/test/test-150x150.jpg" width="150" height="150" alt="img" typeof="Image">
                            <h3>Captures</h3>
                            <i class="fa fa-2x fa-quote-right"></i>
                            <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                        </div>
                    </div>
                    <div class="item review">
                        <div class="text-center">
                            <img src="./img/test/test-150x150.jpg" width="150" height="150" alt="img" typeof="Image">
                            <h3>Captures</h3>
                            <i class="fa fa-2x fa-quote-right"></i>
                            <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                        </div>
                    </div>
                    <div class="item review">
                        <div class="text-center">
                            <img src="./img/test/test-150x150.jpg" width="150" height="150" alt="img" typeof="Image">
                            <h3>Captures</h3>
                            <i class="fa fa-2x fa-quote-right"></i>
                            <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                        </div>
                    </div>
                    <div class="item review">
                        <div class="text-center">
                            <img src="./img/test/test-150x150.jpg" width="150" height="150" alt="img" typeof="Image">
                            <h3>Captures</h3>
                            <i class="fa fa-2x fa-quote-right"></i>
                            <p>Chocolate cake cookie marshmallow cake. Tart halvah pudding wafer muffin sesame snaps. Pastry gingerbread marzipan</p>
                        </div>
                    </div>
                
                </div>
            </div> 
        </div>
    </section>
    <section id="telechargement" class="prices text-center masked section" data-stellar-background-ratio="0.7" style="background-position: 50% -44.4px;">
        <div class="views-element-container block block-views block-views-blockcocoon-content-blocks-block-pricing-tables" id="block-views-block-cocoon-content-blocks-block-pricing-tables">
            <div class="ccn-content">
                <div>
                    <div class="js-view-dom-id-70a0c461adedea73c1bec2e4e30de579d1d1d299e7766dd11a3c4150c3a4f5be container rel-1">
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
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contacts text-center section">
        <div class="views-element-container block block-views block-views-blockcocoon-content-blocks-block-contact-details" id="block-views-block-cocoon-content-blocks-block-contact-details">
            <div class="ccn-content">
                <div>
                    <div class="js-view-dom-id-6b3a518d5377e474cf89a09e0199cc9e1f29ecd3039b755f28e3536e6d0106a8 container">
                        <div class="row">
                            <div class="text-center col-md-6 col-md-offset-3">
                                <h2 class="section-title">Contactez-nous !</h2>
                                <p>Prenez un rendez-vous de consultation et d’évaluation de vos besoins :</p>
                            </div>
                        </div>
                        <div class="section-body">
                            <form class="contact-message-feedback-form contact-message-form contact-form" data-user-info-from-browser="" action="index.php" method="post" id="contact-message-feedback-form" accept-charset="UTF-8">
                                <input type="hidden" name="consultation">
                                <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                    <input data-drupal-selector="edit-name" type="text" id="edit-name" name="firstname" value="" size="60" maxlength="255" class="form-text required form-control" required="required" aria-required="true" placeholder="Votre prénom">
                                </div>

                                <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-name form-item-name">
                                    <input type="text" id="edit-name" name="lastname" value="" size="60" maxlength="255" class="form-text required form-control" required="required" aria-required="true" placeholder="Votre nom">
                                </div>

                                <div class="js-form-item form-item js-form-type-email form-type-email js-form-item-mail form-item-mail">
                                    <input type="email" id="edit-mail--2" name="mail" value="" size="60" maxlength="254" class="form-email required form-control" required="required" aria-required="true" placeholder="Votre courriel">
                                </div>

                                <div class="field--type-string-long field--name-message field--widget-string-textarea js-form-wrapper form-wrapper" id="edit-message-wrapper">     
                                     <div class="js-form-item form-item js-form-type-textarea form-type-textarea js-form-item-message-0-value form-item-message-0-value">
                                        <div class="form-textarea-wrapper">
                                            <textarea class="js-text-full text-full form-textarea required resize-vertical form-control" data-drupal-selector="edit-message-0-value" id="edit-message-0-value" name="message[0][value]" rows="12" cols="60" placeholder="Message" required="required" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions js-form-wrapper form-wrapper" id="edit-actions--2"><input data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="op" value="Envoyer" class="button button--primary js-form-submit form-submit btn btn-b-white" placeholder="">
                                </div>

                            </form>
                        </div>
                        <div class="section-body">
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    
</div>
<?php
    require_once("./partial/footer.php");