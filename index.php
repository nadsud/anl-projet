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
            <a href="#" class="button-first">Découvrez nos services</a>
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
        
        <!--!!!!!!! ne pas mettre d'espaces entre id="attribut" modification css/style.css ligne 630 -->
        <article id="devis-home">
            <a href="devis.php"></a>
        </article>

        <article id="map-home">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2868.0795088176437!2d4.303924415886818!3d44.0404129791099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b449f71498e917%3A0x5e29e429033c803f!2sAUTO%20NEW%20LIFE!5e0!3m2!1sfr!2sfr!4v1581605161878!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </article>
    </section>

<?php 
    // ajout du <footer>
    include 'footer.html' ; 
?>