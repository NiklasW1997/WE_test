<?php
$personen = array(
    0 => array(
        'id' => 1,
        'Name' => 'Max Mustermann',
        'E-Mail' => 'mustermann@muster.de',
        'In-Projekt' => 'Ja'
    ),
    1 => array(
        'id' => 2,
        'Name' => 'Petra Müller',
        'E-Mail' => 'petra@mueller.de',
        'In-Projekt' => 'Nein'
    )
);
foreach ($personen as $person) {
    echo($person['id'] . '<br>');
    echo('Name: ' . $person['Name'] . '<br>');
    echo('E-Mail: ' . $person['E-Mail'] . '<br>');
    echo('In-Projekt: ' . $person['In-Projekt'] . '<br><br>');
}

echo '<hr>';

echo '<pre>';
var_dump($personen);
echo '</pre>';

?>
