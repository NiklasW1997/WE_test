<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Aufgaben</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: Aufgaben</h1>
    </div>
    <div class="row">

        <?php
            include('sidebar.php'); /*Auslagerung der sidebar*/
        ?>

        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead align="left">
                <tr class="table-secondary">
                    <th>Aufgabenbezeichnung:</th>
                    <th>Beschreibung der Aufgabe:</th>
                    <th>Reiter:</th>
                    <th>Zuständig:</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>HTML Datei erstellen</td>
                    <td>HTML Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann</td>
                    <td>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>


                </tr>
                <tr>
                    <td>CSS Datei erstellen</td>
                    <td>CSS Datei erstellen</td>
                    <td>ToDo</td>
                    <td>Max Mustermann</td>
                    <td>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                <tr>
                    <td>PC eingeschaltet</td>
                    <td>PC eingeschaltet</td>
                    <td>Erledigt</td>
                    <td>Max Mustermann</td>
                    <td>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                <tr>
                    <td>Kaffee trinken</td>
                    <td>Kaffee trinken</td>
                    <td>Erledigt</td>
                    <td>Petra Müller</td>
                    <td>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                <tr>
                    <td>Kaffee trinken</td>
                    <td>Kaffee trinken</td>
                    <td>Verschoben</td>
                    <td>Max Mustermann</td>
                    <td>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                </tbody>
            </table>

            <h2 class="text">Bearbeiten/Erstellen:</h2>
            <div class ="form-group">
                <label for="Aufgabenbezeichnung"></label>Aufgabenbezeichnung:
                <input type="text" class="form-control" placeholder="Aufgabe" id="Aufgabenbezeichnung">
            </div>
            <div class ="form-group">
                <label for="Aufgabenbeschreibung"></label>Beschreibung der Aufgabe:
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Aufgabenbeschreibung"></textarea>
            </div>
            <div class ="form-group">
                <label for="Erstellungsdatum"></label>Erstellungsdatum:
                <input type="text" class="form-control" placeholder="01.01.2019" id="Erstellungsdatum"></input>
            </div>
            <div class ="form-group">
                <label for="Fällig"></label>fällig bis:
                <input type="text" class="form-control" placeholder="01.01.2019" id="Fällig"></input>
            </div>
            <div class ="form-group">
                <label>Zugehöriger Reiter:</label>
                <select class="form-control">
                    <option>ToDo</option>
                </select>
            </div>
            <div class ="form-group">
                <label>Zuständig:</label>
                <select class="form-control">
                    <option>Max Mustermann</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>
    </div>
</div>
</body>

</html>>