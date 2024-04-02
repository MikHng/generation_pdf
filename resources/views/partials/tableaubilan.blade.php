<!-- resources/views/partials/tableaubilan.blade.php -->
<table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc">
        <td></td>
        <th>Notes</th>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>     
      <tr style="background-color:#ccffcc">
        <td>ACTIFS</td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr style="background-color:#ccffcc">
        <td>Actifs Non Courants</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Immobilisation incorporelles</td>
        <td>1</td>
        <td>{{ number_format($a, 0, ',', '.') }}</td>
        <td>{{ number_format($b, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Immobilisation corporelles</td>
        <td>2</td>
        <td>{{ number_format($c, 0, ',', '.') }}</td>
        <td>{{ number_format($d, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Immeuble de placement</td>
        <td>3</td>
        <td>{{ number_format($e, 0, ',', '.') }}</td>
        <td>{{ number_format($f, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres actifs financiers à long terme</td>
        <td></td>
        <td>{{ number_format($g, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Placements en titres de capitaux propres</td>
        <td></td>
        <td>{{ number_format($i, 0, ',', '.') }}</td>
        <td>{{ number_format($j, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Actifs biologiques</td>
        <td>4</td>
        <td>{{ number_format($k, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Actifs Non Courants</td>
        <td></td>
        <td>{{ number_format($l, 0, ',', '.') }}</td>
        <td>{{ number_format($m, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>      
      <tr style="background-color:#ccffcc">
        <td> Actifs Courants</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Inventaires, Stocks</td>
        <td>5</td>
        <td>{{ number_format($n, 0, ',', '.') }}</td>
        <td>{{ number_format($o, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Créances</td>
        <td>6</td>
        <td>{{ number_format($p, 0, ',', '.') }}</td>
        <td>{{ number_format($q, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Trésorerie et équivalents trésorerie</td>
        <td>7</td>
        <td>{{ number_format($r, 0, ',', '.') }}</td>
        <td>{{ number_format($s, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres actifs financiers à court terme</td>
        <td></td>
        <td>{{ number_format($t, 0, ',', '.') }}</td>
        <td>{{ number_format($u, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Charges comptabilisées d'avance</td>
        <td></td>
        <td>{{ number_format($v, 0, ',', '.') }}</td>
        <td>{{ number_format($w, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Actifs Courants</td>
        <td></td>
        <td>{{ number_format($x, 0, ',', '.') }}</td>
        <td>{{ number_format($y, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>      
      <tr style="background-color:#ffff99">
        <td>Total Actifs</td>
        <td></td>
        <td>{{ number_format($z, 0, ',', '.') }}</td>
        <td>{{ number_format($a1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>    
      <tr style="background-color:#ccffcc">
        <td> FONDS ACCUMULES ET PASSIF</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc">
        <td> Fonds Accumulés</td>
        <td>8</td>
        <td>{{ number_format($b1, 0, ',', '.') }}</td>
        <td>{{ number_format($c1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Fonds non restreints</td>
        <td></td>
        <td>({{ number_format($d1, 0, ',', '.') }})</td>
        <td>({{ number_format($e1, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Fonds restreints</td>
        <td></td>
        <td>{{ number_format($f1, 0, ',', '.') }}</td>
        <td>{{ number_format($g1, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Fonds Accumulés</td>
        <td></td>
        <td>({{ number_format($h1, 0, ',', '.') }})</td>
        <td>({{ number_format($i1, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      <tr style="background-color:#ccffcc">
        <td> Passifs Non Courants</td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr>
        <td>Fonds de dépot</td>
        <td>9</td>
        <td>({{ number_format($j1, 0, ',', '.') }})</td>
        <td>({{ number_format($k1, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Provisions à long terme</td>
        <td>10</td>
        <td>({{ number_format($h1, 0, ',', '.') }})</td>
        <td>({{ number_format($l1, 0, ',', '.') }})</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Passifs Non Courants</td>
        <td></td>
        <td>({{ number_format($m1, 0, ',', '.') }})</td>
        <td>({{ number_format($n1, 0, ',', '.') }})</td>
      </tr>  
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      <tr style="background-color:#ccffcc">
        <td> Passifs Courants</td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr>
        <td>Dettes à court terme</td>
        <td>11</td>
        <td>({{ number_format($o1, 0, ',', '.') }})</td>
        <td>({{ number_format($p1, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Eventualités</td>
        <td></td>
        <td>{{ number_format($q1, 0, ',', '.') }}</td>
        <td>{{ number_format($r1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Produits comptabilisés d'avance</td>
        <td></td>
        <td>({{ number_format($s1, 0, ',', '.') }})</td>
        <td>({{ number_format($t1, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Autres dettes</td>
        <td></td>
        <td>({{ number_format($u1, 0, ',', '.') }})</td>
        <td>({{ number_format($v1, 0, ',', '.') }})</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Passifs Courants</td>
        <td></td>
        <td>({{ number_format($w1, 0, ',', '.') }})</td>
        <td>({{ number_format($x1, 0, ',', '.') }})</td>
      </tr>  
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Fonds Accumulés et Passif</td>
        <td></td>
        <td>({{ number_format($y1, 0, ',', '.') }})</td>
        <td>({{ number_format($z1, 0, ',', '.') }})</td>
      </tr>  
    </tbody>
  </table>