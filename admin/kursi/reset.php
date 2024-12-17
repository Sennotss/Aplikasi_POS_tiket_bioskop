<?php
include '../../config/koneksi.php';

$query = "UPDATE kursi SET
status = 'aktif'";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Rubah');
    window.location='../?menu=8';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Rubah');
    window.location='../?menu=8';
    </script>
    ";
}
?>