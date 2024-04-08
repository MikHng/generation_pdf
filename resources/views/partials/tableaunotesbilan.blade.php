<!-- resources/views/partials/tableaunotesbilan.blade.php -->
<table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Notes</th>
        <th>Licences & redevances</th>
        <th>Autres</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>
      </tr>
    </thead>
    <tbody>
    <tr style="background-color:#ccffcc" >
        <td>Coût</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($a, 0, ',', '.') }}</td>
        <td>{{ number_format($b, 0, ',', '.') }}</td>
        <td>{{ number_format($c, 0, ',', '.') }}</td>
        <td>{{ number_format($d, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Additions/Rajouts</td>
        <td></td>
        <td>{{ number_format($e, 0, ',', '.') }}</td>
        <td>{{ number_format($f, 0, ',', '.') }}</td>
        <td>{{ number_format($g, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($i, 0, ',', '.') }}</td>
        <td>{{ number_format($j, 0, ',', '.') }}</td>
        <td>{{ number_format($k, 0, ',', '.') }}</td>
        <td>{{ number_format($l, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Amortissement & pertes liées à la baisse de la valeur</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td><br></td>
        <td>{{ number_format($m, 0, ',', '.') }}</td>
        <td>{{ number_format($n, 0, ',', '.') }}</td>
        <td>{{ number_format($o, 0, ',', '.') }}</td>
        <td>{{ number_format($p, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Amortissements</td>
        <td></td>
        <td>{{ number_format($q, 0, ',', '.') }}</td>
        <td>{{ number_format($r, 0, ',', '.') }}</td>
        <td>{{ number_format($s, 0, ',', '.') }}</td>
        <td>{{ number_format($t, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>Pertes liées à la dévaluation</td>
        <td></td>
        <td>{{ number_format($u, 0, ',', '.') }}</td>
        <td>{{ number_format($v, 0, ',', '.') }}</td>
        <td>{{ number_format($w, 0, ',', '.') }}</td>
        <td>{{ number_format($x, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($y, 0, ',', '.') }}</td>
        <td>{{ number_format($z, 0, ',', '.') }}</td>
        <td>{{ number_format($a1, 0, ',', '.') }}</td>
        <td>{{ number_format($b1, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($c1, 0, ',', '.') }}</td>
        <td>{{ number_format($d1, 0, ',', '.') }}</td>
        <td>{{ number_format($e1, 0, ',', '.') }}</td>
        <td>{{ number_format($f1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Valeur comptable (valeur nette comptable)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($k1, 0, ',', '.') }}</td>
        <td>{{ number_format($l1, 0, ',', '.') }}</td>
        <td>{{ number_format($m1, 0, ',', '.') }}</td>
        <td>{{ number_format($n1, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($o1, 0, ',', '.') }}</td>
        <td>{{ number_format($p1, 0, ',', '.') }}</td>
        <td>{{ number_format($q1, 0, ',', '.') }}</td>
        <td>{{ number_format($r1, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>
  <h3>Note 2 : Immobilisations Corporelles (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Notes</th>
        <th>Sites & Terrains</th>
        <th>Bâtiments</th>
        <th>Mobilier</th>
        <th>Equipement & Machines</th>
        <th>Véhicules</th>
        <th>En Construction</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
    <tr style="background-color:#ccffcc" >
        <td>Coût</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($s1, 0, ',', '.') }}</td>
        <td>{{ number_format($t1, 0, ',', '.') }}</td>
        <td>{{ number_format($u1, 0, ',', '.') }}</td>
        <td>{{ number_format($v1, 0, ',', '.') }}</td>
        <td>{{ number_format($w1, 0, ',', '.') }}</td>
        <td>{{ number_format($x1, 0, ',', '.') }}</td>
        <td>{{ number_format($y1, 0, ',', '.') }}</td>
        <td>{{ number_format($z1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Additions/Rajouts</td>
        <td></td>
        <td>{{ number_format($a2, 0, ',', '.') }}</td>
        <td>{{ number_format($b2, 0, ',', '.') }}</td>
        <td>{{ number_format($c2, 0, ',', '.') }}</td>
        <td>{{ number_format($d2, 0, ',', '.') }}</td>
        <td>{{ number_format($e2, 0, ',', '.') }}</td>
        <td>{{ number_format($f2, 0, ',', '.') }}</td>
        <td>{{ number_format($g2, 0, ',', '.') }}</td>
        <td>{{ number_format($h2, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($i2, 0, ',', '.') }}</td>
        <td>{{ number_format($j2, 0, ',', '.') }}</td>
        <td>{{ number_format($k2, 0, ',', '.') }}</td>
        <td>{{ number_format($l2, 0, ',', '.') }}</td>
        <td>{{ number_format($m2, 0, ',', '.') }}</td>
        <td>{{ number_format($n2, 0, ',', '.') }}</td>
        <td>{{ number_format($o2, 0, ',', '.') }}</td>
        <td>{{ number_format($p2, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Transfert de/à l’immeuble de placement</td>
        <td></td>
        <td>{{ number_format($q2, 0, ',', '.') }}</td>
        <td>{{ number_format($r2, 0, ',', '.') }}</td>
        <td>{{ number_format($s2, 0, ',', '.') }}</td>
        <td>{{ number_format($t2, 0, ',', '.') }}</td>
        <td>{{ number_format($u2, 0, ',', '.') }}</td>
        <td>{{ number_format($v2, 0, ',', '.') }}</td>
        <td>{{ number_format($w2, 0, ',', '.') }}</td>
        <td>{{ number_format($x2, 0, ',', '.') }}</td>
      </tr>
     
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($y2, 0, ',', '.') }}</td>
        <td>{{ number_format($z2, 0, ',', '.') }}</td>
        <td>{{ number_format($a3, 0, ',', '.') }}</td>
        <td>{{ number_format($b3, 0, ',', '.') }}</td>
        <td>{{ number_format($c3, 0, ',', '.') }}</td>
        <td>{{ number_format($d3, 0, ',', '.') }}</td>
        <td>{{ number_format($e3, 0, ',', '.') }}</td>
        <td>{{ number_format($f3, 0, ',', '.') }}</td>
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
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Amortissement & pertes liées à la devaluation</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td><br></td>
        <td>{{ number_format($g3, 0, ',', '.') }}</td>
        <td>{{ number_format($h3, 0, ',', '.') }}</td>
        <td>{{ number_format($i3, 0, ',', '.') }}</td>
        <td>{{ number_format($j3, 0, ',', '.') }}</td>
        <td>{{ number_format($k3, 0, ',', '.') }}</td>
        <td>{{ number_format($l3, 0, ',', '.') }}</td>
        <td>{{ number_format($m3, 0, ',', '.') }}</td>
        <td>{{ number_format($n3, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Annuite d Amortissements</td>
        <td></td>
        <td>{{ number_format($o3, 0, ',', '.') }}</td>
        <td>{{ number_format($p3, 0, ',', '.') }}</td>
        <td>{{ number_format($q3, 0, ',', '.') }}</td>
        <td>{{ number_format($r3, 0, ',', '.') }}</td>
        <td>{{ number_format($s3, 0, ',', '.') }}</td>
        <td>{{ number_format($t3, 0, ',', '.') }}</td>
        <td>{{ number_format($u3, 0, ',', '.') }}</td>
        <td>{{ number_format($v3, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>Pertes liées à la dévaluation</td>
        <td></td>
        <td>{{ number_format($w3, 0, ',', '.') }}</td>
        <td>{{ number_format($x3, 0, ',', '.') }}</td>
        <td>{{ number_format($y3, 0, ',', '.') }}</td>
        <td>{{ number_format($z3, 0, ',', '.') }}</td>
        <td>{{ number_format($a4, 0, ',', '.') }}</td>
        <td>{{ number_format($b4, 0, ',', '.') }}</td>
        <td>{{ number_format($c4, 0, ',', '.') }}</td>
        <td>{{ number_format($d4, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($e4, 0, ',', '.') }}</td>
        <td>{{ number_format($f4, 0, ',', '.') }}</td>
        <td>{{ number_format($g4, 0, ',', '.') }}</td>
        <td>{{ number_format($h4, 0, ',', '.') }}</td>
        <td>{{ number_format($i4, 0, ',', '.') }}</td>
        <td>{{ number_format($j4, 0, ',', '.') }}</td>
        <td>{{ number_format($k4, 0, ',', '.') }}</td>
        <td>{{ number_format($l4, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Appreciation</td>
        <td></td>
        <td>{{ number_format($m4, 0, ',', '.') }}</td>
        <td>{{ number_format($n4, 0, ',', '.') }}</td>
        <td>{{ number_format($o4, 0, ',', '.') }}</td>
        <td>{{ number_format($p4, 0, ',', '.') }}</td>
        <td>{{ number_format($q4, 0, ',', '.') }}</td>
        <td>{{ number_format($r4, 0, ',', '.') }}</td>
        <td>{{ number_format($s4, 0, ',', '.') }}</td>
        <td>{{ number_format($t4, 0, ',', '.') }}</td>
      </tr>

      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($u4, 0, ',', '.') }}</td>
        <td>{{ number_format($v4, 0, ',', '.') }}</td>
        <td>{{ number_format($w4, 0, ',', '.') }}</td>
        <td>{{ number_format($x4, 0, ',', '.') }}</td>
        <td>{{ number_format($y4, 0, ',', '.') }}</td>
        <td>{{ number_format($z4, 0, ',', '.') }}</td>
        <td>{{ number_format($a5, 0, ',', '.') }}</td>
        <td>{{ number_format($b5, 0, ',', '.') }}</td>
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
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Valeur comptable (valeur nette comptable)</td>
        <td></td>
        <td>{{ number_format($c5, 0, ',', '.') }}</td>
        <td>{{ number_format($d5, 0, ',', '.') }}</td>
        <td>{{ number_format($e5, 0, ',', '.') }}</td>
        <td>{{ number_format($f5, 0, ',', '.') }}</td>
        <td>{{ number_format($g5, 0, ',', '.') }}</td>
        <td>{{ number_format($h5, 0, ',', '.') }}</td>
        <td>{{ number_format($i5, 0, ',', '.') }}</td>
        <td>{{ number_format($j5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($k5, 0, ',', '.') }}</td>
        <td>{{ number_format($l5, 0, ',', '.') }}</td>
        <td>{{ number_format($m5, 0, ',', '.') }}</td>
        <td>{{ number_format($n5, 0, ',', '.') }}</td>
        <td>{{ number_format($o5, 0, ',', '.') }}</td>
        <td>{{ number_format($p5, 0, ',', '.') }}</td>
        <td>{{ number_format($q5, 0, ',', '.') }}</td>
        <td>{{ number_format($r5, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($s5, 0, ',', '.') }}</td>
        <td>{{ number_format($t5, 0, ',', '.') }}</td>
        <td>{{ number_format($u5, 0, ',', '.') }}</td>
        <td>{{ number_format($v5, 0, ',', '.') }}</td>
        <td>{{ number_format($w5, 0, ',', '.') }}</td>
        <td>{{ number_format($x5, 0, ',', '.') }}</td>
        <td>{{ number_format($y5, 0, ',', '.') }}</td>
        <td>{{ number_format($z5, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>
  <h3>Note 3 : Immeuble de Placement (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Notes</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr style="background-color:#ccffcc" >
        <td>Coût</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($a6, 0, ',', '.') }}</td>
        <td>{{ number_format($b6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Additions/Rajouts</td>
        <td></td>
        <td>{{ number_format($c6, 0, ',', '.') }}</td>
        <td>{{ number_format($d6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Transfert de/à immobilisation corporelle</td>
        <td></td>
        <td>{{ number_format($e6, 0, ',', '.') }}</td>
        <td>{{ number_format($f6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Transfert au registre d’inventaire</td>
        <td></td>
        <td>{{ number_format($g6, 0, ',', '.') }}</td>
        <td>{{ number_format($h6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($i6, 0, ',', '.') }}</td>
        <td>{{ number_format($j6, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($k6, 0, ',', '.') }}</td>
        <td>{{ number_format($l6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Amortissement & pertes liées à la devaluation</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($m6, 0, ',', '.') }}</td>
        <td>{{ number_format($n6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Annuite d Amortissements</td>
        <td></td>
        <td>{{ number_format($o6, 0, ',', '.') }}</td>
        <td>{{ number_format($p6, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>Pertes liées à la dévaluation</td>
        <td></td>
        <td>{{ number_format($q6, 0, ',', '.') }}</td>
        <td>{{ number_format($r6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($s6, 0, ',', '.') }}</td>
        <td>{{ number_format($t6, 0, ',', '.') }}</td>
      </tr>

      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($u6, 0, ',', '.') }}</td>
        <td>{{ number_format($v6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Valeur comptable (valeur nette comptable)</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($w6, 0, ',', '.') }}</td>
        <td>{{ number_format($x6, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($y6, 0, ',', '.') }}</td>
        <td>{{ number_format($z6, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 4 : Actifs Biologiques (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Notes</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Au 1er Janvier</td>
        <td></td>
        <td>{{ number_format($a7, 0, ',', '.') }}</td>
        <td>{{ number_format($b7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Additions/Rajouts</td>
        <td></td>
        <td>{{ number_format($c7, 0, ',', '.') }}</td>
        <td>{{ number_format($d7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cessions</td>
        <td></td>
        <td>{{ number_format($e7, 0, ',', '.') }}</td>
        <td>{{ number_format($f7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Changement en juste valeur</td>
        <td></td>
        <td>{{ number_format($g7, 0, ',', '.') }}</td>
        <td>{{ number_format($h7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Baisse en raison de la récolte</td>
        <td></td>
        <td>{{ number_format($i7, 0, ',', '.') }}</td>
        <td>{{ number_format($j7, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td></td>
        <td>{{ number_format($k7, 0, ',', '.') }}</td>
        <td>{{ number_format($l7, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 5 : Inventaires, Stocks (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Notes</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Consommables</td>
        <td></td>
        <td>{{ number_format($m7, 0, ',', '.') }}</td>
        <td>{{ number_format($n7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Matières premières</td>
        <td></td>
        <td>{{ number_format($o7, 0, ',', '.') }}</td>
        <td>{{ number_format($p7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Travaux (ou produits) en cours</td>
        <td></td>
        <td>{{ number_format($q7, 0, ',', '.') }}</td>
        <td>{{ number_format($r7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Produits finis</td>
        <td></td>
        <td>{{ number_format($s7, 0, ',', '.') }}</td>
        <td>{{ number_format($t7, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td></td>
        <td>{{ number_format($u7, 0, ',', '.') }}</td>
        <td>{{ number_format($v7, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 6 : Créances (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Débiteurs bénéficiaires SOS</td>
        <td>{{ number_format($w7, 0, ',', '.') }}</td>
        <td>{{ number_format($x7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Débiteurs employés SOS</td>
        <td>{{ number_format($y7, 0, ',', '.') }}</td>
        <td>{{ number_format($z7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Débiteurs non SOS</td>
        <td>{{ number_format($a8, 0, ',', '.') }}</td>
        <td>{{ number_format($b8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres créances</td>
        <td>{{ number_format($c8, 0, ',', '.') }}</td>
        <td>{{ number_format($d8, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($e8, 0, ',', '.') }}</td>
        <td>{{ number_format($f8, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 7 : Trésorerie et équivalents trésorerie (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Solde Caisse au 31 Décembre</td>
        <td>{{ number_format($g8, 0, ',', '.') }}</td>
        <td>{{ number_format($h8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Solde Banque au 31 Décembre</td>
        <td>{{ number_format($i8, 0, ',', '.') }}</td>
        <td>{{ number_format($j8, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($k8, 0, ',', '.') }}</td>
        <td>{{ number_format($l8, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 8 : Fonds Accumulés (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr style="background-color:#ccffcc" >
        <td>Non Restreints</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td>{{ number_format($m8, 0, ',', '.') }}</td>
        <td>{{ number_format($n8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Gain/perte au titre de l’exercice</td>
        <td>{{ number_format($o8, 0, ',', '.') }}</td>
        <td>{{ number_format($p8, 0, ',', '.') }}</td>
      </tr>
      
      <tr>
        <td>Transfert net à partir des fonds Restreints</td>
        <td>{{ number_format($q8, 0, ',', '.') }}</td>
        <td>{{ number_format($r8, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td>{{ number_format($s8, 0, ',', '.') }}</td>
        <td>{{ number_format($t8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td>Restreints</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Au 1er Janvier</td>
        <td>{{ number_format($m8, 0, ',', '.') }}</td>
        <td>{{ number_format($n8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Gain/perte au titre de l’exercice</td>
        <td>{{ number_format($o8, 0, ',', '.') }}</td>
        <td>{{ number_format($p8, 0, ',', '.') }}</td>
      </tr>
      
      <tr>
        <td>Transfert net à partir des fonds non Restreints</td>
        <td>{{ number_format($q8, 0, ',', '.') }}</td>
        <td>{{ number_format($r8, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Au 31 Décembre</td>
        <td>{{ number_format($s8, 0, ',', '.') }}</td>
        <td>{{ number_format($t8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
        <td></td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total Fonds Accumulés</td>
        <td>{{ number_format($u8, 0, ',', '.') }}</td>
        <td>{{ number_format($v8, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>
  <h3>Note 9 : Fonds de Dépôt (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th>Cadeaux en espèces des Enfants</th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Solde au 1er Janvier</td>
        <td>{{ number_format($w8, 0, ',', '.') }}</td>
        <td>{{ number_format($x8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cadeaux en espèces reçu durant l'année</td>
        <td>{{ number_format($y8, 0, ',', '.') }}</td>
        <td>{{ number_format($z8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cadeaux en espèces distribué durant l'année</td>
        <td>{{ number_format($a9, 0, ',', '.') }}</td>
        <td>{{ number_format($b9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Intérêts bancaires</td>
        <td>{{ number_format($b9, 0, ',', '.') }}</td>
        <td>{{ number_format($d9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Frais bancaires</td>
        <td>{{ number_format($e9, 0, ',', '.') }}</td>
        <td>{{ number_format($f9, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($g9, 0, ',', '.') }}</td>
        <td>{{ number_format($h9, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 10 : Provisions à Long Terme (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Fonds affectés à la retraite</td>
        <td>{{ number_format($i9, 0, ',', '.') }}</td>
        <td>{{ number_format($j9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Fonds affectés aux licenciements</td>
        <td>{{ number_format($k9, 0, ',', '.') }}</td>
        <td>{{ number_format($l9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres Fonds</td>
        <td>{{ number_format($m9, 0, ',', '.') }}</td>
        <td>{{ number_format($n9, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($o9, 0, ',', '.') }}</td>
        <td>{{ number_format($p9, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Note 11 : Passifs à Court Terme (en LCY)</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Fournisseurs SOS</td>
        <td>{{ number_format($q9, 0, ',', '.') }}</td>
        <td>{{ number_format($r9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Fournisseurs non SOS</td>
        <td>{{ number_format($s9, 0, ',', '.') }}</td>
        <td>{{ number_format($t9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres dettes</td>
        <td>{{ number_format($u9, 0, ',', '.') }}</td>
        <td>{{ number_format($v9, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($w9, 0, ',', '.') }}</td>
        <td>{{ number_format($x9, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Produits comptabilisés d'avance</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Produits comptabilisés d'avance</td>
        <td>{{ number_format($y9, 0, ',', '.') }}</td>
        <td>{{ number_format($z9, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td>{{ number_format($a10, 0, ',', '.') }}</td>
        <td>{{ number_format($b10, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td><br></td>
        <td>{{ number_format($c10, 0, ',', '.') }}</td>
        <td>{{ number_format($d10, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($e10, 0, ',', '.') }}</td>
        <td>{{ number_format($f10, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>

  <h3>Autres dettes</h3>
  <table class="table table-bordered">
    <thead>
      <tr style="background-color:#ccffcc" >
        <th></th>
        <th>Total exercice en cours</th>
        <th>Total exercice précédent</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Paie</td>
        <td>{{ number_format($g1, 0, ',', '.') }}</td>
        <td>{{ number_format($h1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Remboursement autres unités</td>
        <td>{{ number_format($i1, 0, ',', '.') }}</td>
        <td>{{ number_format($j1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Fonds Restrients</td>
        <td>{{ number_format($g10, 0, ',', '.') }}</td>
        <td>{{ number_format($h10, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($i10, 0, ',', '.') }}</td>
        <td>{{ number_format($j10, 0, ',', '.') }}</td>
      </tr>
    </tbody>
  </table>