<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) -->
<?php
include 'connect.php';

// ==================1==================
// If statement untuk mengecek apakah ada data yang dikirim melalui metode POST
if (isset($_POST['update'])) {
    $id = $_GET['id']; // Ambil ID dari parameter URL
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun_terbit = $_POST['tahun_terbit'];

    // ==================2==================
    // Definisikan query untuk mengupdate data buku berdasarkan ID
    $query = "UPDATE tb_buku SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun_terbit' WHERE id='$id'";

    // ==================3==================
    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Jika update berhasil, alihkan ke halaman katalog buku
    if ($result) {
        header("location: katalog_buku.php");
        exit();
    } else {
        echo "<script>alert('Data gagal diubah');</script>";
    }
}
?>
