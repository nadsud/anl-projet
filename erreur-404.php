<?php 
    // ajout du <head>et <header>
    $title = 'page d erreur auto new life';
    $description = 'La page que vous recherez n existe plus ou est en cours de maintenance. Revenez à la page d accueiil pour connaitre nos services carrosserie et peinture dans le Gard.' ;
    include 'header.phtml' ;
?>

<main class="main-base">
        <div class="bg-cover">
            <h1>Page introuvable</h1>
        </div>
        <section class="row max btw">

<?php include 'asideLeft.html' ; ?>

        <article class="col btw container txt-justify ">
            <h2>Oups un petit problème vite résolu !</h2>
                    
            <p><strong>La page demandée n'existe plus ou est en cours de maintenance.</strong><br>
            Veuillez nous excuser pour la gène occassionnée.
            Cliquez sur l'image ci-dessous pour revenir sur la page d'accueil et découvrir tous nos services de carrossier-peintre.    
            
            
            <a href="index.php" alt="revenir page accueil"><img id="banner" src="images/banner-404.png" alt="page accueil">
            </a>
        </article>
            
                  
            
            
 <?php 
               
include 'asideRight.html' ; 
?>

    </section>
</main>
    
<?php 
   
    include 'footer.html' ; 
?>  