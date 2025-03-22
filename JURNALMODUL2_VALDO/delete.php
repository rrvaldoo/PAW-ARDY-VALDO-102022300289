<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Definisikan query untuk menghapus data
    $del_query = "DELETE FROM tb_buku WHERE id = $id";
    mysqli_query($conn, $del_query);


    // Jalankan query


    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal dihapus');</script>";
    }
}
?>