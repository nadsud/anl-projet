<?php 
    // ajout du <head>et <header>
    $title = 'Demandez un devis pour toute réparation carrosserie peinture';
    $description = 'Demandez un  devis gratuit sans engagement ou prenez rendez-vous. Réponse sous 24H depuis notre formulaire en ligne. Déplacement à votre domicile possible (voir conditions).' ;
    include 'header.phtml' ;
?>
    <main  class = "main-base">
        <div  class ="bg-cover">
            <h1> Devis </h1>
        </div>
        
<section   class = " row max btw ">

<?php include 'asideLeft.html' ; ?>

    <div class ="container col ard">
                    
        <article  class ="col contact-1">
                        
            <h2> Demande de devis </h2>
            <p>Formulez votre demande de devis pour vos réparations en carrosserie, peinture ou petite mécanique.<span>Devis gratuit et sans engagement !</span>
            <br>Ce formulaire est là pour ça.
            <br>Merci de nous donner le plus précisions possibles sur votre demande.<br><br>
            <span>Vous pouvez aussi passer nous voir !</span>
            <img id="devis-arrow" src="images/arrow.png">
            </p>
            
            <article class="horaires">
                <h3>Nos horaires d'ouverture</h3>
                <p>Du lundi au vendredi 8h30-12h30 et 14h-19h</p>
                <p>Samedi de 9h à 12h</p>
            </article>
                        
            <p><span>Vous ne pouvez déplacer votre véhicule ?</span> (auto non roulante ou en pièces). Nous nous déplaçons sur rendez-vous dans un rayon de 30km autour de Foissac.</p>
        </article>
                            
        <article  id="formulaire_devis" class ="col-4">
            
        <?php if(isset($_GET['send']) && $_GET['send'] == 'success'):?>
                <div class="success">
                    <p>Votre message a été envoyé avec succès !</p>
                </div>
            
        <?php endif; ?>
            
                <h2>Formulaire de devis</h2>
                <p id="text-form"><em>Informations relatives aux données collectées :Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par Auto New Life  à des fins de communication uniquement suite à votre demande de devis ou toute autre demande d'informations.Les données collectées seront communiquées aux seuls destinataires suivants : Auto New Life.
                Les données sont conservées pendant la durée du traitement de votre demande  et ne seront nullement utilisées à des fins commerciales ou transmises à des tiers.Vous pouvez accéder aux données vous concernant, les rectifier, demander leur effacement ou exercer votre droit à la limitation du traitement de vos données par simple demande.</em></p>   
        
        <div class="formulaire">
            <form action="autoMailer/sendMailPerso.php?send=devis" method="post">
                                
                <div class="row ard">
                    
                        <div class="form">
                            
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <input type="text" name="name" required />
                                        <label>Nom et Prénom</label> 
                                    </div>
                                </div>
                            
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input wide">
                                        <input type="text" name="mail" required />
                                        <label>Email</label> 
                                    </div>
                                </div>
                            
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input wide">
                                        <input type="text" name="phone" required />
                                        <label>Téléphone</label> 
                                    </div>
                                </div>
                                    
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <input type="text" name="vehicule_type" required />
                                        <label for="type">Type de véhicule (modèle, marque...)</label> 
                                    </div>
                                </div>
                                
                                <div class="col-xs-12">
                                        
                                    <div class="center">	
                                        <p>-Choisissez le service souhaité-</p>
                                        <div class="row ard">
                                            <input class="inp-cbx" id="carrosserie" name="carrosserie" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="carrosserie" ><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Carrosserie</span></label>

                                            <input class="inp-cbx" id="peinture" name="peinture" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="peinture"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Peinture</span></label>

                                            <input class="inp-cbx" id="mecanique" name="mecanique" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="mecanique"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Mécanique</span></label>

                                            <input class="inp-cbx" id="autre" name="autre" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="autre"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Autre</span></label>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <textarea name="content" cols="60" rows="10" required></textarea>
                                        <label>Détaillez votre demande</label>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12" style="width:100%;text-align:center;" >
                                    
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
                        </div> <!--fin <form>-->
                    
                    </div><!-- fin <row ard> -->
                            </form>
                </div><!-- fin class formulaire -->

            </article><!-- fin <article> Demande de devis --> 
        
        </div><!-- fin <container col ard>-->
           
    
            <?php 
              
                include 'asideRight.html' ; 
            ?>

        </section>
    </main>

<?php 
   
    include 'footer.html' ; 
?>