<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand bestand integer</title>
</head>
<body>

<?php
$bedrag = "€" . 12.50;
echo 'bedrag: ' . $bedrag;
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>
    <label for="hoeveelheid">hoeveelheid:</label><br>
    <input type=number name="hoeveelheid" required placeholder="hoeveelheid">><br><br>
    <input type="submit" name="submit" value="toevoegen" >
</form>
<p>Als je geen action invult wordt het door de pagina verwerkt.</p>

<?php

if ($_POST['submit']) {

    $product = $_POST['product'];
    $hoeveelheid = $_POST['hoeveelheid'];
    $minimaal = 0;
    $maximaal = 15;

    if ($hoeveelheid < $minimaal) { 
        echo "je moet minimaal het getal 1 hebben";
    }
    if($hoeveelheid > $maximaal){
        echo "maximaal moet je het getal 15 hebben";
    }else{
        echo $hoeveelheid . "\n" . $product . "\n" . $bedrag;
    }

}
?>


</body>
</html>