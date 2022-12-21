<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Winkelmand week3</title>
</head>

<body>

    <?php
    $dagtotaal = array();
    $prijzen = array(
        'chocola' => 1.25,
        'snoepgoed' => 2.75,
        'blikje frisdrank' => 2.25,
        'gevulde koek' => 1.75,
        'Lahmacun' => 3.25,
        'Doner' => 3.25


    );

    var_dump($prijzen);
    ?>

    <h2>Winkelmand</h2>
    <form action="winkelmand.php" method="post">
        <label for="product">Product:</label><br>
        <input type="text" name="product" required placeholder="product"><br>

        <label for="aantal">Aantal:</label><br>
        <input type=number name="aantal" required placeholder="aantal" min="<?php echo 1 ?>" max="<?php echo 15 ?>"><br><br>

        <input type="submit" name="submit" value="toevoegen">
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $product = $_POST['chocola'];
        $product = $_GET['snoepgoed'];
        $product = $_GET['blikje frisdrank'];
        $product = $_GET['Doner'];
        $aantal = $_POST['aantal'];

        if (empty($aantal)) {
            echo 'Aantal moet groter zijn dan 0';
        } else {

            if (array_key_exists($product, $prijzen)) {

                foreach ($prijzen as $value) {
                    $dagtotaal = intval($dagtotaal);
                    echo "Verdient:  {$dagtotaal} aantal gewerkde uren. <br>";
                    echo "Verdient:  {$prijzen} Bedrag van prijzene. <br>";
                }


                require_once("winkelmand.php");{
                $a1 = new Artikel("1423", "chocola", 499.95);
                $a2 = new Artikel("1455", "snoepgoed", 12.34);
                $a3 = new Artikel("1224", "Doner", 9.99);

                $product[] = $a1;
                $product[] = $a2;
                $product[] = $a3;

                $a1->printData();
                $a2->printData();
                $a3->Data();

                $a1->kosten();
                $a2->kosten();
                $a3->kosten();
                $prijs = $prijzen[$product];
                echo '<br><br>';
                echo 'Gekozen product en totaal prijs', '<br><br>';
                echo 'Product: ' . $product . '<br>';
                echo 'Aantal in winkelmand: ' . $aantal . '<br>';
                echo 'Totaal prijs: ' . $aantal * $prijs . '<br>';
            } 
        }
    }

    ?>

</body>

</html>