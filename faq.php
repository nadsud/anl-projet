<?php 
    // ajout du <head>et <header>
    $title = 'Faites connaissance avec Benjamin BUTTON';
    $description = ' Carrossier/peintre auto polyvalent depuis 15 ans. Notre atelier est la référence dans le Gard sur tous types de réparations de tôle ou plastique automobile. ';
    include 'header.phtml' ;
?>
        
<main class="main-base">
    <div class="bg-cover">
        <h1>FAQ</h1>
    </div>
    <section class="row max btw">
    
		<?php 
			// ASIDE LEFT
			include 'asideLeft.html' ; 
		?>

		<div class="container col ard">

			<h2>Questions fréquentes</h2>
					<p><span>Une question à nous poser ?</span></p><br>
					<p>Utilisez le formulaire de contact ou adressez votre question par mail : contact.autonewlife@gmail.com</p>

			<div class="question">
				<div class="question-item">
					<a>Etes-vous affilié avec des assurances ?</a>
					<div class="answer">
						<p>Nous gérons pour vous tous les dossiers quelque soit votre assureur. Nous ne sommes pas affilié à une assurance en particulier mais travaillons régulièrement avec toutes les plus grandes compgnies françaises. Nous prenons également en charge tous vos travaux de carrosserie si vous ne désirez pas déclarer le sinistre à votre assurance.
						<em>Depuis la loi n°2014-344 du 17 mars 2014, l’assuré est libre de choisir le réparateur professionnel auquel il souhaite recourir.</em></p>
						
					</div>
				</div>
				<div class="question-item">
					<a>Quelles sont vos garanties sur les réparations ?</a>
					<div class="answer">
						<p></p>
					</div>
				</div>
				
				<div class="question-item">
					<a>Pouvez-vous vous déplacer à mon domicile pour un devis ?</a>
					<div class="answer">
						<p>Nous nous déplaçons dans un rayon de 30 km autour de Foissac (30700) pour les voitures non roulantes ou en pièces détachées. Pas d'inquitétude si vous ne pouvez pas vous déplacer quelle qu'en soit la raison, nous viendrons avec plaisir sur rendez-vous</p><br>
						<p><a href="rdv.html">Prenez rendez-vous dès maintenant pour un devis gratuit</a></p>
						
					</div>
				</div>
				<div class="question-item">
					<a>Utilisez-vous des pièces de remplacement d'origine ?</a>
					<div class="answer">
						<p>Oui, nous remplaçons les pièces de votre carrosserie avec des pièces d'origine suivant les recommandations et caractéristiques constructeur.C'est souvent le cas pour ds voitures neuves ou des véhicules decollection. <br>Cependant, à compter du 1er avril 2019, nous avons l'obligation d'informer nos clients sur la possibilité de remplacer les pièces défectueuses par des pièces détachées d'occasion issues de l'économie circulaire (PIEC, soit des pièces recyclées ou reconditionnées).<br> Vous restez donc libre d'accepter ou de refuser les pièces d'occasion.C'est une bonne alternative afin de respecter votre budget !</p>
					</div>
				</div>
				
				<div class="question-item">
					<a>Quels documents dois-je vous fournir pour les réparations ?</a>
					<div class="answer">
						<p>Il nous faut dans l'idéal :
							<ul>
								<li>La carte grise du véhicule</li>
								<li>Votre permis de conduire</li>
								<li>Attestation d'assurance (si vous passez par votre assurance)</li>
								<li>Constat amiable (si vous ne l’avez pas encore fait parvenir à votre assureur)</li>
							</ul>
						</p>
					</div>
				</div>
				
					<div class="question-item">
					<a>Quels moyens de paiement acceptez-vous?</a>
						<div class="answer">
							<p>Pour le moment, nous acceptons les règlements pas chèque (avec carte d'indentité), virement ou espèces. Le paiement par carte bancire sera disponible  prochainement.</p>
						</div>
					</div>
				
					<div class="question-item">
					<a>Que signifie le "débosselage" ?</a>
						<div class="answer">
							<p>jflzkqhjlsgvhljeaghjvhaerlkgj jkargvhlrnekjg kjlaezjmgkvnrmjlegl jkefkarlgnjmlkkareljgaerk</p>
						</div>
					</div> 
				
					<div class="question-item">
						<a>Acceptez-vous les paiements en plusieurs fois ?</a>
						<div class="answer">
						<p>Nos conditions de règlement exige un acompte de 30% de la commande au départ des travaux. Pour le solde, nous acceptons (suivant le montant) des règlement en 2 ou 3 fois sans frais (excepté d'éventuels frais liés à des retards de règlement à échéance prévue). Les règlements en plusieurs fois se font par prélèvement ou virement bancaire avec un écchelonnement sur 3 mois maximum.</p>
						</div>
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