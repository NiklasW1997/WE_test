<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Personen</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: Personen</h1>
    </div>
    <div class="row">

        <?php
        include('sidebar.php'); /*Auslagerung der sidebar*/
        ?>

        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead align="left">
                <tr class="table-secondary">
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>In Projekt</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Max Mustermann</td>
                    <td>mustermann@muster.de</td>
                    <td>
                        <input class="form-check-input" type="checkbox">
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                <tr>
                    <td>Petra Müller</td>
                    <td>petra@mueller.de.</td>
                    <td>
                        <input class="form-check-input" type="checkbox">
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>
                </tr>
                </tbody>
            </table>

            <h2 class="text">Bearbeiten/Erstellen:</h2>
            <div class ="form-group">
                <label for="Username"></label>Username:
                <input type="text" class="form-control" placeholder="Username" id="Username">
            </div>
            <div class ="form-group">
                <label for="Email"></label>E-Mail-Adresse:
                <input type="text" class="form-control" placeholder="E-Mail-Adresse eingeben" id="Email"></input>
            </div>
            <div class ="form-group">
                <label for="Passwort"></label>Passwort:
                <input type="text" class="form-control" placeholder="Passwort" id="Passwort"></input>
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Dem Projekt zugeordnet
                </label>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>
    </div>
</div>
</body>

</html>