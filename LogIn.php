<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>LogIn</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center"> Aufgabenplaner: LogIn </h1>
    </div>
    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-8">
            <form action="index.php">
                <div class="form-group">
                    <label for="email">Email-Adresse:</label>
                    <input type="email" class="form-control" placeholder="Email-Adresse eingeben " id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Passwort:</label>
                    <input type="password" class="form-control" placeholder="Passwort" id="pwd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> AGBs und Datenschutzbedingungen akzeptieren
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Einloggen</button>
                <p>
                    Noch nicht registriert?<button type="button" class="btn btn-link">Registrierung</button>
                    <br>
                    Da der Login-Vorgang technisch noch nicht realisiert wurde: <button type="button" class="btn btn-link">Überspringen</button>
                </p>

            </form>
        </div>

        <div class="col-md-2">
        </div>

    </div>
</div>
</div>
</body>

</html>
