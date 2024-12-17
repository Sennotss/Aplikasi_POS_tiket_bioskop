<?php
include '../../config/koneksi.php';

$kd_studio = $_POST['kd_studio'];

$status = $_POST['status'];

$query = "UPDATE studio SET
status = '$status'
WHERE kd_studio = '$kd_studio'";

$sql = mysqli_query($conn, $query);

if($sql){
    echo "
    <script>
    alert('Data Berhasil di Rubah');
    window.location='../?menu=5';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Rubah');
    window.location='../?menu=7&id=$kd_studio';
    </script>
    ";
}
?>