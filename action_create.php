<?php
 include "connection.php";
//Akhir Koneksi---------------------------------------------------------
$email     = $_POST['email'];
$name    = $_POST['name'];
$phone    = $_POST['phone'];
 
$data = mysqli_query($mysqli, "INSERT INTO mahasiswa SET email='$email', name='$name', phone='$phone'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
    header('Location: /' , true, 302);
} else {
    echo "Gagal Input Data!!!";
    echo "<a href='create.php'>Kembali</a>";
}
?>