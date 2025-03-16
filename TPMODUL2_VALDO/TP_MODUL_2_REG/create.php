<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek POST request dari form
// Lalu definisikan variabel-variabel untuk menyimpan data yang dikirim dari POST
if (isset($_POST['create'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // ==================2==================
    // Definisikan $query untuk melakukan koneksi ke database
    $query = "INSERT INTO tb_buku (judul, penulis, tahun_terbit) 
              VALUES ('$judul', '$pengarang', '$tahun_terbit')";

    // ==================3==================
    // Eksekusi query
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: katalog_buku.php");
        exit();
    } else {
        echo "('Data gagal ditambahkan')";
    }
}
?>
