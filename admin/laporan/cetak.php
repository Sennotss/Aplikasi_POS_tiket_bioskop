<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan 1</title>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body onload="print()">
    <center>
        <h2>Laporan Pemesanan</h2>
    </center>
    <table border="1">
        <thead>
            <th>NoBon</th>
            <th>ID Kasir</th>
            <th>ID Film</th>
            <th>Tanggal</th>
        </thead>
        <tbody>
            <?php
            include '../../config/koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM pemesanan");
            while($data = mysqli_fetch_assoc($query)){
                $id_kasir = $data['id_kasir'];
                $id_film = $data['id_film'];
                $q2 = mysqli_query($conn, "SELECT * from kasir WHERE id_kasir='$id_kasir'");
                $q3 = mysqli_query($conn, "SELECT * from film where id_film='$id_film'");
                $d2 = mysqli_fetch_array($q2);
                $d3 = mysqli_fetch_array($q3);
                ?>
                <tr>
                    <td><?php echo $data['no_bon'];?></td>
                    <td><?php echo $data['id_kasir'];?> - <?php echo $d2['nama'];?></td>
                    <td><?php echo $data['id_film'];?>
                    <td><?php echo $data['tanggal'];?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>