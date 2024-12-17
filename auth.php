<?php
include 'config/koneksi.php';
session_start();

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$query = "SELECT * from kasir where username = '$username' AND password = '$password'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$status = $data['status'];

if ($status == 'aktif'){
    if (mysqli_num_rows($sql) > 0){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['level'] = $data['level'];
        echo "
        <script>
            alert('Welcome Sir!!');
            window.location='admin/?menu=1';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Username atau password yang di inputkan salah! Harap cek kembali');
            window.location='index.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
        alert('Akun tidak aktif');
        window.location='index.php';
    </script>
    ";
}