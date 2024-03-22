<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance SOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 2px solid black;
      padding: 8px;
      text-align: left;
    }
  </style>
</head>
<body>

<div class="container">
<center>
  <h2 style="text-decoration: underline;">SOS Villages d'Enfants BENIN</h2>
  <h3 style="text-decoration: underline;">Etat de Flux de Trésorerie pour l'exercice clos au 31 Décembre {{ date('Y') }}</h3>
</center>

@include('partials.tableauflux') <!-- Inclure le tableau ici -->>

</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div style="text-align:center"class="card-body">
        <h5 class="card-title">Directrice Finances et Contrôle</h5>
        <br><br>
        <p class="card-text">Diene ALIOUNE</p>
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div style="text-align:center" class="card-body">
        <h5 class="card-title">Directeur International Région</h5>
        <br><br>
        <p class="card-text">Benoît PIOT</p>
       
      </div>
    </div>
  </div>
</div>
<br><br>

</body>
</html>

