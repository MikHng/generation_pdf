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
    <h4><u>Fonds Restreints au 31 Décembre 2021</u></h4>
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
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Solde au 1er Janvier</th>
        <th>Reçu</th>
        <th>Montant Total Dépensé</th>
        <th>Solde au 31 Décembre</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>HGFD</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Localité 1 :</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Structure 1</td>
        <td>0</td>
        <td>784925865</td>
        <td>8564248452</td>
        <td>8541245</td>
      </tr>
      <tr>
        <td>Structure 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr>
        <td>Structure 3</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr>
        <td>Localité 2 :</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Structure 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total </td>
        <td>0</td>
        <td>78451254</td>
        <td>87459865</td>
        <td>86575444</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>KD e.V.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Localité 2 :</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Structure 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr>
        <td>Structure 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Subventions du Gouuvernement</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Localité 2 :</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Structure 3</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr>
        <td>Structure 4</td>
        <td></td>
        <td></td>
        <td></td>
        <td>0</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>    
      <tr style="background-color:#ffff99">
        <td>Total Fonds Restreints</td>
        <td>0</td>
        <td>85245295</td>
        <td>7429525</td>
        <td>8524562</td>
      </tr>  
    </tbody>
  </table>
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

