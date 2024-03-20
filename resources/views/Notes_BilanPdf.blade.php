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
<h2 style="text-decoration: underline;">SOS Villages d'Enfants BENIN</h2>
  <h3 style="text-decoration: underline;">Notes du Bilan au 31 Décembre 2021 </h3>
</center>
<h3><br>Note 1 : Immobilisation incorporelles (en LCY)</h3>
<br>

@include('partials.tableaunotesbilan') <!-- Inclure le tableau ici -->

</div>
<br><br>

</body>
</html>

