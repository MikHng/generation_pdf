<!-- resources/views/partials/tableaueaf.blade.php -->
<table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Notes</th>
        <th></th>
        <th>Exercice en cours</th>
        <th></th>
        <th></th>
        <th>Exercice précédent</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <td></td>
        <td>Non Restreints</td>
        <td>Restreints</td>
        <td>Total</td>
        <td>Non Restreints</td>
        <td>Restreints</td>
        <td>Total</td>
      </tr>     
      <tr style="background-color:#ccffcc" >
        <td>RECETTES</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr style="background-color:#ccffcc" >
        <td>Recettes de l'étranger</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr>
        <td>Recettes des APS pour RC</td>
        <td>1</td>
        <td>{{ number_format($a, 0, ',', '.') }}</td>
        <td>{{ number_format($b, 0, ',', '.') }}</td>
        <td>{{ number_format($c, 0, ',', '.') }}</td>
        <td>{{ number_format($d, 0, ',', '.') }}</td>
        <td>{{ number_format($e, 0, ',', '.') }}</td>
        <td>{{ number_format($f, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Recettes des APS pour CC</td>
        <td>2</td>
        <td>{{ number_format($g, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
        <td>{{ number_format($i, 0, ',', '.') }}</td>
        <td>{{ number_format($j, 0, ',', '.') }}</td>
        <td>{{ number_format($k, 0, ',', '.') }}</td>
        <td>{{ number_format($l, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ccffcc" >
        <td>Recettes Locales</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr>
        <td>Recettes Locales Collecte de Fonds (Fundraising)</td>
        <td>3</td>
        <td>{{ number_format($m, 0, ',', '.') }}</td>
        <td>{{ number_format($n, 0, ',', '.') }}</td>
        <td>{{ number_format($o, 0, ',', '.') }}</td>
        <td>{{ number_format($p, 0, ',', '.') }}</td>
        <td>{{ number_format($q, 0, ',', '.') }}</td>
        <td>{{ number_format($r, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Recettes Locales des Subventions Gouvernementales</td>
        <td>4</td>
        <td>{{ number_format($s, 0, ',', '.') }}</td>
        <td>{{ number_format($t, 0, ',', '.') }}</td>
        <td>{{ number_format($u, 0, ',', '.') }}</td>
        <td>{{ number_format($v, 0, ',', '.') }}</td>
        <td>{{ number_format($w, 0, ',', '.') }}</td>
        <td>{{ number_format($x, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Recettes d'Exploitation</td>
        <td>5</td>
        <td>{{ number_format($y, 0, ',', '.') }}</td>
        <td>{{ number_format($z, 0, ',', '.') }}</td>
        <td>{{ number_format($a1, 0, ',', '.') }}</td>
        <td>{{ number_format($b1, 0, ',', '.') }}</td>
        <td>{{ number_format($c1, 0, ',', '.') }}</td>
        <td>{{ number_format($d1, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Autres Recettes Locales</td>
        <td>6</td>
        <td>{{ number_format($e1, 0, ',', '.') }}</td>
        <td>{{ number_format($f1, 0, ',', '.') }}</td>
        <td>{{ number_format($g1, 0, ',', '.') }}</td>
        <td>{{ number_format($h1, 0, ',', '.') }}</td>
        <td>{{ number_format($i1, 0, ',', '.') }}</td>
        <td>{{ number_format($j1, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Total des Recettes</td>
        <td></td>
        <td>{{ number_format($k1, 0, ',', '.') }}</td>
        <td>{{ number_format($l1, 0, ',', '.') }}</td>
        <td>{{ number_format($m1, 0, ',', '.') }}</td>
        <td>{{ number_format($n1, 0, ',', '.') }}</td>
        <td>{{ number_format($o1, 0, ',', '.') }}</td>
        <td>{{ number_format($p1, 0, ',', '.') }}</td>
      </tr>    
      <tr >
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>    
      <tr style="background-color:#ccffcc" >
        <td>DEPENSES</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr>
        <td>Dépenses Projet/Programme</td>
        <td>7</td>
        <td>{{ number_format($q1, 0, ',', '.') }}</td>
        <td>{{ number_format($r1, 0, ',', '.') }}</td>
        <td>{{ number_format($s1, 0, ',', '.') }}</td>
        <td>{{ number_format($t1, 0, ',', '.') }}</td>
        <td>{{ number_format($u1, 0, ',', '.') }}</td>
        <td>{{ number_format($v1, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Dépenses Administratives</td>
        <td>8</td>
        <td>{{ number_format($w1, 0, ',', '.') }}</td>
        <td>{{ number_format($x1, 0, ',', '.') }}</td>
        <td>{{ number_format($y1, 0, ',', '.') }}</td>
        <td>{{ number_format($z1, 0, ',', '.') }}</td>
        <td>{{ number_format($a2, 0, ',', '.') }}</td>
        <td>{{ number_format($b2, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Dépenses de Collecte de Fonds (Fundraising)</td>
        <td>9</td>
        <td>{{ number_format($c2, 0, ',', '.') }}</td>
        <td>{{ number_format($d2, 0, ',', '.') }}</td>
        <td>{{ number_format($e2, 0, ',', '.') }}</td>
        <td>{{ number_format($f2, 0, ',', '.') }}</td>
        <td>{{ number_format($g2, 0, ',', '.') }}</td>
        <td>{{ number_format($h2, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Autres Dépenses</td>
        <td>10</td>
        <td>{{ number_format($i2, 0, ',', '.') }}</td>
        <td>{{ number_format($j2, 0, ',', '.') }}</td>
        <td>{{ number_format($k2, 0, ',', '.') }}</td>
        <td>{{ number_format($l2, 0, ',', '.') }}</td>
        <td>{{ number_format($m2, 0, ',', '.') }}</td>
        <td>{{ number_format($n2, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Total des Dépenses</td>
        <td></td>
        <td>{{ number_format($o2, 0, ',', '.') }}</td>
        <td>{{ number_format($p2, 0, ',', '.') }}</td>
        <td>{{ number_format($q2, 0, ',', '.') }}</td>
        <td>{{ number_format($r2, 0, ',', '.') }}</td>
        <td>{{ number_format($s2, 0, ',', '.') }}</td>
        <td>{{ number_format($t2, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Excédent/déficit net sur les activités opérationnelles</td>
        <td></td>
        <td>{{ number_format($u2, 0, ',', '.') }}</td>
        <td>{{ number_format($v2, 0, ',', '.') }}</td>
        <td>{{ number_format($w2, 0, ',', '.') }}</td>
        <td>{{ number_format($x2, 0, ',', '.') }}</td>
        <td>{{ number_format($y2, 0, ',', '.') }}</td>
        <td>{{ number_format($z2, 0, ',', '.') }}</td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Excédent/déficit net sur les activités opérationnelles</td>
        <td>11</td>
        <td>{{ number_format($a3, 0, ',', '.') }}</td>
        <td>{{ number_format($b3, 0, ',', '.') }}</td>
        <td>{{ number_format($c3, 0, ',', '.') }}</td>
        <td>{{ number_format($d3, 0, ',', '.') }}</td>
        <td>{{ number_format($e3, 0, ',', '.') }}</td>
        <td>{{ number_format($f3, 0, ',', '.') }}</td>
      </tr>  
      <tr>
        <td>Intérêts créditeurs (recettes)</td>
        <td></td>
        <td>{{ number_format($g3, 0, ',', '.') }}</td>
        <td>{{ number_format($h3, 0, ',', '.') }}</td>
        <td>{{ number_format($i3, 0, ',', '.') }}</td>
        <td>{{ number_format($j3, 0, ',', '.') }}</td>
        <td>{{ number_format($k3, 0, ',', '.') }}</td>
        <td>{{ number_format($l3, 0, ',', '.') }}</td>
      </tr>   
      <tr>
        <td>Intérêts débiteurs (dépenses)</td>
        <td></td>
        <td>{{ number_format($m3, 0, ',', '.') }}</td>
        <td>{{ number_format($n3, 0, ',', '.') }}</td>
        <td>{{ number_format($o3, 0, ',', '.') }}</td>
        <td>{{ number_format($p3, 0, ',', '.') }}</td>
        <td>{{ number_format($q3, 0, ',', '.') }}</td>
        <td>{{ number_format($r3, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Autres recettes financières</td>
        <td></td>
        <td>{{ number_format($s3, 0, ',', '.') }}</td>
        <td>{{ number_format($t3, 0, ',', '.') }}</td>
        <td>{{ number_format($u3, 0, ',', '.') }}</td>
        <td>{{ number_format($v3, 0, ',', '.') }}</td>
        <td>{{ number_format($w3, 0, ',', '.') }}</td>
        <td>{{ number_format($x3, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td>Autres dépenses financières</td>
        <td></td>
        <td>{{ number_format($y3, 0, ',', '.') }}</td>
        <td>{{ number_format($z3, 0, ',', '.') }}</td>
        <td>{{ number_format($a4, 0, ',', '.') }}</td>
        <td>{{ number_format($b4, 0, ',', '.') }}</td>
        <td>{{ number_format($c4, 0, ',', '.') }}</td>
        <td>{{ number_format($d4, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ccffcc" >
        <td>Gains ou pertes résultant du Taux de change</td>
        <td></td>
        <td>{{ number_format($e4, 0, ',', '.') }}</td>
        <td>{{ number_format($f4, 0, ',', '.') }}</td>
        <td>{{ number_format($g4, 0, ',', '.') }}</td>
        <td>{{ number_format($h4, 0, ',', '.') }}</td>
        <td>{{ number_format($i4, 0, ',', '.') }}</td>
        <td>{{ number_format($j4, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Excédent/déficit net avant impôts</td>
        <td></td>
        <td>{{ number_format($k4, 0, ',', '.') }}</td>
        <td>{{ number_format($l4, 0, ',', '.') }}</td>
        <td>{{ number_format($m4, 0, ',', '.') }}</td>
        <td>{{ number_format($n4, 0, ',', '.') }}</td>
        <td>{{ number_format($o4, 0, ',', '.') }}</td>
        <td>{{ number_format($p4, 0, ',', '.') }}</td>
      </tr> 
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>  
      <tr style="background-color:#ccffcc" >
        <td>Charges Fiscales</td>
        <td>12</td>
        <td>{{ number_format($q4, 0, ',', '.') }}</td>
        <td>{{ number_format($r4, 0, ',', '.') }}</td>
        <td>{{ number_format($s4, 0, ',', '.') }}</td>
        <td>{{ number_format($t4, 0, ',', '.') }}</td>
        <td>{{ number_format($u4, 0, ',', '.') }}</td>
        <td>{{ number_format($v4, 0, ',', '.') }}</td>
      </tr>  
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Excédent/déficit net après impôts</td>
        <td></td>
        <td>{{ number_format($w4, 0, ',', '.') }}</td>
        <td>{{ number_format($x4, 0, ',', '.') }}</td>
        <td>{{ number_format($y4, 0, ',', '.') }}</td>
        <td>{{ number_format($z4, 0, ',', '.') }}</td>
        <td>{{ number_format($a5, 0, ',', '.') }}</td>
        <td>{{ number_format($b5, 0, ',', '.') }}</td>
      </tr> 
    </tbody>
  </table>