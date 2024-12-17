<?php
include '../../config/koneksi.php';

$id_dtl = $_GET['id'];
$no_bon = $_GET['nb'];
$harga = $_GET['harga'];
$query = "DELETE from dtl_pemesanan
WHERE id_dtl = '$id_dtl'";

$q2 = mysqli_query($conn, "SELECT * from dtl_pemesanan where id_dtl = '$id_dtl'");
$d2 = mysqli_fetch_array($q2);
$no_kursi = $d2['no_kursi'];
$sql = mysqli_query($conn, $query);
if($sql){
    mysqli_query($conn, "UPDATE pemesanan set total = total - $harga where no_bon='$no_bon'");
    mysqli_query($conn, "UPDATE kursi set status = 'aktif' where no_kursi='$no_kursi'");
echo "
    <script>
    alert('Data Berhasil di Hapus');
    window.location='../?menu=17&id=$no_bon';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Hapus');
    window.location='../?menu=17&id=$no_bon';
    </script>
    ";
}
?>