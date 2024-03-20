<!DOCTYPE html>
<html lang="en">
<head>
  <title>Finance SOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <h4><u>SOS Villages d'enfants BENIN</u></h4>
    <h4><u>Notes à l'Etat des Activités Financières de l'exercice clos au 31 Décembre 2021 </u></h4>
    <br><br>
  </center>
  <center>
  <h5>Note 1 : Recettes des APS pour Dépenses de Fonctionnement (RC)</h5>
  </center>

  @include('partials.tableaunoteseaf') <!-- Inclure le tableau ici -->

  <br><br>
</div>

</body>
</html>

