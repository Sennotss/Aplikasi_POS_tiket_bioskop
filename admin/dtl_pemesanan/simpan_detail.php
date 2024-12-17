<?php
include '../../config/koneksi.php';

$no_bon = $_POST['nb'];
$no_kursi = $_POST['no_kursi'];
$harga = $_POST['harga'];
$query = "INSERT INTO dtl_pemesanan values
('$no_kursi','$no_bon')";

$sql = mysqli_query($conn, $query);

if($sql){
    mysqli_query($conn, "UPDATE kursi set status = 'nonaktif' where no_kursi='$no_kursi'");
    mysqli_query($conn, "UPDATE pemesanan set total = total + $harga where no_bon='$no_bon'");
    echo "
    <script>
    alert('Data Berhasil di Simpan');
    window.location='../?menu=17&id=$no_bon';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Simpan');
    window.location='../?menu=17&id=$no_bon';
    </script>
    ";
}
?>