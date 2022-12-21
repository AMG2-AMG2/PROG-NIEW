<?php

/*
 * Opdracht 1:
 * Maak de $weekdagen array af zodat alle dagen van de week erin staan
 * Voor de key en value gebruik je kleine letters, geen hoofdletters
 */

$weekdagen = array(
    'ma' => 'maandag',
    'di' => 'dinsdag',
    'wo' => 'woensdag',
    'do' => 'donderdag',
    'vrij' => 'vrijdag',
    'za' => 'zaterdag',
    'zo' => 'zondag'

);

/*
 * Opdracht 2:
 * Gebruik een loop om van alle elementen van je array de waarde te tonen op het scherm
 * Gebruik hiervoor een echo statement dus geen print_r of var_dump.
 */

foreach ($weekdagen as $value) {
    echo $value, '<br>';
}

/*
 * Opdracht 3:
 * Wijzig alle waardes in je array met behulp van een loop en een switch
 * Alle waardes moeten beginnen met een hoofdletter. Bij 'za' en 'zo' moeten de waardes
 * van de dagen geheel uit hoofdletters bestaan.
 * Gebruik hiervoor de juiste functies
 */

foreach ($weekdagen as $key => $value) {
    switch ($key) {
        case 'ma':
        case 'di':
        case 'wo':
        case 'do':
        case 'vrij':
            echo ucfirst($value), '<br>';
            break;
        case 'za':
        case 'zo':
            echo strtoupper($value), '<br>';
            break;
        default:
            echo    'Dit is geen weekdag';
    }
}

/*
 * Opdracht 4:
 * Maak een nieuwe array en noem deze $omgekeerd.
 * De inhoud van deze array bestaat uit de elementen van de weekdagen array.
 * Gebruik hiervoor een for loop en array_push() om deze elementen te kopieren naar de nieuwe array
 * HINT: de grootte van een array kun je met sizeof() en count() bepalen
 */

 $keys = array_keys($weekdagen);
 print_r($keys);
 $omgekeerd = array();

 for ($i = 0; $i < count ($weekdagen); $i++) {
    echo $weekdagen [$keys[$i]], '<br>';
    array_push($omgekeerd, $weekdagen[$keys[$i]]);

}

print_r($omgekeerd);

/*
 * Opdracht 5:
 * Gebruik de functie array_reverse om hetzelfde resultaat als in opdracht 4 te verkrijgen.
 */

 $reversed = array_reverse($weekdagen);
 print_r($reversed);