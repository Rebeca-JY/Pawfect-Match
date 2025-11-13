<?php
include('../Config/db-connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pengirim = $_POST['nama_pengirim'];
    $deskripsi_hewan = $_POST['deskripsi_hewan'];
    $no_hp = $_POST['no_hp'];

    // Lokasi penyimpanan foto
    $target_dir = "../foto/";

    // Proses upload untuk 4 gambar
    $gambar1 = $_FILES['gambar1']['name'] ? basename($_FILES['gambar1']['name']) : null;
    $gambar2 = $_FILES['gambar2']['name'] ? basename($_FILES['gambar2']['name']) : null;
    $gambar3 = $_FILES['gambar3']['name'] ? basename($_FILES['gambar3']['name']) : null;
    $gambar4 = $_FILES['gambar4']['name'] ? basename($_FILES['gambar4']['name']) : null;

    // Pindahkan file ke folder foto/
    if ($gambar1) move_uploaded_file($_FILES['gambar1']['tmp_name'], $target_dir . $gambar1);
    if ($gambar2) move_uploaded_file($_FILES['gambar2']['tmp_name'], $target_dir . $gambar2);
    if ($gambar3) move_uploaded_file($_FILES['gambar3']['tmp_name'], $target_dir . $gambar3);
    if ($gambar4) move_uploaded_file($_FILES['gambar4']['tmp_name'], $target_dir . $gambar4);

    // Simpan data ke database
    $stmt = $conn->prepare("INSERT INTO hewan_users (nama_pengirim, deskripsi_hewan, no_hp, gambar1, gambar2, gambar3, gambar4) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nama_pengirim, $deskripsi_hewan, $no_hp, $gambar1, $gambar2, $gambar3, $gambar4);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dikirim!'); window.location.href='../Homepage/other.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
