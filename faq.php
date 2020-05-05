<?php 
    // ajout du <head>et <header>
    $title = 'Questions féquentes :carrosserie, peinture, assurance...';
    $description = 'Trouvez  les réponses à vos questions les plus fréquentes sur les réparations de carrosserie, la prise en charge assurance et nos services Auto New Life.' ;
    include 'header.phtml' ;
?>
        
<main class="main-base">
    <div class="bg-cover">
        <h1>FAQ</h1>
    </div>
    <section class="row max btw">
    
		<?php 
			
			include 'asideLeft.html' ; 
		?>

		<div class="container col ard">

			<h2>Questions fréquentes</h2>
					<p><span>Une question à nous poser ?</span></p><br>
					<p>Utilisez le <a href="contact.php" alt="formulaire de contact">formulaire de contact</a> ou adressez votre question par mail : <a href="mailto:autonewlife.contact@gmail.com">autonewlife.contact@gmail.com</a></p>

			<div class="question">
				<div class="question-item">
					<a>Etes-vous affilié avec des assurances ?</a>
					<div class="answer">
						<p>Nous gérons pour vous tous les dossiers quelque soit votre assureur. Nous ne sommes pas affilié à une assurance en particulier mais travaillons régulièrement avec les plus grandes compagnies françaises. Nous prenons également en charge tous vos travaux de carrosserie si vous ne désirez pas déclarer le sinistre à votre assurance.
						<em>Depuis la loi n°2014-344 du 17 mars 2014, l’assuré est libre de choisir le réparateur professionnel auquel il souhaite recourir.</em></p>
						
					</div>
				</div>
				<div class="question-item">
					<a>Quelles sont vos garanties sur les réparations ?</a>
					<div class="answer">
						<p>Nos travaux sont garantis pièces et main d’œuvre et fournitures, à compter de la date de facturation : 24 mois pour les véhicules de moins de 5 ans d’âge, 12 mois pour les véhicules de plus de 5 ans d’âge, 6 mois si les réparations ont été effectuées avec des pièces de réemploi (d'occasion). Notre garantie se limite à fournir la main œuvre et/ou les pièces et fournitures nécessaires à la réfections des travaux effectivement réglés.Nos conditions sont valables pour les pièces dans la limite de la garantie des fabricants. Les pièces d’usures ou celles dont le remplacement est prévu périodiquement ne sont pas couvertes, de même que les détériorations dues à de la négligence, au défaut d’entretien ou provoquées accidentellement.
        N'hésitez pas à demander nos CGV pour en savoir plus.</p>
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
							<p>Pour le moment, nous acceptons les règlements par chèque (avec carte d'identité), virement ou espèces. Le paiement par carte bancire sera disponible  prochainement.</p>
						</div>
					</div>
				
					<div class="question-item">
					<a>Que signifie le "débosselage" ?</a>
						<div class="answer">
							<p>Le débosselage est l'action d'enlever les bosses dû à la grêle, coups de portières ou autres impacts.Cette technique est souvent réalisée sans peinture (DSP). On redresse donc ces impacts grâce à un tire-clou sans avoir besoin de changer la pièce, de la poncer ou de la peindre.Le DSP ne peut cependant parfois pas être réalisé sur de gros impacts qui nécessiteraient de plus grosses réparations. Votre conseiller Auto New Life est là pour réaliser un diagnostic.
        >> <a href="contact.php">Prenez rendez-vous</a></p>
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
			
				include 'asideRight.html' ; 
			?>

		</section>
	</main>
	
<?php 
 
    include 'footer.html' ; 
?>