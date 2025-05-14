<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "belowater";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$namaPelanggan = isset($_POST['namaPelanggan']) ? $_POST['namaPelanggan'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$noTelp = isset($_POST['noTelp']) ? $_POST['noTelp'] : '';
$tanggalPemesanan = isset($_POST['tanggalPemesanan']) ? $_POST['tanggalPemesanan'] : '';
$mtdPembayaran = isset($_POST['mtdPembayaran']) ? $_POST['mtdPembayaran'] : '';
$voucherid = isset($_POST['voucherid']) ? $_POST['voucherid'] : 'Tidak ada kode voucher'; // Jika kosong, beri nilai default
$paket = isset($_POST['paket']) ? $_POST['paket'] : '';
$destinasi = isset($_POST['destinasi']) ? $_POST['destinasi'] : '';
$totalPaket = isset($_POST['totalPaket']) ? $_POST['totalPaket'] : 0;

// Pastikan bahwa $totalPaket adalah angka
if (!is_numeric($totalPaket) || empty($totalPaket)) {
    $totalPaket = 0; // Beri nilai default jika kosong atau bukan angka
}

// Simpan data pemesanan ke dalam database
$sql = "INSERT INTO orders (namaPelanggan, email, noTelp, tanggalPemesanan, mtdPembayaran, voucherid, paket, destinasi, totalPaket)
VALUES ('$namaPelanggan', '$email', '$noTelp', '$tanggalPemesanan', '$mtdPembayaran', '$voucherid', '$paket', '$destinasi', '$totalPaket')";

if ($conn->query($sql) === TRUE) {
    // Jika penyimpanan berhasil, tampilkan resume pesanan
    echo "<h2>Resume Pemesanan:</h2>";
    echo "<p>Nama Pelanggan: " . htmlspecialchars($namaPelanggan) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Nomor Telepon: " . htmlspecialchars($noTelp) . "</p>";
    echo "<p>Tanggal Pemesanan: " . htmlspecialchars($tanggalPemesanan) . "</p>";
    echo "<p>Metode Pembayaran: " . htmlspecialchars($mtdPembayaran) . "</p>";
    echo "<p>Kode Voucher: " . htmlspecialchars($voucherid) . "</p>";
    echo "<p>Paket: " . htmlspecialchars($paket) . "</p>";
    echo "<p>Destinasi Wisata: " . htmlspecialchars($destinasi) . "</p>";
    echo "<p>Total Keseluruhan: Rp. " . number_format((float)$totalPaket, 0, ',', '.') . "</p>";

    // Tambahkan tombol "Kembali ke Beranda"
    echo '<br><a href="index.php" style="padding: 10px 20px; background-color: #01A7E1; color: white; text-decoration: none; border-radius: 5px;">Kembali ke Beranda</a>';
} else {
    // Jika terjadi kesalahan, beri pesan kesalahan dan kembali ke halaman utama
    echo '<script>alert("Terjadi kesalahan, pemesanan gagal tersimpan: ' . $conn->error . '"); window.location.href = "index.php";</script>';
}

$conn->close();
?>
