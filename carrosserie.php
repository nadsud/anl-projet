<?php 
    // ajout du <head>et <header>
    $title = 'Faites connaissance avec Benjamin BUTTON';
    $description = ' Carrossier/peintre auto polyvalent depuis 15 ans. Notre atelier est la référence dans le Gard sur tous types de réparations de tôle ou plastique automobile. ';
    include 'header.phtml' ;
?>

    <main class="main-base">
        <div class="bg-cover">
            <h1>Carrosserie <span>Peinture</span></h1>
        </div>
        <section class="row max btw">

        <?php 
                // ASIDE LEFT
                include 'asideLeft.html' ; 
            ?>

            <div class="col btw container">
                <article class="col">
                    <h2>Services sur mesure</h2>
                    <p>Chez Auto New Life, on ne fait pas de différence entre un petit ou un gros chantier.
                        L'exigence du résultat reste le même sur un véhicule de collection ou récent.</p>
                    <p>Nous <strong>expertisons gratuitement votre véhicule</strong> et nous nous déplaçons 
                        sur demande pour vos voitures non roulantes ou désossées.</p>
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
                        <div class="arrow"><img src="images/arrow.png" alt=""></div>
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
                    <img  class="width-medium" src="images/peint-ss-solvant.png" alt="">
                </article>
                <article class="row ard badges center">
                    <div class="col-3 center"><img src="images/prix-justes.png" alt=""></div>
                    <div class="col-3 center"><img src="images/qualifie.png" alt=""></div>
                    <div class="col-3 center"><img src="images/fidelite.png" alt=""></div>
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