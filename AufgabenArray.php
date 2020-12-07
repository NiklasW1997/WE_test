<?php
$aufgaben = array(
    0 => array(
        'Aufgabenbezeichnung' => 'HTML Datei erstellen',
        'Beschreibung der Aufgabe' => 'HTML Datei erstellen',
        'Reiter' => 'ToDo',
        'Zuständig' => 'Max Mustermann'
    ),
    1 => array(
        'Aufgabenbezeichnung' => 'CSS Datei erstellen',
        'Beschreibung der Aufgabe' => 'CSS Datei erstellen',
        'Reiter' => 'ToDo',
        'Zuständig' => 'Max Mustermann'
    ),
    2 => array(
        'Aufgabenbezeichnung' => 'PC eingeschaltet',
        'Beschreibung der Aufgabe' => 'PC eingeschaltet',
        'Reiter' => 'Erledigt',
        'Zuständig' => 'Max Mustermann'
    ),
    3 => array(
        'Aufgabenbezeichnung' => 'Kaffee trinken',
        'Beschreibung der Aufgabe' => 'Kaffee trinken',
        'Reiter' => 'Erledigt',
        'Zuständig' => 'Petra Müller'
    ),
    4 => array(
        'Aufgabenbezeichnung' => 'Kaffee trinken',
        'Beschreibung der Aufgabe' => 'Kaffee trinken',
        'Reiter' => 'Verschoben',
        'Zuständig' => 'Max Mustermann'
    ),

);
foreach ($aufgaben as $aufgabe) {
    echo('Aufgabenbezeichnung: ' . $aufgabe['Aufgabenbezeichnung'] . '<br>');
    echo('Beschreibung der Aufgabe: ' . $aufgabe['Beschreibung der Aufgabe'] . '<br>');
    echo('Reiter: ' . $aufgabe['Reiter'] . '<br>');
    echo('Zuständig: ' . $aufgabe['Zuständig'] . '<br><br>');
}

echo '<hr>';

echo '<pre>';
var_dump($aufgaben);
echo '</pre>';
?>
