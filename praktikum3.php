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

$pembelian = array(
  array(
    'judul' => 'Sherlock Holmes',
    'jumlah' => '5'
  ),
  array(
    'judul' => 'Arsene Lupin',
    'jumlah' => '2'
  ),
  array(
    'judul' => 'Game Of Throne',
    'jumlah' => '4'
  ),
);
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  </style>
</head>

<body>

  <table border='1' cellpadding='5'>
    <thead>
      <th colspan='4'><b>DATA BUKU</b></th>
    </thead>
    <thead>
      <th><b>Judul</b></th>
      <th><b>Pengarang</b></th>
      <th><b>Harga (Rp)</b></th>
      <th><b>Stok</b></th>
    </thead>

    <?php foreach ($buku as $book) { ?>
      <tr>
        <td> <?= $book['judul']; ?></td>
        <td> <?= $book['pengarang']; ?></td>
        <td> <?= $book['harga']; ?></td>
        <td> <?= $book['stok']; ?></td>
      </tr>
    <?php } ?>

  </table>
  <br>
  <table border="1" cellpadding='5'>
    <thead>
      <th colspan="4"><b> Data Pembelian</b></th>
    </thead>
    <thead>
      <th>Judul</th>
      <th>Jumlah</th>
      <th>Harga</th>
    </thead>


    <?php foreach ($pembelian as $beli) { ?>


      <tr>
        <td>
          <?= $beli['judul']; ?>
        </td>
        <td>
          <?= $beli['jumlah']; ?>
        </td>

        <?php foreach ($buku as $bookk) { ?>
          <?php
          if ($beli['judul'] == $bookk['judul']) {
            $harga = $bookk['harga'] * $beli['jumlah'];
            break;
          }
          $total = $total + $harga;
          ?>
        <?php } ?>

        <td>
          <?= $harga; ?>
        </td>
      </tr>

    <?php } ?>

    <td colspan='2'>
      <b> Total Harga</b>
    </td>
    <td>
      <?= $total; ?>
    </td>

  </table>
</body>

</html>
