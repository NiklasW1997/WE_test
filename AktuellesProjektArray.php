<?php
$aktprojekt = array(
    0 => array(
        'Titel' => 'ToDo:',
        'Aufgabe1' => 'HTML Datei erstellen(Max Mustermann)',
        'Aufgabe2' => 'CSS Datei erstellen(Max Mustermann)',

    ),
    1 => array(
        'Titel' => 'Erledigt:',
        'Aufgabe1' => 'PC eingeschaltet(Petra Müller)',
        'Aufgabe2' => 'Kaffee trinken(Petra Müller)',

    ),
    2 => array(
        'Titel' => 'Verschoben:',
        'Aufgabe1' => 'Für die Uni lernen (Max Mustermann)',
        'Aufgabe2' => null,

    ),
);
foreach ($aktprojekt as $aufgaben) {
    echo($aufgaben['Titel'] . '<br>');
    echo($aufgaben['Aufgabe1'] . '<br>');
    echo($aufgaben['Aufgabe2'] . '<br><br>');

}

echo '<hr>';

echo '<pre>';
var_dump($aktprojekt);

foreach ($aktprojekt as $aufgaben){
    if (isset($aufgaben['Titel'],$aufgaben['Aufgabe1'],$aufgaben['Aufgabe2'])){
        echo('Array ist gesetzt' . '<br>');
    }else{
        echo('Array ist nicht gesetzt' . '<br>');
    }
}

echo '</pre>';

?>