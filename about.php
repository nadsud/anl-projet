<?php 
    // ajout du <head>et <header>
    $title = 'Faites connaissance avec Benjamin BUTTON';
    $description = ' Carrossier/peintre auto polyvalent depuis 15 ans. Notre atelier est la référence dans le Gard sur tous types de réparations de tôle ou plastique automobile. ';
    include 'header.phtml' ;
?>

    <main class="main-base">
        <div class="bg-cover">
            <h1>À Propos</h1>
        </div>

        <section class="row max btw">

        <?php 
                // ASIDE LEFT
                include 'asideLeft.html' ; 
            ?>

            <div class="col btw container">
                <div id="about" class="row btw">
                    <article class="col btw col-2 txt-justify">
                        <h2>L'art de la carrosserie</h2>
        
                        <p>Passionné du domaine de l’automobile, de la <strong>restauration de voitures
                        de collection aux vehicules plus récents</strong>, Auto New Life est vôtre
                        garage de référence dans le Gard, à 10km d'Uzès..</p>
                        <p>En carrossier principal et fort de 15ans d'expérience, Fabien répond à vos
                        besoins de réparation de carrosserie sur toutes voitures, quelque soit sa
                        marque et son modèle. En véritable artisan, ses métodes de travail restent
                        traditionnelles et dans le respect des matières que constituent une
                        carrosserie automobile.</p>
                        <p class="center"><em>Toucher, caresser, inspecter, voir, sentir...<br />
                        Fabien considère les véhicules confiés comme "des oeuvres d'art uniques"</em></p>
                        <div class="row">
                            <div class="col col-2 btw img-full"><img src="images/rayure_carrosserie.jpg" alt=""></div>
                            <div class="col col-2 btw img-full"><img src="images/repare_carrosserie.jpg" alt=""></div>
                        </div>
                    </article>
                    <article class="col col-2 btw txt-justify">
                        <h2>Dans les règles de l'art </h2>
        
                        <p>Notre clientèle exigente, faite de passionnés, sait
                        trouver dans notre atelier une solutions adaptée à ses
                        besoins pour les petites réparations (<strong>rayures de
                        carrosserie, éraflures, petites bosses...</strong>) ou
                        réparations plus conséquentes liées à la structure du
                        véhicule ( <strong>réfection de tôle, redressage,
                        remplacement et remodelage de pièces,
                        soudures ....</strong>) tout en se conformant aux
                        recommandations constructeur.</p>

                        <p>Petits bobos ou grosses réparations, la même
                        attention est donné aux véhicules confiés.</p>

                        <p>L'entretien et la remise en état d'une carrosserie de
                        voiture est essentielle pour la sécurité et l'esthétique.
                        Une simple rayure ou écaillement de peinture peut
                        détériorer rapidement la carrosserie par la corosion.</p>

                        <p><span class="text-orange">Plus vite vous agirez pour faire réparer ces
                        rayures et plus le travail de carrosserie sera
                        rapide et à moindre frais !</span></p>
                    </article>
                </div>
                <article class="txt-justify">
                    <h2>Un atelier polyvalent</h2>
                    
                    <p>Auto New Life utilise plusieurs méthodes de <strong>débosselage de carrosserie</strong> selon l'importance des
                    bosses et leur déformation. Par l'extérieur ou l'intérieur de la carrosserie, le débosselage est une
                    manoeuvre délicate qui requière la technique d'un professionnel. Nous garantissons un diagnostic
                    méticuleux et nous vous apporterons la meilleure solution selon votre besoin et budget.</p>
                    <p>Notre savoir faire s'étend aux <strong>réfections plastiques et la personnalisation de votre
                    carrosserie auto</strong> >> en savoir plus sur l'esthétique autombile et la rénovation de peinture auto.</p>
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