<?php 
    // ajout du <head>et <header>
    $title = 'Mécanique auto-vidange-freinage-batterie tous véhicules';
    $description = 'Nous effectuons la petite mécanique indispensable à l entretien de votre voiture : freins, vidange, batterie. Forfaits à partir de 59€ et points fidélité.' ;
    include 'header.phtml' ;
?>
        
    <main class="main-base">
        <div class="bg-cover">
            <h1>Mécanique</h1>
        </div>
        <section class="row max btw">

        <?php 
                include 'asideLeft.html' ; 
            ?>

            <div id="mecaniques" class="container col ard">
                <article class="col btw txt-justify">
                    <h2>La petite mécanique indispensable</h2>
                    <p>Profitez en pour faire réviser votre voiture à l'atelier lors de vos réparations de carrosserie
                        ou simplement par nécessité d'entretien mécanique.</p>
                    <p>Notre atelier est équipé pour vos <strong>réparations mécaniques courantes</strong> :
                        freins, vidanges, changement de filtres, batteries...</p>
                </article>
                
                    
                <article class="col btw">
                    <div class="row ard meca-img">
                        <img src="images/info-vidange.png" alt="picto vidange"><img src="images/pack-vidange.png" alt="image pack vidange">
                    </div>
                    <div class="row ard meca-img">
                        <img src="images/info-freinage.png" alt="picto freins"><img src="images/pack-freinage.png" alt="image pack freinage">
                    </div>
                    <div class="row ard meca-img">
                        <img src="images/info-batterie.png" alt="picto batterie"><img src="images/forfait-batterie.png" alt="image pack batterie">
                    </div>
                </article>

                <article id="controle" class="row btw">
                    <div class="col col-2 txt-justify">
                        <p>Evitez une contre visite à votre contrôle technique !
                        Passez au garage pour faire vérifier les points
                        importants à ne pas négliger pour un CT ok ! 
                        <br>
                        <strong>Les points de rouille</strong> sur carrosserie peuvent
                        être sujets à contre visite. <br>
                        Auto New Life peut rapidement les réparer
                        pour vous épargner ce surcoût !</p>
                    </div>
                    <div class="col col-2 img-full">
                        <img src="images/info-revision.png" alt="image revision auto">
                    </div>
                </article>

                <article class="col btw grey">
                    <h2>Vos Avantages Auto New Life !</h2>
                    <div id="fidelite" class="row btw">
                        <div class="remise-txt col-2 center">
                            <p><span class="big"> 10 prestations mécaniques <br>réalisées</span></p>
                            <p>(vidanges, freins ou batterie)</p>
                            <p><span class="xbig">=</span></p>
                            <p><span class="xbig">- 10%</span><span class="big"> sur la 10°</span></p>
                        </div><!-- badge à droite pour éviter le chevauchement avec le titre -->
                        <div class="remise-img row col-2">
                            <img src="images/fidelite.png" alt="badge carte fidélité">
                            <img src="images/carte fidélité.png" alt="image carte fidélité">
                        </div>
                    </div>
                </article>
            </div>

            <?php 
               
                include 'asideRight.html' ; 
            ?>

        </section>
    </main>

<?php 
    // ajout du <footer>
    include 'footer.html' ; 
?>