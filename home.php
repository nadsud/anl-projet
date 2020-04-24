<?php 
    // ajout du <head>et <header>
    include 'header.html' ; 
?>
	
<!--BANDEAU MAIN /PRESENTATION-->
<main class="main-center bg">
		
    <section id="titles">
        <h1>Offrez une nouvelle vie à votre véhicule !</h1>
        <div class="second-title">- Véhicules récents ou anciens - </div>
    </section>
    
    <section id="discover">
        <a href="/about.html" class="button-first">Découvrez notre atelier</a>
    </section>
    
    <section id="services">
        <article>
            <h3>Carrosserie</h3>
            <div>
                <a href="/carrosserie.html"><img src="images/carrosserie_30.png" alt="nos services carrosserie peinture"></a> 
            </div>
        </article>
        
        <article>
            <h3>Mécanique</h3>
            <div>
                <a href="/mecanique.html"><img href="/mecanique.html" src="images/mecanique-auto-71.png" alt="nos services mécanique"></a>
            </div>
        </article>
        
        <article>
            <h3>Restauration</h3>
            <div> 
                <a href="/restauration.html">
                <img href="/restauration.html" src="images/restauration-auto.png" alt="nos services restauration"></a>
            </div>
        </article>
    </section>
    
</main>
    
<section id="second" class="row max btw">
    <article id="realisations" class="row btw">
        <div class="wrapper">  
            <img src="images/jeepcj5-second%20(2).png" alt="jeepcj5" class="cj5image">
            <div class="overlay">
                <div class="texte">Jeep CJ5</div> 
            </div>
        </div>  

        <div class="col">      
            <div class="wrapper">  
                <img src="images/mercedes-second.png" class="E200image">
                <div class="overlay">
                    <div class="texte">Mercedes E200</div>    
                </div> 
            </div>
    
            <div class="wrapper">    
                <img src="images/205rallye-second%20(1).png" class="rallyeimage">
                <div class="overlay">
                    <div class="texte">205 Rallye</div>    
                </div>
            </div>
        </div> 
        
        <div id="block-text" class="col-1">
            <h2 class="green">Les restaurations en cours</h2>
            <p>Auto New Life est un atelier de carrossiers passionnés de tous les véhicules neufs ou anciens. C'est aussi un spécialiste des youngtimers et auto anciennes.<br><br>
                <span>Confiez nous votre voiture, nous lui redonnons une seconde vie !</span><br><br>
                Rejoignez les clients qui nous font confiance pour la réparation de petites rayures, débosselage... ou grosses restauration.
            </p>
            <a href="/restauration.html" class="button-first">Découvrez nos restaurations</a>
        </div>
    </article>    
    
</section>	

		
<!--MAIN-ASIDE : INFOS-->
	
<section class="main-aside">
    
    <article id="contact-home">
        <h2>Restons en contact</h2>
        <p>Auto New Life</p>
        <p>Za de Lacré - 30700 FOISSAC</p>
        <p><i class="fas fa-phone-alt"></i>06 33 35 33 61</p>
        <p><a href="mailto:autonewlife.contact@gmail.com" class="txt-underline">autonewlife.contact@gmail.com</a></p>
        <p><a class="txt-underline" href="/contact.html"><i class="fas fa-envelope"></i>FORMULAIRE DE CONTACT</a></p>
    </article>
    
    <article  id="devis-home"> 
        <a href="devis.html"></a>
    </article>
    
    <article id="map-home">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2868.0795088176437!2d4.303924415886818!3d44.0404129791099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b449f71498e917%3A0x5e29e429033c803f!2sAUTO%20NEW%20LIFE!5e0!3m2!1sfr!2sfr!4v1581605161878!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </article>
</section>

<section id="member" class="row btw">
    <div id="fed" class="row btw">
        <a href="http://www.ffc-carrosserie.org/" title="federation francaise de carrosserie" target="_blank" alt="site ffc"><img src="images/ffc-logo.png" alt="federation francaise de carrosserie"></a> 
        <p>Auto New Life est membre de la Fédération Française de Carrosserie.
        <br>Elle garantie le savoir-faire et l’excellence technique des professionnels de la carrosserie française.
        </p>
    </div> 
</section> 

<?php 
    // ajout du <footer>
    include 'footer.html' ; 
?>