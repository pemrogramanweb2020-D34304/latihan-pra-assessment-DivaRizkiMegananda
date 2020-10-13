<?php

$buku = array(
      array(
            'judul' => 'Sherlock Holmes',
            'pengarang' => 'Arthur Cona Doyle',
            'harga' => 50000,
            'stok' => 20
      ),
      array(
            'judul' => 'Arsene Lupin',
            'pengarang' => 'Maurice LeBlanc',
            'harga' => 250000,
            'stok' => 50
      ),
      array(
            'judul' => 'Games Of Throne',
            'pengarang' => 'George R.R.Martin',
            'harga' => 125000,
            'stok' => 60
      ),
);

echo "<table border='1' cellpadding='5'>";
echo "<thead>
          <th colspan='4'><b>DATA BUKU</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Pengarang</b></th>
          <th><b>Harga (Rp)</b></th>
          <th><b>Stok</b></th>
          </thead>";

for ($j = 0; $j < count($buku); $j++) {
      echo "<tr>";
      echo "<td>" . $buku[$j]['judul'] . "</td>";
      echo "<td>" . $buku[$j]['pengarang'] . "</td>";
      echo "<td>" . $buku[$j]['harga'] . "</td>";
      echo "<td>" . $buku[$j]['stok'] . "</td>";
      echo "</tr>";
}

echo "</table>";
echo "<table border=0 cellpadding=8>
          <tr><td></td></tr>   
          </table>";

$beli = array(
      array(
            'judul' => 'Sherlock Holmes',
            'jumlah' => 5
      ),
      array(
            'judul' => 'Arsene Lupin',
            'jumlah' => 2
      ),
      array(
            'judul' => 'Game Of Throne',
            'jumlah' => 4
      ),
);
$total = 0;
echo "<table border='1' cellpadding='5'>";
echo "<thead>
          <th colspan='3'><b>Data Pembelian</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Jumlah<b></th>
          <th><b>Harga (Rp)</b></th>
          </thead>";

for ($j = 0; $j < count($beli); $j++) {
      echo "<tr>";
      echo "<td>" . $beli[$j]['judul'] . "</td>";
      echo "<td>" . $beli[$j]['jumlah'] . "</td>";
      for ($y = 0; $y < count($buku); $y++) {
            if ($beli[$j]['judul'] == $buku[$y]['judul']) {
                  $harga = $buku[$y]['harga'] * $beli[$j]['jumlah'];
                  break;
            }
      }
      $total = $total + $harga;
      echo "<td>" . $harga . "</td>";
      echo "</tr>";
}
echo "<tr>
          <td colspan='2'><b>Total Harga (Rp)</b></td>
          <td>" . $total . "</td>
          </tr>";
echo "</table>";
