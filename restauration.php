<?php 
    // ajout du <head>et <header>
    $title = 'Restauration auto yougtimers-véhicules anciens et neufs';
    $description = ' Passionné et spécialiste en restauration de youngtimers et autos anciennes. Découvrez en images nos plus belles rénovations auto toutes marques : 205 Rallye,Jeep CJ... ';
    include 'header.phtml' ;
?>
        
<main class="main-base">
    <div class="bg-cover">
        <h1>Restauration</h1>
    </div>
    <section  class="row max btw">
        
            
        <?php 
            // ASIDE LEFT
            include 'asideLeft.html' ; 
        ?>  

        <div class="container col ard">
            <article class="col resto-1 txt-justify">
                <h2>Restauration des anciennes</h2>
                <p><span></span>
                    L'une des principales raison qui m'a amené à faire ce métier
                    est la <strong>passion des voitures anciennes</strong>. <br>
                    <strong>Voitures de collection ou youngtimers</strong>, elles procurent
                    un plaisir immense de conduite en toute liberté que tous
                    passionné recherche. C'est un héritage à conserver, que l'on
                    soit collectionneur ou non. <br>Vous êtes de plus en plus nombreux a utiliser vos ancienns au quotidien. Son entretien est un budget et c'est pourquoi il est necessaire de faire appel à un spécialiste comme Auto New Life qui connait bien ces voitures et pourra trouver des pièces et solutions adaptées.<br><br>Notre carrosserie dispose de tous les outils et savoir-faire pour
                    restaurer vos <strong>autos anciennes</strong>, des plus vieilles au plus récentes,
                    quelque soit la marque. <br>
                    Parmi nos plus vibrantes <strong>rénovations de vehicules</strong>, voici un petit aperçu des chantiers
                    réalisés ou en cours.</p>
            </article>
            <article class="col ">
                <h2>Restaurations réalisées</h2>
                <!-- images de base
                    images/205-rallye-restauration.png
                    images/restauration-mercedes.png
                    images/restauration-autiTT.png
                -->
                <div class="effect-box">
                    <div class="box">
                        <h3>205 Rallye 1989</h3>
                    </div>   
                
                    <div class="box">
                        <h3>Mercedes E200 1995</h3>
                    </div>
                    <div class="box">
                        <h3>Audi TT 1995</h3>
                    </div>
                </div>
<div class="accordion-container">
    <div class="accordion clearfix">
        <div class="accordion-item-container">
            <div class="accordion-item-content">
                <div class="accordion-item-image">
                    <img src="images/205-rallye-restauration_1.png" />
                </div>
                <div class="accordion-item-info">
                    <img src="images/205-rallye-restauration_2.png" />
                </div>
            </div>
        </div>
        <div class="accordion-item-container">
            <div class="accordion-item-content">
                <div class="accordion-item-image">
                    <img src="images/restauration-mercedes_1.png" />
                </div>
                <div class="accordion-item-info">
                    <img src="images/restauration-mercedes_2.png" />
                </div>
            </div>
        </div> 
        <div class="accordion-item-container">
            <div class="accordion-item-content">
                <div class="accordion-item-image">
                    <img src="images/restauration-autiTT_1.png" />
                </div>
                <div class="accordion-item-info">
                    <img src="images/restauration-autiTT_2.png" />
                </div>
            </div>
        </div>
    </div>
</div>




                
                <div>
                    <h3>Jeep CJ5 1965</h3>
                    <img src="images/jeep-cj5.png" alt="image jeep cj5">
                </div>
                
            </article>
            
            <article>
                <h2>Restaurations en cours</h2>
                <div class="resto-2 btw">
                    <div>
                        <h3>Austin Mini 1969</h3>
                        <img src="images/mini.jpg" alt="image austin mini">
                    </div>
                    <div>
                        <h3>Daimler DS420</h3>
                        <img src="images/daimler_ds240.png" alt="images daimler">
                    </div>
                    <div>
                        <h3>Votre véhicule</h3>
                        <img src="images/cocc.png" alt="immage coccinelle">
                    </div>
                </div>
            </article>
          
        
            <div class="txt-justify">
                <h2>Un projet de rénovation ?</h2>
                <P>Sans engagement, nous pouvons nous déplacer dans un rayon de 30 km autour de Foissac pour vos projets de restauration sur voiture complète ou partielle et/ou non roulante.
                Dans d'autres cas, nous serions heureux de vous accueillir au garage pour diagnostiquer ensemble l'état de vôtre véhicule.</P>
                <p><strong>Nous sommes affiliés à plusieurs assurances pour une prise en charge rapide des réparations.</strong></p>
                
                <div class="text-bigger-3">
                    <p><i class="fas fa-angle-double-right"></i><a href="contact.php" class="txt-underline"> Contactez nous par votre moyen favori pour toute demande</a></p>
                </div>
            </div>
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