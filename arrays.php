<?php

$Name = array(
  "Name" => "Halil",

  "contactpersoon" => "klant"
);

$afgeprijsd = array(
  "iets" => "U heeft in de voorgaande bestelling voor [[iets]] gekozen",
  "afgeprijsd" => "Bij de volgende bestelling geven we uw 20% korting."
);

$ondertekening = array(
  "Dag" => "Met vriendelijke groet",
  "Name" => "",
  "optie" => "Directeur winkel beheerder"
);







print_r($Name);
echo "<br>";


$Name["contactpersoon"] = "klant";
echo "<br>";


print_r($afgeprijsd);
echo "<br>";


print_r($ondertekening);

print $Name["contactpersoon"] . " " . $ondertekening["Name"];
echo "<br>";



echo "<br>";
print str_replace("[[iets]]", "Appel, Smeerkaar, Orange", $afgeprijsd["iets"]);


$aanbieding = array_merge($Name, $afgeprijsd, $ondertekening);
echo "<br>";

$ondertekening["Name"] = "Halil Dogan";
echo "<br>";


echo "<br>";
print_r($aanbieding);
