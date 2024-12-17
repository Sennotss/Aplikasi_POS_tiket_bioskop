<!DOCTYPE html>
<html>
<head>
    <title>Cetak Bon</title>
    <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      width: 300px;
      margin: 50px auto;
      border: 1px solid #ccc;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    .header {
      text-align: center;
    }
    .content {
      margin-bottom: 20px;
    }
    .footer {
      text-align: center;
    }
    .btn-print {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-print:hover {
      background-color: #0056b3;
    }
    </style>
</head>
<body onload="print()">
    <?php
    include '../../config/koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM pemesanan WHERE no_bon = '$id'");
    while($data = mysqli_fetch_assoc($query)){
    ?>
    <div class="container">
        <div class="header">
            <h2>Bon Pembelian</h2>
            <h5>Pemesanan tiket</h5>
        </div>
        <div class="content">
            <?php
            $no_bon = $data['no_bon'];
            $id_kasir = $data['id_kasir'];
            $id_film = $data['id_film'];
            $atasnama = $data['atasnama'];
            $tanggal = $data['tanggal'];
            $total = $data['total'];
            $status = $data['status'];

            echo "<p>Nomor Bon: $no_bon</p>";
            echo "<p>ID Kasir: $id_kasir</p>";
            echo "<p>ID Film: $id_film</p>";
            echo "<p>Atas Nama: $atasnama</p>";
            echo "<p>Waktu: $tanggal</p>";
            echo "<p>Total: $total</p>";
            echo "<p>Status: $status</p>";
            ?>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>
