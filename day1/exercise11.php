Exercise 01 
<br/>
<?php

$name = "Alex";
$age = 25;

echo 'Alex', $age;

?>

<br/>
<br/>
Exercise 02
<br/>

<?php

$price = "19.99";
$quantity = 12;
$total = $price * $quantity;

echo $total;

?>

<br/>
<br/>
Exercise 03
<br/>

<?php

$name = "Halil";
$age = 27;
$job = "développeur";

echo "Je m’appelle ", $name, ", j'ai ", $age, " ans et je suis ", $job, ".";

?>

<br/>
<br/>
Exercise 04
<br/>

<?php

$str = "Hello World !";
$i = 0;

while ($i < strlen($str)) {
    echo $str[$i], " ";
    $i++;
}

?>

<br/>
<br/>
Exercise 05
<br/>

<?php

$str = "abcdefghijklmnopqrstuvwxyz";
$i = 0;

while ($i < strlen($str)) {
    if ($i % 2){
    echo $str[$i], " ";
    }
    $i++;
}

?>

<br/>
<br/>
Exercise 06
<br/>

<?php

$str = "abcdefghijklmnopqrstuvwxyz";
$i = strlen($str)-1;

while ($i >= 0) {
        echo $str[$i];
        $i--;
    }

?>

<br/>
<br/>
Exercise 07
<br/>

<?php

for ($i = 0; $i <= 10; $i++) {
    $result = 7 * $i;
    echo "7 x $i = $result <br/>";  
}

?>

<br/>
<br/>
Exercise 08
<br/>

<?php

$colors = array("bleu", "rouge", "jaune");

foreach ($colors as $value){
    if ($value === "bleu"){
        echo "La couleur préférée de Louis est le $value <br/>";
    }
    elseif ($value === "rouge"){
        echo "Pour sa peinture, Andrée a utilisé du $value <br/>";
    }
    else{
        echo "Anis n'a pas de chemise $value <br/>";
    }
}

?>

<br/>
<br/>
Exercise 09
<br/>

<?php

$numbers = array(21565, 3412, 180,
1556, 182, 84, 15);

foreach ($numbers as $nb){
    if ($nb % 3){
        echo "$nb ,";
    }
}

?>