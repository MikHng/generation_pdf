<!-- resources/views/partials/tableaunoteseaf.blade.php -->
<table class="table table-bordered" >
    <thead>
    <tr style="background-color:#ccffcc" >
        <td></td>
        <th></th>
        <th>Exercice en cours</th>
        <th></th>
        <th></th>
        <th>Exercice précédent</th>
        <th></th>
      </tr>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Non Restreints</th>
        <th>Restreints</th>
        <th>Total</th>
        <th>Non Restreints</th>
        <th>Restreints</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Contributions des parrainages</td>
        <td>{{ number_format($a, 0, ',', '.') }}</td>
        <td>{{ number_format($b, 0, ',', '.') }}</td>
        <td>{{ number_format($c, 0, ',', '.') }}</td>
        <td>{{ number_format($d, 0, ',', '.') }}</td>
        <td>{{ number_format($e, 0, ',', '.') }}</td>
        <td>{{ number_format($f, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>HGFD</td>
        <td>{{ number_format($g, 0, ',', '.') }}</td>
        <td>{{ number_format($h, 0, ',', '.') }}</td>
        <td>{{ number_format($i, 0, ',', '.') }}</td>
        <td>{{ number_format($j, 0, ',', '.') }}</td>
        <td>{{ number_format($k, 0, ',', '.') }}</td>
        <td>{{ number_format($l, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Kinderdorf e.V.</td>
        <td>{{ number_format($m, 0, ',', '.') }}</td>
        <td>{{ number_format($n, 0, ',', '.') }}</td>
        <td>{{ number_format($o, 0, ',', '.') }}</td>
        <td>{{ number_format($p, 0, ',', '.') }}</td>
        <td>{{ number_format($q, 0, ',', '.') }}</td>
        <td>{{ number_format($r, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Denmark</td>
        <td>{{ number_format($s, 0, ',', '.') }}</td>
        <td>{{ number_format($t, 0, ',', '.') }}</td>
        <td>{{ number_format($u, 0, ',', '.') }}</td>
        <td>{{ number_format($v, 0, ',', '.') }}</td>
        <td>{{ number_format($w, 0, ',', '.') }}</td>
        <td>{{ number_format($x, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Sweden</td>
        <td>{{ number_format($y, 0, ',', '.') }}</td>
        <td>{{ number_format($z, 0, ',', '.') }}</td>
        <td>{{ number_format($a1, 0, ',', '.') }}</td>
        <td>{{ number_format($b1, 0, ',', '.') }}</td>
        <td>{{ number_format($c1, 0, ',', '.') }}</td>
        <td>{{ number_format($d1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Transfer fr. SOS Ass. via STS</td>
        <td>{{ number_format($e1, 0, ',', '.') }}</td>
        <td>{{ number_format($f1, 0, ',', '.') }}</td>
        <td>{{ number_format($g1, 0, ',', '.') }}</td>
        <td>{{ number_format($h1, 0, ',', '.') }}</td>
        <td>{{ number_format($i1, 0, ',', '.') }}</td>
        <td>{{ number_format($j1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>...</td>
        <td>{{ number_format($k1, 0, ',', '.') }}</td>
        <td>{{ number_format($l1, 0, ',', '.') }}</td>
        <td>{{ number_format($m1, 0, ',', '.') }}</td>
        <td>{{ number_format($n1, 0, ',', '.') }}</td>
        <td>{{ number_format($o1, 0, ',', '.') }}</td>
        <td>{{ number_format($p1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dons spéciaux via le HGFD</td>
        <td>{{ number_format($q1, 0, ',', '.') }}</td>
        <td>{{ number_format($r1, 0, ',', '.') }}</td>
        <td>{{ number_format($s1, 0, ',', '.') }}</td>
        <td>{{ number_format($t1, 0, ',', '.') }}</td>
        <td>{{ number_format($u1, 0, ',', '.') }}</td>
        <td>{{ number_format($v1, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dons spéciaux via SOS-KDEV</td>
        <td>{{ number_format($w1, 0, ',', '.') }}</td>
        <td>{{ number_format($x1, 0, ',', '.') }}</td>
        <td>{{ number_format($y1, 0, ',', '.') }}</td>
        <td>{{ number_format($z1, 0, ',', '.') }}</td>
        <td>{{ number_format($a2, 0, ',', '.') }}</td>
        <td>{{ number_format($b2, 0, ',', '.') }}</td>
      </tr>     
      <tr>
        <td>Don. from Abroad SOS-SE</td>
        <td>{{ number_format($c2, 0, ',', '.') }}</td>
        <td>{{ number_format($d2, 0, ',', '.') }}</td>
        <td>{{ number_format($e2, 0, ',', '.') }}</td>
        <td>{{ number_format($f2, 0, ',', '.') }}</td>
        <td>{{ number_format($g2, 0, ',', '.') }}</td>
        <td>{{ number_format($h2, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>  Don. grant projects SOS-LU</td>
        <td>{{ number_format($c2, 0, ',', '.') }}</td>
        <td>{{ number_format($d2, 0, ',', '.') }}</td>
        <td>{{ number_format($e2, 0, ',', '.') }}</td>
        <td>{{ number_format($f2, 0, ',', '.') }}</td>
        <td>{{ number_format($g2, 0, ',', '.') }}</td>
        <td>{{ number_format($h2, 0, ',', '.') }}</td>
      </tr>

      <tr>
        <td>...</td>
        <td>{{ number_format($c2, 0, ',', '.') }}</td>
        <td>{{ number_format($d2, 0, ',', '.') }}</td>
        <td>{{ number_format($e2, 0, ',', '.') }}</td>
        <td>{{ number_format($f2, 0, ',', '.') }}</td>
        <td>{{ number_format($g2, 0, ',', '.') }}</td>
        <td>{{ number_format($h2, 0, ',', '.') }}</td>
      </tr>

      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($i2, 0, ',', '.') }}</td>
        <td>{{ number_format($j2, 0, ',', '.') }}</td>
        <td>{{ number_format($k2, 0, ',', '.') }}</td>
        <td>{{ number_format($l2, 0, ',', '.') }}</td>
        <td>{{ number_format($m2, 0, ',', '.') }}</td>
        <td>{{ number_format($n2, 0, ',', '.') }}</td>
      </tr>
  </table>
      <br><br>
  <center>
      <h5>Note 2 : Recettes des APS pour Dépenses de Construction (CC)</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Eec Non Restreints</th>
        <th>Eec Restreints</th>
        <th>Eec Total</th>
        <th>Ep Non Restreints</th>
        <th>Ep Restreints</th>
        <th>Ep Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>HGFD</td>
        <td>{{ number_format($o2, 0, ',', '.') }}</td>
        <td>{{ number_format($p2, 0, ',', '.') }}</td>
        <td>{{ number_format($q2, 0, ',', '.') }}</td>
        <td>{{ number_format($r2, 0, ',', '.') }}</td>
        <td>{{ number_format($s2, 0, ',', '.') }}</td>
        <td>{{ number_format($t2, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Kinderdorf e.V.</td>
        <td>{{ number_format($u2, 0, ',', '.') }}</td>
        <td>{{ number_format($v2, 0, ',', '.') }}</td>
        <td>{{ number_format($w2, 0, ',', '.') }}</td>
        <td>{{ number_format($x2, 0, ',', '.') }}</td>
        <td>{{ number_format($y2, 0, ',', '.') }}</td>
        <td>{{ number_format($z2, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Denmark</td>
        <td>{{ number_format($a3, 0, ',', '.') }}</td>
        <td>{{ number_format($b3, 0, ',', '.') }}</td>
        <td>{{ number_format($c3, 0, ',', '.') }}</td>
        <td>{{ number_format($d3, 0, ',', '.') }}</td>
        <td>{{ number_format($e3, 0, ',', '.') }}</td>
        <td>{{ number_format($f3, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Sweden</td>
        <td>{{ number_format($g3, 0, ',', '.') }}</td>
        <td>{{ number_format($h3, 0, ',', '.') }}</td>
        <td>{{ number_format($i3, 0, ',', '.') }}</td>
        <td>{{ number_format($j3, 0, ',', '.') }}</td>
        <td>{{ number_format($k3, 0, ',', '.') }}</td>
        <td>{{ number_format($l3, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Norway</td>
        <td>{{ number_format($m3, 0, ',', '.') }}</td>
        <td>{{ number_format($n3, 0, ',', '.') }}</td>
        <td>{{ number_format($o3, 0, ',', '.') }}</td>
        <td>{{ number_format($p3, 0, ',', '.') }}</td>
        <td>{{ number_format($q3, 0, ',', '.') }}</td>
        <td>{{ number_format($r3, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>SOS Netherlands</td>
        <td>{{ number_format($s3, 0, ',', '.') }}</td>
        <td>{{ number_format($t3, 0, ',', '.') }}</td>
        <td>{{ number_format($u3, 0, ',', '.') }}</td>
        <td>{{ number_format($v3, 0, ',', '.') }}</td>
        <td>{{ number_format($w3, 0, ',', '.') }}</td>
        <td>{{ number_format($x3, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Subsidies for CC SOS-FR</td>
        <td>{{ number_format($y3, 0, ',', '.') }}</td>
        <td>{{ number_format($z3, 0, ',', '.') }}</td>
        <td>{{ number_format($a4, 0, ',', '.') }}</td>
        <td>{{ number_format($b4, 0, ',', '.') }}</td>
        <td>{{ number_format($c4, 0, ',', '.') }}</td>
        <td>{{ number_format($d4, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>...</td>
        <td>{{ number_format($e4, 0, ',', '.') }}</td>
        <td>{{ number_format($f4, 0, ',', '.') }}</td>
        <td>{{ number_format($g4, 0, ',', '.') }}</td>
        <td>{{ number_format($h4, 0, ',', '.') }}</td>
        <td>{{ number_format($i4, 0, ',', '.') }}</td>
        <td>{{ number_format($j4, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($k4, 0, ',', '.') }}</td>
        <td>{{ number_format($l4, 0, ',', '.') }}</td>
        <td>{{ number_format($m4, 0, ',', '.') }}</td>
        <td>{{ number_format($n4, 0, ',', '.') }}</td>
        <td>{{ number_format($o4, 0, ',', '.') }}</td>
        <td>{{ number_format($p4, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 3 : Recettes de Collecte de Fonds (Fundraising)</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Eec Non Restreints</th>
        <th>Eec Restreints</th>
        <th>Eec Total</th>
        <th>Ep Non Restreints</th>
        <th>Ep Restreints</th>
        <th>Ep Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Dons en général & cadeaux individuels</td>
        <td>{{ number_format($q4, 0, ',', '.') }}</td>
        <td>{{ number_format($r4, 0, ',', '.') }}</td>
        <td>{{ number_format($s4, 0, ',', '.') }}</td>
        <td>{{ number_format($t4, 0, ',', '.') }}</td>
        <td>{{ number_format($u4, 0, ',', '.') }}</td>
        <td>{{ number_format($v4, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Parrains locaux/Dons réguliers</td>
        <td>{{ number_format($w4, 0, ',', '.') }}</td>
        <td>{{ number_format($x4, 0, ',', '.') }}</td>
        <td>{{ number_format($y4, 0, ',', '.') }}</td>
        <td>{{ number_format($z4, 0, ',', '.') }}</td>
        <td>{{ number_format($a5, 0, ',', '.') }}</td>
        <td>{{ number_format($b5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Entreprises & grands donateurs </td>
        <td>{{ number_format($c5, 0, ',', '.') }}</td>
        <td>{{ number_format($d5, 0, ',', '.') }}</td>
        <td>{{ number_format($e5, 0, ',', '.') }}</td>
        <td>{{ number_format($f5, 0, ',', '.') }}</td>
        <td>{{ number_format($g5, 0, ',', '.') }}</td>
        <td>{{ number_format($h5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Legs &  Héritages</td>
        <td>{{ number_format($i5, 0, ',', '.') }}</td>
        <td>{{ number_format($j5, 0, ',', '.') }}</td>
        <td>{{ number_format($k5, 0, ',', '.') }}</td>
        <td>{{ number_format($l5, 0, ',', '.') }}</td>
        <td>{{ number_format($m5, 0, ',', '.') }}</td>
        <td>{{ number_format($n5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Fondations & autres institutions</td>
        <td>{{ number_format($o5, 0, ',', '.') }}</td>
        <td>{{ number_format($p5, 0, ',', '.') }}</td>
        <td>{{ number_format($q5, 0, ',', '.') }}</td>
        <td>{{ number_format($r5, 0, ',', '.') }}</td>
        <td>{{ number_format($s5, 0, ',', '.') }}</td>
        <td>{{ number_format($t5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Manifestations</td>
        <td>{{ number_format($u5, 0, ',', '.') }}</td>
        <td>{{ number_format($v5, 0, ',', '.') }}</td>
        <td>{{ number_format($w5, 0, ',', '.') }}</td>
        <td>{{ number_format($x5, 0, ',', '.') }}</td>
        <td>{{ number_format($y5, 0, ',', '.') }}</td>
        <td>{{ number_format($z5, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Marchandisage & Concession de licence</td>
        <td>{{ number_format($a6, 0, ',', '.') }}</td>
        <td>{{ number_format($b6, 0, ',', '.') }}</td>
        <td>{{ number_format($c6, 0, ',', '.') }}</td>
        <td>{{ number_format($d6, 0, ',', '.') }}</td>
        <td>{{ number_format($e6, 0, ',', '.') }}</td>
        <td>{{ number_format($f6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dons en nature de source privée</td>
        <td>{{ number_format($g6, 0, ',', '.') }}</td>
        <td>{{ number_format($h6, 0, ',', '.') }}</td>
        <td>{{ number_format($i6, 0, ',', '.') }}</td>
        <td>{{ number_format($j6, 0, ',', '.') }}</td>
        <td>{{ number_format($k6, 0, ',', '.') }}</td>
        <td>{{ number_format($l6, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dons directs de l'étranger</td>
        <td>{{ number_format($m6, 0, ',', '.') }}</td>
        <td>{{ number_format($n6, 0, ',', '.') }}</td>
        <td>{{ number_format($o6, 0, ',', '.') }}</td>
        <td>{{ number_format($p6, 0, ',', '.') }}</td>
        <td>{{ number_format($q6, 0, ',', '.') }}</td>
        <td>{{ number_format($r6, 0, ',', '.') }}</td>
      </tr> 
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($s6, 0, ',', '.') }}</td>
        <td>{{ number_format($t6, 0, ',', '.') }}</td>
        <td>{{ number_format($u6, 0, ',', '.') }}</td>
        <td>{{ number_format($v6, 0, ',', '.') }}</td>
        <td>{{ number_format($w6, 0, ',', '.') }}</td>
        <td>{{ number_format($x6, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 4 : Recettes Locales du Gouvernement et Autres </h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Eec Non Restreints</th>
        <th>Eec Restreints</th>
        <th>Eec Total</th>
        <th>Ep Non Restreints</th>
        <th>Ep Restreints</th>
        <th>Ep Total</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>Subventions du gouvernement</td>
        <td>{{ number_format($y6, 0, ',', '.') }}</td>
        <td>{{ number_format($z6, 0, ',', '.') }}</td>
        <td>{{ number_format($a7, 0, ',', '.') }}</td>
        <td>{{ number_format($b7, 0, ',', '.') }}</td>
        <td>{{ number_format($c7, 0, ',', '.') }}</td>
        <td>{{ number_format($d7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dons en nature de source publique</td>
        <td>{{ number_format($e7, 0, ',', '.') }}</td>
        <td>{{ number_format($f7, 0, ',', '.') }}</td>
        <td>{{ number_format($g7, 0, ',', '.') }}</td>
        <td>{{ number_format($h7, 0, ',', '.') }}</td>
        <td>{{ number_format($i7, 0, ',', '.') }}</td>
        <td>{{ number_format($j7, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total</td>
        <td>{{ number_format($k7, 0, ',', '.') }}</td>
        <td>{{ number_format($l7, 0, ',', '.') }}</td>
        <td>{{ number_format($m7, 0, ',', '.') }}</td>
        <td>{{ number_format($n7, 0, ',', '.') }}</td>
        <td>{{ number_format($o7, 0, ',', '.') }}</td>
        <td>{{ number_format($p7, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 5 : Recettes d'Exploitation </h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cotisations</td>
        <td>{{ number_format($q7, 0, ',', '.') }}</td>
        <td>{{ number_format($r7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Recettes</td>
        <td>{{ number_format($s7, 0, ',', '.') }}</td>
        <td>{{ number_format($t7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Cotisations d'autres institutions SOS</td>
        <td>{{ number_format($u7, 0, ',', '.') }}</td>
        <td>{{ number_format($v7, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($w7, 0, ',', '.') }}</td>
        <td>{{ number_format($x7, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 6 : Autres Recettes Locales </h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Vente des actifs</td>
        <td>{{ number_format($y7, 0, ',', '.') }}</td>
        <td>{{ number_format($z7, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Loyers</td>
        <td>{{ number_format($a8, 0, ',', '.') }}</td>
        <td>{{ number_format($b8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Intérêts bancaires (crediteurs)</td>
        <td>{{ number_format($c8, 0, ',', '.') }}</td>
        <td>{{ number_format($d8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Remboursement/Reversement TVA</td>
        <td>{{ number_format($e8, 0, ',', '.') }}</td>
        <td>{{ number_format($f8, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Recettes diversesS</td>
        <td>{{ number_format($g8, 0, ',', '.') }}</td>
        <td>{{ number_format($h8, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($i8, 0, ',', '.') }}</td>
        <td>{{ number_format($j8, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 7 : Dépenses Projet/Programme</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#c0c0c0">
        <td></td>
        <th>Total</th>
        <th>Frais d'Exploitation Courants</th>
        <th>Frais du Personnel</th>
        <th>Dépenses Administratives</th>
      </tr>
    </thead>
    <tbody>
      <tr style="background-color:#c0c0c0">
        <td>Localité 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Assistance Familiale à Long Terme</td>
        <td>{{ number_format($k8, 0, ',', '.') }}</td>
        <td>({{ number_format($l8, 0, ',', '.') }})</td>
        <td>({{ number_format($m8, 0, ',', '.') }})</td>
        <td>({{ number_format($n8, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Programmes d'Education</td>
        <td>({{ number_format($o8, 0, ',', '.') }})</td>
        <td>({{ number_format($p8, 0, ',', '.') }})</td>
        <td>({{ number_format($q8, 0, ',', '.') }})</td>
        <td>({{ number_format($r8, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>PRF</td>
        <td>({{ number_format($s8, 0, ',', '.') }})</td>
        <td>({{ number_format($t8, 0, ',', '.') }})</td>
        <td>({{ number_format($u8, 0, ',', '.') }})</td>
        <td>({{ number_format($v8, 0, ',', '.') }})</td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Total Localité 1</td>
        <td>({{ number_format($w8, 0, ',', '.') }})</td>
        <td>({{ number_format($x8, 0, ',', '.') }})</td>
        <td>({{ number_format($y8, 0, ',', '.') }})</td>
        <td>({{ number_format($z8, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Des Fonds Restreints</td>
        <td>{{ number_format($a9, 0, ',', '.') }}</td>
        <td>{{ number_format($b9, 0, ',', '.') }}</td>
        <td>{{ number_format($c9, 0, ',', '.') }}</td>
        <td>{{ number_format($d9, 0, ',', '.') }}</td>
      </tr>
      <tr>
      <td>Des Fonds non Restreints</td>
        <td>{{ number_format($e9, 0, ',', '.') }}</td>
        <td>{{ number_format($f9, 0, ',', '.') }}</td>
        <td>{{ number_format($g9, 0, ',', '.') }}</td>
        <td>{{ number_format($h9, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#c0c0c0">
        <td>Localité 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Assistance Familiale à Long Terme</td>
        <td>({{ number_format($i9, 0, ',', '.') }})</td>
        <td>({{ number_format($j9, 0, ',', '.') }})</td>
        <td>({{ number_format($k9, 0, ',', '.') }})</td>
        <td>({{ number_format($l9, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Programmes d'Education</td>
        <td>({{ number_format($m9, 0, ',', '.') }})</td>
        <td>({{ number_format($n9, 0, ',', '.') }})</td>
        <td>({{ number_format($o9, 0, ',', '.') }})</td>
        <td>({{ number_format($p9, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>PRF</td>
        <td>({{ number_format($q9, 0, ',', '.') }})</td>
        <td>({{ number_format($r9, 0, ',', '.') }})</td>
        <td>({{ number_format($s9, 0, ',', '.') }})</td>
        <td>({{ number_format($t9, 0, ',', '.') }})</td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Total Localité 2</td>
        <td>({{ number_format($u9, 0, ',', '.') }})</td>
        <td>({{ number_format($v9, 0, ',', '.') }})</td>
        <td>({{ number_format($w9, 0, ',', '.') }})</td>
        <td>({{ number_format($x9, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Des Fonds Restreints</td>
        <td>{{ number_format($y9, 0, ',', '.') }}</td>
        <td>{{ number_format($z9, 0, ',', '.') }}</td>
        <td>{{ number_format($a10, 0, ',', '.') }}</td>
        <td>{{ number_format($b10, 0, ',', '.') }}</td>
      </tr>
      <tr>
      <td>Des Fonds non Restreints</td>
        <td>{{ number_format($c10, 0, ',', '.') }}</td>
        <td>{{ number_format($d10, 0, ',', '.') }}</td>
        <td>{{ number_format($e10, 0, ',', '.') }}</td>
        <td>{{ number_format($f10, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#c0c0c0">
        <td>Localité 3</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Assistance Familiale à Long Terme</td>
        <td>{{ number_format($g10, 0, ',', '.') }}</td>
        <td>({{ number_format($h10, 0, ',', '.') }})</td>
        <td>({{ number_format($i10, 0, ',', '.') }})</td>
        <td>({{ number_format($j10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Programmes d'Education</td>
        <td>({{ number_format($k10, 0, ',', '.') }})</td>
        <td>({{ number_format($l10, 0, ',', '.') }})</td>
        <td>({{ number_format($m10, 0, ',', '.') }})</td>
        <td>({{ number_format($n10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>PRF</td>
        <td>({{ number_format($o10, 0, ',', '.') }})</td>
        <td>({{ number_format($p10, 0, ',', '.') }})</td>
        <td>({{ number_format($q10, 0, ',', '.') }})</td>
        <td>({{ number_format($r10, 0, ',', '.') }})</td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Total Localité 3</td>
        <td>({{ number_format($s10, 0, ',', '.') }})</td>
        <td>({{ number_format($t10, 0, ',', '.') }})</td>
        <td>({{ number_format($u10, 0, ',', '.') }})</td>
        <td>({{ number_format($v10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Des Fonds Restreints</td>
        <td>{{ number_format($w10, 0, ',', '.') }}</td>
        <td>{{ number_format($x10, 0, ',', '.') }}</td>
        <td>{{ number_format($y10, 0, ',', '.') }}</td>
        <td>{{ number_format($z10, 0, ',', '.') }}</td>
      </tr>
      <tr>
      <td>Des Fonds non Restreints</td>
        <td>{{ number_format($a11, 0, ',', '.') }}</td>
        <td>{{ number_format($b11, 0, ',', '.') }}</td>
        <td>{{ number_format($c11, 0, ',', '.') }}</td>
        <td>{{ number_format($d11, 0, ',', '.') }}</td>
      </tr>
      
      <tr style="background-color:#c0c0c0">
        <td>Localité 4</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Assistance Familiale à Long Terme</td>
        <td>{{ number_format($g10, 0, ',', '.') }}</td>
        <td>({{ number_format($h10, 0, ',', '.') }})</td>
        <td>({{ number_format($i10, 0, ',', '.') }})</td>
        <td>({{ number_format($j10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Programmes d'Education</td>
        <td>({{ number_format($k10, 0, ',', '.') }})</td>
        <td>({{ number_format($l10, 0, ',', '.') }})</td>
        <td>({{ number_format($m10, 0, ',', '.') }})</td>
        <td>({{ number_format($n10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>PRF</td>
        <td>({{ number_format($o10, 0, ',', '.') }})</td>
        <td>({{ number_format($p10, 0, ',', '.') }})</td>
        <td>({{ number_format($q10, 0, ',', '.') }})</td>
        <td>({{ number_format($r10, 0, ',', '.') }})</td>
      </tr>      
      <tr style="background-color:#ccffcc" >
        <td>Total Localité 4</td>
        <td>({{ number_format($s10, 0, ',', '.') }})</td>
        <td>({{ number_format($t10, 0, ',', '.') }})</td>
        <td>({{ number_format($u10, 0, ',', '.') }})</td>
        <td>({{ number_format($v10, 0, ',', '.') }})</td>
      </tr>
      <tr>
        <td>Des Fonds Restreints</td>
        <td>{{ number_format($w10, 0, ',', '.') }}</td>
        <td>{{ number_format($x10, 0, ',', '.') }}</td>
        <td>{{ number_format($y10, 0, ',', '.') }}</td>
        <td>{{ number_format($z10, 0, ',', '.') }}</td>
      </tr>
      <tr>
      <td>Des Fonds non Restreints</td>
        <td>{{ number_format($a11, 0, ',', '.') }}</td>
        <td>{{ number_format($b11, 0, ',', '.') }}</td>
        <td>{{ number_format($c11, 0, ',', '.') }}</td>
        <td>{{ number_format($d11, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
        <td>Total des Dépenses</td>
        <td>({{ number_format($e11, 0, ',', '.') }})</td>
        <td>({{ number_format($f11, 0, ',', '.') }})</td>
        <td>({{ number_format($g11, 0, ',', '.') }})</td>
        <td>({{ number_format($h11, 0, ',', '.') }})</td>
      </tr>
    </tbody>
  </table>
  <br><br>
  <center>
  <h5>Note 8 : Dépenses Administratives (Bureau National) </h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Frais d'Exploitation Courants</td>
        <td>{{ number_format($i11, 0, ',', '.') }}</td>
        <td>{{ number_format($j11, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Frais du Personnel</td>
        <td>{{ number_format($k11, 0, ',', '.') }}</td>
        <td>{{ number_format($l11, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dépenses Administratives</td>
        <td>{{ number_format($m11, 0, ',', '.') }}</td>
        <td>{{ number_format($n11, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($o11, 0, ',', '.') }}</td>
        <td>{{ number_format($p11, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 9 : Dépenses de Collecte de Fonds (Fundraising)</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Activités de Collecte de Fonds</td>
        <td>{{ number_format($q11, 0, ',', '.') }}</td>
        <td>{{ number_format($r11, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Frais d'Exploitation Courants</td>
        <td>{{ number_format($s11, 0, ',', '.') }}</td>
        <td>{{ number_format($t11, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Frais du Personnel</td>
        <td>{{ number_format($u11, 0, ',', '.') }}</td>
        <td>{{ number_format($v11, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dépenses Administratives</td>
        <td>{{ number_format($w11, 0, ',', '.') }}</td>
        <td>{{ number_format($x11, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($y11, 0, ',', '.') }}</td>
        <td>{{ number_format($z11, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 10 : Autres Dépenses</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Amortissements</td>
        <td>{{ number_format($a12, 0, ',', '.') }}</td>
        <td>{{ number_format($b12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Dépenses liées à la vente des Actifs immobilises</td>
        <td>{{ number_format($c12, 0, ',', '.') }}</td>
        <td>{{ number_format($d12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres évaluations & créances irrécouvrables</td>
        <td>{{ number_format($e12, 0, ',', '.') }}</td>
        <td>{{ number_format($f12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Autres dépenses non monétaires</td>
        <td>{{ number_format($g12, 0, ',', '.') }}</td>
        <td>{{ number_format($h12, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($i12, 0, ',', '.') }}</td>
        <td>{{ number_format($j12, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 11 : Recettes/Dépenses des activités financières</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Intérêts créditeurs générés par les dépôts</td>
        <td>{{ number_format($k12, 0, ',', '.') }}</td>
        <td>{{ number_format($l12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Intérêts débiteurs générés par les emprunts</td>
        <td>{{ number_format($m12, 0, ',', '.') }}</td>
        <td>{{ number_format($n12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Gain ou perte de change (résultant de la variation des taux de change)</td>
        <td>{{ number_format($o12, 0, ',', '.') }}</td>
        <td>{{ number_format($p12, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($q12, 0, ',', '.') }}</td>
        <td>{{ number_format($r12, 0, ',', '.') }}</td>
      </tr>
  </table>
  <br><br>
  <center>
  <h5>Note 12 : Charges Fiscales</h5>
  </center>
  <table class="table table-bordered" >
    <thead>
      <tr style="background-color:#ccffcc" >
        <td></td>
        <th>Exercice en cours</th>
        <th>Exercice précédent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Impôts (ou taxes) exigibles sur les activités ordinaires</td>
        <td>{{ number_format($s12, 0, ',', '.') }}</td>
        <td>{{ number_format($t12, 0, ',', '.') }}</td>
      </tr>
      <tr>
        <td>Taxe sur les subventions reçues par les ONG</td>
        <td>{{ number_format($u12, 0, ',', '.') }}</td>
        <td>{{ number_format($v12, 0, ',', '.') }}</td>
      </tr>
      <tr style="background-color:#ffff99">
      <td>Total</td>
        <td>{{ number_format($w12, 0, ',', '.') }}</td>
        <td>{{ number_format($x12, 0, ',', '.') }}</td>
      </tr>
  </table>