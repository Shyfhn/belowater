
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "belowater";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemesanan</title>
</head>
<style>
    
</style>
<body>
    <h2>Riwayat Pemesanan</h2>
    <table>
        <tr>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th>Tanggal Pemesanan</th>
            <th>Metode Pembayaran</th>
            <th>Kode Voucher</th>
            <th>Paket</th>
            <th>Destinasi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['namaPelanggan']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['noTelp']."</td>";
                echo "<td>".$row['tanggalPemesanan']."</td>";
                echo "<td>".$row['mtdPembayaran']."</td>";
                echo "<td>".$row['voucherid']."</td>";
                echo "<td>".$row['paket']."</td>";
                echo "<td>".$row['destinasi']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>Tidak ada riwayat pemesanan</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
