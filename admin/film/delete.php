<?php
include '../../config/koneksi.php';

$id_film = $_GET['id'];

$query = "DELETE from film
WHERE id_film = '$id_film'";

$sql = mysqli_query($conn, $query);

if($sql){
echo "
    <script>
    alert('Data Berhasil di Hapus');
    window.location='../?menu=14';
    </script>
    ";
}else{
    echo "
    <script>
    alert('Data Gagal di Hapus');
    window.location='../?menu=14';
    </script>
    ";
}
?>