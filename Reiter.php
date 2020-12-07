<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>Reiter</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: Reiter</h1>
    </div>
    <div class="row">

        <?php
        include('sidebar.php');
        ?>

        <div class="col-md-8">
            <table class="table table-responsive d-table">
                <thead align="left">
                <tr class="table-secondary">
                    <th>Name</th>
                    <th>Beschreibung</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen.
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>

                </tr>
                <tr>
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind.
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>

                </tr>
                <tr>
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-trash-alt"></i></button></span>
                        <span style="float: right"><button type="button" class="btn btn-link"><i class="far fa-edit"></i></button></span>
                    </td>

                </tr>
                </tbody>
            </table>

            <h2 class="text">Bearbeiten/Erstellen:</h2>
            <div class ="form-group">
                <label for="Projektname"></label>Bezeichnung des Reiters:
                <input type="text" class="form-control" placeholder="Reiter" id="Projektname">
            </div>
            <div class ="form-group">
                <label for="Projektbeschreibung"></label>Beschreibung:
                <textarea type="textarea" class="form-control" placeholder="Beschreibung" id="Projektbeschreibung"></textarea>
            </div>
            <button type="button" class="btn btn-primary">Speichern</button>
            <button type="button" class="btn btn-info">Reset</button>
        </div>
    </div>
</div>
</body>

</html>
