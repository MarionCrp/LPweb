<?php
  var_dump($prevImdId);
  # Mise en place des deux boutons
  print "<p>\n";
  // pre-calcul de l'image précedente
  print "<a href=\"index.php?controller=PhotoController&action=index&imgId=$prevImgId&size=$size\">Prev</a> ";
  // pre-calcul de l'image suivante
  print "<a href=\"index.php?controller=PhotoController&action=index&imgId=$newImgId&size=$size\">Next</a>\n";
  print "</p>\n";
