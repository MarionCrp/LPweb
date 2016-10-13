<?php

# Test unitaire
# Appeler le code PHP depuis le navigateur avec la variable test
# Exemple : http://localhost/PHP_TP01/model/imageDAO.php?test
require_once("model/image.php");
require_once("model/imageDAO.php");


echo "<H1>Test de la classe ImageDAO</H1>";
$imgDAO = new ImageDAO();
echo "<p>Creation de l'objet ImageDAO.</p>\n";
echo "<p>La base contient ".$imgDAO->size()." images.</p>\n";
$img = $imgDAO->getFirstImage("");
echo "La premiere image est : ".$img->getURL()."</p>\n";
# Affiche l'image
echo "<img src=\"".$img->getURL()."\"/>\n";

var_dump("id précédent : ".$imgDAO->getPrevImage($img)->getId());
var_dump("id actuel : ".$img->getId());
var_dump("id suivant : ".$imgDAO->getNextImage($img)->getId());
var_dump("id + 5 images : ".$imgDAO->jumpToImage($img, 5)->getId());
