<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Projekte</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: Projekte</h1>
    </div>
    <div class="row">

        <?php
        include('sidebar.php'); /*Auslagerung der sidebar*/
        ?>

        <div class="col-md-8">
            <h2>Projekte auswählen</h2>
            <div class ="form-group">
                <select class="form-control">
                    <option>-bitte auswählen-</option>
                </select>
            </div>

            <button type="button" class="btn btn-primary">Auswählen</button>
            <button type="button" class="btn btn-primary">Bearbeiten</button>
            <button type="button" class="btn btn-danger">Löschen</button>

            <h2 class="text">Projekt bearbeiten/erstellen:</h2>
            <div class ="form-group">
                <label for="Projektname"></label>Projektname:
                <input type="text" class="form-control" placeholder="Projekt" id="Projektname">
            </div>
            <div class ="form-group">
                <label for="Projektbeschreibung"></label>Projektbeschreibung:
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Projektbeschreibung"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>
    </div>
</div>
</body>

</html>
