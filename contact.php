<?php 
    // ajout du <head>et <header>
    $title = 'Faites connaissance avec Benjamin BUTTON';
    $description = ' Carrossier/peintre auto polyvalent depuis 15 ans. Notre atelier est la référence dans le Gard sur tous types de réparations de tôle ou plastique automobile. ';
    include 'header.phtml' ;
?>
    
    <main  class = "main-base">
        <div  class ="bg-cover">
            <h1> Contact </h1>
        </div>
        
        <section   class = " row max btw ">

        <?php 
                // ASIDE LEFT
                include 'asideLeft.html' ; 
            ?>

            <div  class ="container col ard">
                <article  class ="col contact-1">
                    
                    <h2> Contactez nous facilement </h2>
                    <p>Quelque soit votre besoin : carrosserie, peinture, mécanique ....
                        <br> une question ? un devis ? un rendez-vous ?
                        <br> Ce formulaire est là pour ça.
                        <br> Merci de nous donner le plus précisions possibles sur votre demande.</p>
                    <article class="horaires">
                        <h3>Nos horaires d'ouverture</h3>
                        <p>Du lundi au vendredi 8h30-12h30 et 14h-19h</p>
                        <p>Samedi de 9h à 12h</p>
                    </article>
                </article>
                        
                <article id="formulaire_contact" class ="col-4">
                        <?php if(isset($_GET['send']) && $_GET['send'] == 'success'):?>
                            <div class="success">
                                <p>Votre message a été envoyé avec succès !</p>
                            </div>
                        <?php endif; ?>
                    <h2> Formulaire de contact</h2>
                    <p><em>Informations relatives aux données collectées :Les informations recueillies sur ce formulaire 
                        sont enregistrées dans un fichier informatisé par Auto New Life  à des fins de communication uniquement 
                        suite à votre demande de devis ou toute autre demande d'informations.
                        Les données collectées seront communiquées aux seuls destinataires suivants : Auto New Life.
                        Les données sont conservées pendant la durée du traitement de votre demande  et ne seront nullement 
                        utilisées à des fins commercialesou transmises à des tiers.Vous pouvez accéder aux données vous concernant, 
                        les rectifier, demander leur effacement ou exercer votre droit à la limitation du traitement de vos données par simple demande.</em></p>   

                    <div class="formulaire">
                        <!-- changements fait sur le html 
                        les balises col-md-6 par exemple viennent du framework bootstrap
                        je les ai retiré pour plus de lisibilité, modifié légèrement les propriétés css 
                        dans les lignes 445 -> 475
                        -->
                        <form action="autoMailer/sendMailPerso.php?send=contact" method="post">
                        <div class="row ard">
                            <div class="styled-input wide">
                                <input name="name" id="name" type="text" required />
                                <label for="name">Nom et Prénom</label> 
                            </div>
                        </div>
                        <div class="row btw">
                            <div class="styled-input min">
                                <input name="mail" id="mail" type="text" required />
                                <label for="mail" >Email</label> 
                            </div>
                            <div class="styled-input min">
                                <input name="phone" id="phone" type="text" required />
                                <label for="phone">Téléphone</label>
                            </div> 
                        </div>
                        <div class="row ard">
                            <div class="styled-input wide">
                                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
                                <label for="content">Votre message</label>
                            </div>
                        </div>
                        <div class="col-xs-12" style="width:100%;text-align:center;">
                            <div class="g-recaptcha" style="display:inline-block;" data-sitekey="6Le2pOwUAAAAAKgVdbMMbWFmU96LGge7tIYwMZPc"></div>
                            <br/>
                            
                            <?php if(isset($_GET['send']) && $_GET['send'] == 'error'):?>
                                <div class="error">
                                    <p>Pensez à remplir correctement le formulaire et à cocher le Captchat de vérification.</p>
                                </div>
                            <?php endif; ?>
                            <p>
                                <input class="btn-lrg submit-btn" type="submit" value="Envoyer">
                            </p>
                        </div>
                        </form>
                    </div>
                </article>  
            </div>
            
            <?php 
                // ASIDE RIGHT
                include 'asideRight.html' ; 
            ?>

        </section>
    </main>

<?php 
    // ajout du <footer>
    include 'footer.html' ; 
?>