<!-- resources/views/partials/tableauflux.blade.php -->
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
        <td>{{ number_format($a, 0, ',', '.') }}</td>
        <td>{{ number_format($b, 0, ',', '.') }}</td>
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
        <td>{{ number_format($c, 0, ',', '.') }}</td>
        <td>{{ number_format($d, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>A3</td>
        <td>Perte de change sur devises</td>
        <td>{{ number_format($e, 0, ',', '.') }}</td>
        <td>{{ number_format($f, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>A4</td>
        <td>Vente d'immobilisations incorporelles et corporelles</td>
        <td>{{ number_format($g, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>A5</td>
        <td>Autres positions ne relevant pas du flux de trésorerie</td>
        <td>{{ number_format($i, 0, ',', '.') }}</td>
        <td>{{ number_format($j, 0, ',', '.') }}</td>
      </tr>
      
      <tr class="warning">
        <td>R1</td>
        <td>Excédent d'Exploitation avant les Changements du Fonds de Roulement</td>
        <td>{{ number_format($k, 0, ',', '.') }}</td>
        <td>{{ number_format($l, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>B1</td>
        <td>Augmentation / Diminution enregistrée dans les comptes à recevoir</td>
        <td>{{ number_format($m, 0, ',', '.') }}</td>
        <td>{{ number_format($n, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>B2</td>
        <td>Augmentation / Diminution au niveau des inventaires</td>
        <td>{{ number_format($o, 0, ',', '.') }}</td>
        <td>{{ number_format($p, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>B3</td>
        <td>Augmentation / Diminution enregistrée dans les comptes à payer </td>
        <td>{{ number_format($q, 0, ',', '.') }}</td>
        <td>{{ number_format($r, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
        <td>R2</td>
        <td>Liquidités générées à partir des Opérations</td>
        <td>{{ number_format($s, 0, ',', '.') }}</td>
        <td>{{ number_format($t, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
        <td>R3</td>
        <td>Flux net de Trésorerie Provenant des Opérations d'Exploitation</td>
        <td>{{ number_format($u, 0, ',', '.') }}</td>
        <td>{{ number_format($v, 0, ',', '.') }}</td>
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
        <td>{{ number_format($w, 0, ',', '.') }}</td>
        <td>{{ number_format($x, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
        <td>R4</td>
        <td>Flux net de Trésorerie utilisés pour les activités d'Investissement</td>
        <td>{{ number_format($y, 0, ',', '.') }}</td>
        <td>{{ number_format($z, 0, ',', '.') }}</td>
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
        <td>{{ number_format($a1, 0, ',', '.') }}</td>
        <td>{{ number_format($b1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>E2</td>
        <td>Diminution du capital</td>
        <td>{{ number_format($c1, 0, ',', '.') }}</td>
        <td>{{ number_format($d1, 0, ',', '.') }}</td>
      </tr>

      <tr class="warning">
        <td>R5</td>
        <td>Flux net de Trésorerie provenant des activités de capitaux</td>
        <td>{{ number_format($e1, 0, ',', '.') }}</td>
        <td>{{ number_format($f1, 0, ',', '.') }}</td>
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
        <td>{{ number_format($g1, 0, ',', '.') }}</td>
        <td>{{ number_format($h1, 0, ',', '.') }}</td>
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
        <td>{{ number_format($i1, 0, ',', '.') }}</td>
        <td>{{ number_format($j1, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
        <td></td>
        <td>Trésorerie et équivalents de Trésorerie en début d'exercice (note)</td>
        <td>{{ number_format($k1, 0, ',', '.') }}</td>
        <td>{{ number_format($l1, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
        <td></td>
        <td>Trésorerie et équivalents de Trésorerie en fin d'exercice (note)</td>
        <td>{{ number_format($m1, 0, ',', '.') }}</td>
        <td>{{ number_format($n1, 0, ',', '.') }}</td>
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
        <td>{{ number_format($o1, 0, ',', '.') }}</td>
        <td>{{ number_format($p1, 0, ',', '.') }}</td>
        
      </tr>
      <tr>
      <th></th>
        <td>Investissements à court terme</td>
        <td>{{ number_format($q1, 0, ',', '.') }}</td>
        <td>{{ number_format($r1, 0, ',', '.') }}</td>
      </tr>
      <tr>
      <th></th>
        <td>Espèces et valeurs assimilables à des espèces</td>
        <td>{{ number_format($s1, 0, ',', '.') }}</td>
        <td>{{ number_format($t1, 0, ',', '.') }}</td>
      </tr>
      <tr class="warning">
      <th></th>
        <td>Total</td>
        <td>{{ number_format($u1, 0, ',', '.') }}</td>
        <td>{{ number_format($v1, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>