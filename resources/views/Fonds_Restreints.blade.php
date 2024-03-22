
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
    <h4><u>Fonds Restreints au 31 Décembre {{ date('Y') }}</u></h4>
    <h4><u>Mouvements des fonds restreints</u></h4>
 </center>
 <br>
  <a class="btn btn-primary" href="{{route('fondspdf')}}"> 
    Télécharger Fonds Restreints en Pdf
  </a>
  <br><br>
                        <a class="btn btn-info" href="{{route('fondexcel')}}"> 
                          Télécharger Fonds Restreints en excel
                        </a>
                      
  <br><br>

  @include('partials.tableaufonds') <!-- Inclure le tableau ici -->

  <br>
  <a class="btn btn-primary" href="{{route('fondspdf')}}"> 
    Télécharger Fonds Restreints en Pdf
  </a>
                      
  <br><br>
</div>
<br>
<br>

</body>
</html>

