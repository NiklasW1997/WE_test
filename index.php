<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Aktuelles Projekt</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>
    <div class="row">

        <?php
        include('sidebar.php'); /*Auslagerung der sidebar*/
        ?>

        <div class="col-md">
            <div class="card-header">ToDo:</div>
            <div class="list-group">
                <div class="list-group-item">HTML Datei erstellen (Max Mustermann)</div>
                <div class="list-group-item">CSS Datei erstellen (Max Mustermann)</div>
            </div>
        </div>

        <div class="col-md">
            <div class="card-header">Erledigt:</div>
            <div class="list-group">
                <div class="list-group-item">PC eingeschaltet (Petra Müller)</div>
                <div class="list-group-item">Kaffee trinken (Petra Müller)</div>
            </div>
        </div>

        <div class="col-mdm">
            <div class="card-header">Verschoben:</div>
            <div class="list-group">
                <div class="list-group-item">Für die Uni lernen (Max Mustermann)</div>
            </div>
        </div>

    </div>
</div>
</body>

</html>
