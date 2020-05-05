<?php 
    // ajout du <head>et <header>
    $title = 'Débosselage-réparation éraflures-impacts-peinture auto';
    $description = 'Venez faire expertiser gratuitement votre auto avant réparation de carrosserie ou peinture. Réfection d impact, rouille, optique... Remplacement par pièces neuves ou d occasion.' ;
    include 'header.phtml' ;
?>

    <main class="main-base">
        <div class="bg-cover">
            <h1>Carrosserie <span>Peinture</span></h1>
        </div>
        <section class="row max btw">

        <?php 
            
                include 'asideLeft.html' ; 
            ?>

            <div class="col btw container">
                <article class="col txt-justify">
                    <h2>Services sur mesure</h2>
                    <p>Chez Auto New Life, on ne fait pas de différence entre un petit ou un gros chantier.
                        L'exigence du résultat reste le même sur un véhicule de collection ou récent.</p>
                    <p>Nous <strong>expertisons gratuitement votre véhicule</strong> et nous nous déplaçons 
                        sur demande pour vos voitures non roulantes ou désossées.<br>Faire appel à un carrossier professionnel c'est l'assurance d'avoir un diagnostic approfondi des réparations sur éléments non visibles à l'oeil nu. </p>
                    <p>Que ce soit pour des <strong>réparations de carrosserie ou réfection de peinture</strong>,
                        on ne changera que ce qui est nécessaire et en fonction de votre budget.</p>
                    <div class="list-col-2">
                        <ul>
                            <li>Bosses</li>
                            <li>Éraflures</li>
                            <li>Impacts</li>
                            <li>Redressage de tôle</li>
                            <li>Débosselage avec ou sans peinture</li>
                        </ul>
                        <ul>
                            <li>Jantes</li>
                            <li>Phares et optiques</li>
                            <li>Pièce d'origine ou d'occasion</li>
                            <li>Vitrage</li>
                        </ul>
                    </div>
                </article>
                <article id="cata" class="col">
                    <h2>Éviter la cata !</h2>
                    <p>Que vous possédiez une voiture ancienne de collection ou un véhicule plus récent,<br>
                        faire entretenir la carrosserie de votre auto peut vous éviter bien des tracas.</p>
                        <div class="arrow"><img src="images/arrow.png" alt="image fleche"></div>
                    <ul class="list-tiret">
                        <li>Éviter une baisse importante du prix lors de la revente</li>
                        <li>Éviter une contre visite lors du contrôle technique</li>
                        <li>Éviter la corrosion qui rendrait le coût des réparations plus important</li>
                        <li>Éviter les problèmes de sécurité</li>
                    </ul>
                </article>
                <article id="peinture" class="col">
                    <h2 class="green"><i class="fas fa-star"></i> Le peintre Auto New Life <i class="fas fa-star"></i></h2>
                    <ul class="list-big-point">
                        <li>Peinture complète ou partielle(pare-choc, ailes, portières, capots...)</li>
                        <li>Peinture brillante, mate ou nacrée (peinture référence constructeur)</li>
                        <li>Peinture spéciale 4x4 anti-rayures</li>
                    </ul>
                </article>
                <article id="ss-solvant" class="row ard">
                    <img  class="width-medium" src="images/paint-banner.png" alt="image peinture ecologique">
                </article>
                
                
                <article id="paint-img" class="row ard">
                <img src="images/jantes-noir-nacre.jpg" alt="photo jantes noires" >
                
                </article>
               
                <article class="row ard badges center">
                    <div class="col-3 center"><img src="images/prix-justes.png" alt="badge prix justes"></div>
                    <div class="col-3 center"><img src="images/qualifie.png" alt="badge qualité"></div>
                    <div class="col-3 center"><img src="images/fidelite.png" alt="badge carte fidélité"></div>
                </article>
            </div>

            <?php 
              
                include 'asideRight.html' ; 
            ?>

        </section>
    </main> 

<?php 
  
    include 'footer.html' ; 
?>