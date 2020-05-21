<?php 
    // ajout du <head>et <header>
    $title = 'Carrosserie peinture auto dans le Gard-Auto New Life';
    $description = ' Offrir peau neuve à votre véhicule récent ou ancien est notre spécialité. Découvrez tous nos services sur mesure en carrosserie-peinture affilié toutes assurances';
    include 'header.phtml' ;
?>

<!--BANDEAU MAIN /PRESENTATION-->
    <main class="main-center bg">
            
        <section id="titles">
            <h1>Offrez une nouvelle vie à votre véhicule !</h1>
            <div class="second-title">- Véhicules récents ou anciens - </div>
        </section>
        
        <section id="discover">
            <a href="about.php" class="button-first">Découvrez notre atelier</a>
        </section>
        
        <section id="services">
            <article>
                <h3>Carrosserie</h3>
                <div>
                    <a href="carrosserie.php"><img src="images/carrosserie_30.png" alt="nos services carrosserie peinture"></a> 
                </div>
            </article>
            
            <article>
                <h3>Mécanique</h3>
                <div>
                    <a href="mecanique.php"><img href="mecanique.php" src="images/mecanique-auto-71.png" alt="nos services mécanique"></a>
                </div>
            </article>
            
            <article>
                <h3>Restauration</h3>
                <div><a href="restauration.php">
                    <img href="restauration.php" src="images/restauration-auto.png" alt="nos services restauration"></a>
                </div>
            </article>
        </section>
        
    </main>

<!--BANDEAU 2 : RESTAURATION EN COURS-->

<section id="second" class="row max btw">
  
    <article id="realisations" class="row btw">
                <div id="block-image" class="col">
            <div class="row">
                <div class="col wrapper img-1 ard">  
                    <img src="images/jeepcj5-second%20(2).png" alt="jeepcj5" class="cj5image">
                    <div class="overlay">
                        <div class="texte">Jeep CJ5<br>de 1983<br><br><a href="restauration.php" alt="page restauration" style="font-size:1.7rem; color:black;" target="_blank">Voir la restauration</a></div> 
                    </div>
                </div>  

                <div class="col" id="wrapper-col">
                    <div class="wrapper img-2">
                        <img src="images/mercedes-second.png" class="E200image">
                        <div class="overlay" id="overlay-2">
                            <div class="texte">Mercedes E200<br>de 1993<br><a href="restauration.php" alt="page restauration" style="font-size:1.7rem; color:black;" target="_blank">Voir la restauration</a></div>    
                        </div> 
                    </div>
            
                    <div class="wrapper img-3">
                        <img src="images/205rallye-second%20(1).png" class="rallyeimage">
                        <div class="overlay" id="overlay-3">
                            <div class="texte">205 Rallye<br>de 1988<br><a href="restauration.php" alt="page restauration" style="font-size:1.6rem; color:black;" target="_blank">Voir la restauration</a></div>    
                        </div>
                    </div>
                </div> 
                </div>
        </div>
        
        <div id="block-text" class="col">
            <h2 class="green">Les restaurations en cours</h2>
            <p>Auto New Life est un atelier de carrossiers-peintres automobiles passionnés de tous les véhicules neufs ou anciens. C'est aussi un spécialiste des youngtimers et auto anciennes.<br><br>
                <span>Confiez nous votre voiture, nous lui redonnons une seconde vie !</span><br><br>
                Rejoignez les clients qui nous font confiance pour la réparation de petites rayures, débosselage... ou grosse restauration.
            </p>
            <a href="/restauration.html" class="button-first" alt="bouton page restauration">Découvrez nos restaurations</a>
        </div>


    </article>
    
    <div class="aside-screen">
        
     <div class="screen-atelier">
        
        <a href="about.php" class="button-screen" alt="bouton page a propos">Découvrez notre atelier</a>
        <img src="images/jeepcj5-second%20(2).png"> 
    </div>
    
    <div class="screen-rdv">
        <img src="images/auto-aside-right.png"> 
        <a href="contact.php" class="button-screen" alt="bouton page rdv">Je prends RDV</a>
    </div>
    
    <div class="screen-devis">
        <a href="devis.php" class="button-screen" alt="bouton page devis">Je demande un devis</a>
        <img src="images/logo-anl-sm.png"> 
    </div>
 
    </div>
    
</section>	
    

<!--MAIN-ASIDE : INFOS-->

    <section class="main-aside">
        
        <article id="contact-home">
                <h2>Restons en contact</h2>
                <p>Auto New Life</p>
                <p>Za de Lacré - 30700 FOISSAC</p>
                <p><i class="fas fa-phone-alt"></i>06 33 35 33 61</p>
                <p><a href="mailto:autonewlife.contact@gmail.com" class="txt-underline">autonewlife.contact@gmail.com</a></p>
                <p><a class="txt-underline" href="/contact.php" alt="contact"><i class="fas fa-envelope"></i>FORMULAIRE DE CONTACT</a></p>
        </article>
        
        
        <article id="devis-home">
            <a href="devis.php"><img src="images/devis-garage.png" alt="image demande de devis"></a>
        </article>

        <article id="map-home">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2868.0795088176437!2d4.303924415886818!3d44.0404129791099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b449f71498e917%3A0x5e29e429033c803f!2sAUTO%20NEW%20LIFE!5e0!3m2!1sfr!2sfr!4v1581605161878!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </article>
    </section>

<section id="member" class="row btw">
   <div id="fed" class="row btw">
      <a href="http://www.ffc-carrosserie.org/" alt="site ffc" target="_blank"><img src="images/ffc-logo.png" alt="federation francaise de carrosserie"></a> 
        <p>Auto New Life est membre de la Fédération Française de Carrosserie.
        <br>Elle garantie le savoir-faire et l’excellence technique des professionnels de la carrosserie française.
       </p>
    </div> 
</section> 

<?php 
   
    include 'footer.html' ; 
?>