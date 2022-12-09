<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>String methodes bestand</title>
</head>

<body>

    <h2>String methodes bestand</h2>
    <form action="" method="post">
        <label for="namen">namen:</label><br>
        <input type="text" name="namen" required placeholder="namen"><br><br>

        <label for="straaten">straaten:</label><br>
        <input type=text name="straaten" required placeholder="straaten">><br><br>

        <label for="huisnummers">huisnummers:</label><br>
        <input type=text name="huisnummers" required placeholder="huisnummers">><br><br>

        <label for="postcodes">postcodes:</label><br>
        <input type=text name="postcodes" required placeholder="postcodes">><br><br>

        <label for="woonplaatsen">woonplaatsen:</label><br>
        <input type=text name="woonplaatsen" required placeholder="woonplaatsen">><br><br>

        <input type="submit" name="submit" value="verzenden">
    </form>

    <?php

    if (isset($_POST['submit'])) {

        $script = "<script>alert('Niet beveiligd tegen script-injections')</script>";
        echo $script;


        $namen = $_POST['namen'];
        $straaten = $_POST['straaten'];
        $huisnummers = $_POST['huisnummers'];
        $postcodes = $_POST['postcodes'];
        $woonplaatsen = $_POST['woonplaatsen'];
        echo htmlspecialchars($namen);
        echo "<br>";
        echo htmlspecialchars($straaten);
        echo "<br>";
        echo htmlspecialchars($huisnummers);
        echo "<br>";
        echo htmlspecialchars($postcodes);
        echo "<br>";
        echo htmlspecialchars($woonplaatsen);

        echo "<br>";
        echo strtoupper(ucfirst($namen));
        echo "<br>";
        echo strtoupper(ucfirst($straaten));
        echo "<br>";
        echo strtoupper(ucfirst($huisnummers));
        echo "<br>";
        echo strtoupper(ucfirst($postcodes));
        echo "<br>";
        echo strtoupper(ucfirst($woonplaatsen));

        echo "<br>";

        echo strtolower(
            $namen . "<br>" .
                $straaten . "<br>" .
                $huisnummers . "<br>" .
                $postcodes . "<br>"  .
                $woonplaatsen . "<br>"
        );

        if (is_numeric($huisnummers)) {
            echo $huisnummers;
        } else {
            echo "je moet een nummer toevoegen";
        }
    }
    ?>

</body>

</html>