<?php
include '../../config/koneksi.php';

$id_film = $_POST['id_film'];
$kd_studio = $_POST['kd_studio'];
$nama = $_POST['nama'];
$genre = $_POST['genre'];

// simpan foto
$target_dir = "../../assets/img/upload/"; 
$temp = explode(".", $_FILES["foto"]["name"]);
$newfilename = uniqid() . '.' . end($temp); 
$target_file = $target_dir . $newfilename; 
$foto = $newfilename; 

$durasi = $_POST['durasi'];
$jadwal = $_POST['jadwal'];
$tanggal = $_POST['tanggal'];
$harga = $_POST['harga'];

if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    $query = "INSERT INTO film VALUES ('$id_film','$kd_studio', '$nama', '$genre', '$foto', '$durasi', '$jadwal', '$tanggal', '$harga')";
    $sql = mysqli_query($conn, $query);

    if($sql) {
        echo "
        <script>
        alert('Data Berhasil di Simpan');
        window.location='../?menu=14';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal di Simpan');
        window.location='../?menu=14';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('File anda error.');
    window.location='../?menu=14';
    </script>
    ";
}
?>