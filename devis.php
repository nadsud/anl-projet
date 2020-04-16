<?php 
    // ajout du <head>et <header>
    include 'header.html' ; 
?>
    
    <main  class = "main-base">
        <div  class ="bg-cover">
            <h1> Devis </h1>
        </div>
        
        <section   class = " row max btw ">

        <?php 
                // ASIDE LEFT
                include 'asideLeft.html' ; 
            ?>

                <div class ="container col ard">
                    
                    <article  class ="col contact-1">
                        
                        <h2> Demande de devis </h2>
                        <p>Formulez votre demande de devis pour vos réparations en carrosserie, peinture ou petite mécanique.
                            <span>Devis gratuit et sans engagement !</span>
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
                        <p><span>Vous ne pouvez déplacer votre véhicule ?</span> (auto non roulante ou en pièces). 
                            Nous nous déplaçons sur rendez-vous dans un rayon de 30km autour de Foissac (30700).</p>
                    </article>
                            
                    <article  class ="col-4">
                        <h2> Formulaire de devis</h2>
                        <p><em>Informations relatives aux données collectées :Les informations recueillies sur ce formulaire sont 
                            enregistrées dans un fichier informatisé par Auto New Life  à des fins de communication uniquement 
                            suite à votre demande de devis ou toute autre demande d'informations.
                            Les données collectées seront communiquées aux seuls destinataires suivants : Auto New Life.
                            Les données sont conservées pendant la durée du traitement de votre demande  et ne seront nullement utilisées à des fins commercialesou 
                            transmises à des tiers.Vous pouvez accéder aux données vous concernant, les rectifier, 
                            demander leur effacement ou exercer votre droit à la limitation du traitement de vos données par simple demande.</em></p>   
        
                        <div class="formulaire">
                            <div class="form">
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <input type="text" required />
                                        <label>Nom et Prénom</label> 
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input">
                                        <input type="text" required />
                                        <label>Email</label> 
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="styled-input" style="float:right;">
                                        <input type="text" required />
                                        <label>Téléphone</label> 
                                    </div>
                                </div>
                                    
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <input type="text" required />
                                        <label for="type">Type de véhicule (modèle, marque...)</label> 
                                    </div>
                                </div>
                                
                                <div class="col-xs-12">
                                        
                                    <div class="center">	
                                        <p>-Choisissez le service-</p>
                                        <div class="row ard">
                                            <input class="inp-cbx" id="carrosserie" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="carrosserie"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Carrosserie</span></label>

                                            <input class="inp-cbx" id="peinture" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="peinture"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Peinture</span></label>

                                            <input class="inp-cbx" id="mecanique" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="mecanique"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Mécanique</span></label>

                                            <input class="inp-cbx" id="autre" type="checkbox" style="display: none;"/>
                                            <label class="cbx" for="autre"><span>
                                                <svg width="12px" height="9px" viewbox="0 0 12 9">
                                                    <polyline points="1 5 4 8 11 1"></polyline>
                                                </svg></span><span>Autre</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="styled-input wide">
                                        <textarea name="message" cols="60" rows="10" required></textarea>
                                        <label>Détaillez votre demande</label>
                                    </div>
                                </div>
                                
                                <div class="col-xs-12">
                                    <div class="btn-lrg submit-btn">Envoyer</div>
                                </div>
                            </div><!-- fin <form> -->
                        </div><!-- fin class formulaire -->

                    </article><!-- fin <article> Demande de devis --> 
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