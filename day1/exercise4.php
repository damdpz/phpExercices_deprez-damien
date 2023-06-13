Écrivez une variable appelée « str » qui a pour valeur « Hello World ! ». Il en faudra également
une nommée « i » qui sera égale à 0.
Vous devez utiliser une boucle while() qui va vérifier que $i est strictement inférieur à la longueur de $str. Vous afficherez les caractères de $str un à un, séparés par un caractère espace, et incrémenterez $i de 1 à chaque fois.
Attention : Faites attention à ne pas afficher le caractère qui marque la fin de la chaîne de caractères. Aussi, la fonction strlen() peut vous être utile pour calculer la longueur de $str.

<br/>
Exercise 4 :
<br/>
<?php
$str = "Hello World !";
$i = 0;

while ($i < strlen($str)) {
  echo $str[$i]. " ";
  $i++;
}
?>