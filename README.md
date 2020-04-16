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

### ``16/04`` Mise en place des includes répétitifs

pages concernées : ``mecanique.php`` , ``index.php`` , ``home.php``, ``devis.php``, ``contact.php``, ``carrosserie.php``, ``about.php``
pages créées : ``header.html``, ``footer.html``, ``asideRight.html``, ``asideLeft.html``

* Pourquoi des includes ?
    * éviter les répétitions, comme ça lorsque le contenu du ``<header>`` doit être changé, comme le chemin d'un lien par exemple, il sera changé pour toutes les pages.
* Comment ça marche ?
    * il suffit de passer l'extansion d'une page en ``.php`` et elle pourra appeler une partie de page grâce à un ``include`` 

* exemple :

    * J'ai créé le contenu du ``<footer>`` dans le fichier ``footer.html``.
    * (_Le footer est appelé dans toutes les pages_)
    * Toutes les pages on été renomées en ``.php`` au lieu de ``.html``.
    * J'ai ouvert une balise ``php`` pour que le serveur éxécute les commandes qui sont à l'intérieur. ``<?php``  ``?>``
    * et à l'intérieur de la balise ``php`` je fais appel au footer (``footer.html``) ``<?php include 'footer.html' ?>``

* WAMP

Php est un langage serveur, et pour fonctionner correctement il faut qu'il soit lu par un serveur, à la base les pages étaient écritent en html et css qui peuvent être lu par un navigateur directement.
L'utilisation de Wamp est donc nécéssaire en local lorsque l'on travail avec des fichiers contenant du php pour afficher leur contenu correctement

* Divers fixs
    * largeur aside et container, qui occasionnait l'écrasement de l'aside de droite
    * réduction de la taille ``.meca-img`` qui sortait du cadre due au fix précédent

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