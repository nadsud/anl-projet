# Projet ANL 
_(Branche develop par vincent caraty)_
## TODO LIST

* page restauration : pop-up au click d'une image pour afficher un aperçu avant/après
* résolution des problème en commentaires dans les fichiers
    * page mécanique : flex remis en ``align-items:center;`` au lieu de ``align-items:flex-start;``
    * page home : fix du lien des devis, détails en commentaire ligne 100 et dans le css ligne 630
* formulaires contact / devis : 
    * regler la largeur max
    * message de confirmation
        * a voir quand on passera au php
    * textarea à vérifier
    * checkbox à vérifier
        * pour la selection du choix de service j'ai mis en place des checkbox, car un ``<select>`` avec des options ne permet pas de choisir plusieurs options; avec un fichier ``checkbox.css`` qui fait une jolie mise en form
* peut être intégrer [PHPMailer](https://github.com/PHPMailer/PHPMailer) pour les envois de formulaire

## explication des commits

### ``11/04`` corrections mise en page code

pages concernées : ``mecanique.html`` , ``index.html`` , ``home.html``, ``devis.html``, ``contact.html``, ``carrosserie.html``, ``about.html``, ~~apropos.html~~

- une page ``home.html`` et une page ``index.html`` sont en place, laquelle doit on garder ?
- page ``apropos.html`` non corrigé car elle est surement à supprimer pour garder ``about.html``
- indentation du code, une tabulation est de 4 espace, les indentations enfants doivent être démarquées des parents.
- balises sémentiques ``</body>`` & ``</html>`` fermées, pour que le code se finisse correctement, sinon les codes navigateur qui se génèrent après peuvent ne pas être interprètés correctement comme l'actualisation des caractère avec accent ``é`` qui devient ``A@`` par exemple ; ainsi que la balise ``<meta charset="UTF-8">`` écrite ``<meta chartet="utf-8">`` chartet / charset
- ordre des feuilles de style, le css perso doit être déclaré en dernier dans le ``<head>`` pour pouvoir 'surcharger' les autres feuilles de styles précédentes, car si une feuille de style est mise après, ce sont ces informations qui seront pris en compte.
- changement de ``&`` en ``&amp;`` dans les liens des feuilles de style, qui peuvent être eux aussi mal interprétés ou même parfois bloqués par le navigateur
- ajout de la feuille de style ``normalize.min.css`` pour normaliser les styles au maximum entre les différents navigateurs
- les balises meta comme celle de description ne se ferment pas ``/``
- la feuille de style ``screen.css`` est absente du projet
- dans certaines pages la feuille de style ``screen.css`` était appelé deux fois dans le head
- dans les pages ``devis.html``, ``contact.html``, ``apropos.html`` rajout de la balise ``<body>``