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
</head>
<body>

<div class="container">
<center>
  <h2 style="text-decoration: underline;">SOS Villages d'Enfants BENIN</h2>
  <h3 style="text-decoration: underline;">Etat de Flux de Trésorerie pour l'exercice clos au 31 Décembre 2021</h3>
</center>
  <br>
  <a class="btn btn-primary" href="{{route('etatfluxpdf')}}"> 
    Télécharger l'Etat de Flux de Trésorerie en Pdf
  </a>
  <br><br>
                        <a class="btn btn-info" href="{{route('etatfluxexcel')}}"> 
                          Télécharger l'Etat de Flux de Trésorerie en excel
                        </a>
                      
  <br>

  <table class="table table-bordered">
    <thead>
      <tr class="info">
        <th>Ref.</th>
        <th>Description</th>
        <th>Exercice en cours (E-   R+)</th>
        <th>Exercice précédent                   (E-   R+)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td class="success">Flux de Trésorerie Provenant des Opérations d'Exploitation</td>
        <td></td>
        <td></td>
      </tr>      
      <tr>
        <td>A1</td>
        <td>Excédent avant imposition</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Ajustements pour :</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>A2</td>
        <td>Amortissement</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>A3</td>
        <td>Perte de change sur devises</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>A4</td>
        <td>Vente d'immobilisations incorporelles et corporelles</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>A5</td>
        <td>Autres positions ne relevant pas du flux de trésorerie</td>
        <td></td>
        <td></td>
      </tr>
      
      <tr class="warning">
        <td>R1</td>
        <td>Excédent d'Exploitation avant les Changements du Fonds de Roulement</td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>B1</td>
        <td>Augmentation / Diminution enregistrée dans les comptes à recevoir</td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>B2</td>
        <td>Augmentation / Diminution au niveau des inventaires</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>B3</td>
        <td>Augmentation / Diminution enregistrée dans les comptes à payer </td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td>R2</td>
        <td>Liquidités générées à partir des Opérations</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td>R3</td>
        <td>Flux net de Trésorerie Provenant des Opérations d'Exploitation</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td><br></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td class="success">Flux de Trésorerie Provenant des Activités d'Investissement</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>D1</td>
        <td>Achat d'immobilisations incorporelles et corporelles</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td>R4</td>
        <td>Flux net de Trésorerie utilisés pour les activités d'Investissement</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td class="success">Flux de Trésorerie Provenant des Activités de capitaux</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>E1</td>
        <td>Augmentation du capial</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>E2</td>
        <td>Diminution du capital</td>
        <td></td>
        <td></td>
      </tr>

      <tr class="warning">
        <td>R5</td>
        <td>Flux net de Trésorerie provenant des activités de capitaux</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>R6</td>
        <td class="success">TOTAL FLUX  DE TRESORERIE</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td></td>
        <td>Augmentation Nette en Trésorerie et équivalents de trésorerie</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td></td>
        <td>Trésorerie et équivalents de Trésorerie en début d'exercice (note)</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
        <td></td>
        <td>Trésorerie et équivalents de Trésorerie en fin d'exercice (note)</td>
        <td></td>
        <td></td>
      </tr>
     <br><br>
     
    </tbody> 
  </table>
<h3>Note :</h3>
  <table class="table table-bordered">
    <thead>
      <tr class="success">
        <th>&nbsp;  &nbsp;              </th>
        <th></th>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
    <tr>
    <th></th>
        <td>Espèces et soldes dans les banques</td>
        <td></td>
        <td></td>
        
      </tr>
      <tr>
      <th></th>
        <td>Investissements à court terme</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
      <th></th>
        <td>Espèces et valeurs assimilables à des espèces</td>
        <td></td>
        <td></td>
      </tr>
      <tr class="warning">
      <th></th>
        <td>Total</td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

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
    <br>
  <a class="btn btn-primary" href="{{route('etatfluxpdf')}}"> 
    Télécharger l'Etat de Flux de Trésorerie en Pdf
  </a>
                      
  <br><br>
  </div>
</div>
<br><br>

</body>
</html>
