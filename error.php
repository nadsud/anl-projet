<?php
switch($_GET['code'])
{
case '404':header('Location: https://www.autonewlife.fr/erreur-404.php');
break;
default:header('Location: https://www.autonewlife.fr/');
}
?>