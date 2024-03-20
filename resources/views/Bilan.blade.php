<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance SOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center>
    <h3><u>SOS Villages d'enfants BENIN</u></h3>
    <h3><u>Bilan au 31 Décembre 2021 </u>(en LCY) </h3>
  </center>
  <br>
  <a class="btn btn-primary" href="{{route('bilanpdf')}}"> 
                          Télécharger le Bilan en Pdf
                        </a>
                        <br><br>
                        <a class="btn btn-info" href="{{route('bilanexcel')}}"> 
                          Télécharger le Bilan en excel
                        </a>
                      
  <br><br>
  
  @include('partials.tableaubilan') <!-- Inclure le tableau ici -->

</div>
<br><br>
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
        <br>
  <a class="btn btn-primary" href="{{route('bilanpdf')}}"> 
                          Télécharger le Bilan en Pdf
                        </a>
                      
  <br><br>
      </div>
    </div>
  </div>
</div>
<br>
<br>

</body>
</html>

