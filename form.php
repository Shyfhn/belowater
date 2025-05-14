<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Belowater</title>
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h2>Pemesanan Paket Wisata Perjalanan Bawah Laut Indonesia</h2>
            <div class="form-text-box">
                <br>
                <h3>Pilihan Destinasi Wisata</h3><br>
                <ul>
                    <li>Raja Ampat: Rp. 4.800.000</li>
                    <li>Banda Neira: Rp. 2.800.000</li>
                    <li>Karimunjawa: Rp. 3.000.000</li>
                    <li>Kepulauan Derawan: Rp. 3.500.000</li>
                    <li>Bunaken: Rp. 4.300.000</li>
                    <li>Likupang: Rp. 3.000.000</li>
                    <li>Wakatobi: Rp. 3.700.000</li>
                </ul>
                <br>
            </div>
            <form action="process_order.php" method="POST">
                <h2>Data Diri</h2>
                <label for="namaPelanggan">Nama Pelanggan</label>
                <input type="text" id="namaPelanggan" name="namaPelanggan" required><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required><br>

                <label for="noTelp">Nomor Telepon</label>
                <input type="text" id="noTelp" name="noTelp" required><br>

                <label for="tanggalPemesanan">Tanggal Pemesanan</label>
                <input type="date" id="tanggalPemesanan" name="tanggalPemesanan" required><br>

                <label for="mtdPembayaran">Metode Pembayaran</label>
                <select id="mtdPembayaran" name="mtdPembayaran" required>
                    <option value="transfer bank">Transfer Bank</option>
                    <option value="credit">Credit</option>
                </select><br>

                <label for="voucher">Kode Voucher</label>
                <input type="text" id="voucherid" name="voucherid"><br>

                <div class="container">
                    <h2>Pilihan Wisata</h2>
                    <div class="form-group">
                        <label for="paket">Pilih Paket</label>
                        <select id="paket" name="paket">
                            <option value="0">Pilih Paket</option>
                            <option value="paket1">Paket 1 (Rp. 1.830.000)</option>
                            <option value="paket1">Paket 2 (Rp. 3.460.000)</option>
                            <option value="paket1">Paket 3 (Rp. 6.350.000)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="destinasi">Pilih Destinasi Wisata</label>
                        <select id="destinasi" name="destinasi">
                            <option value="0">Pilih Destinasi</option>
                            <option value="rajaampat">Raja Ampat</option>
                            <option value="bandaneira">Banda Neira</option>
                            <option value="karimunjawa">Karimunjawa</option>
                            <option value="derawan">Kepulauan Derawan</option>
                            <option value="bunaken">Bunaken</option>
                            <option value="likupang">Likupang</option>
                            <option value="wakatobi">Wakatobi</option>
                        </select>
                    </div>
                    <input type="hidden" id="totalPaket" name="totalPaket">

                    <button class="btn-count" type="button" onclick="hitungTotal()">Hitung Total</button>
                    <p id="total">Total Keseluruhan: Rp. 0</p>
                    
                </div>

                <button type="submit">Pesan Sekarang</button>
            </form>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            const inputVoucher = document.getElementById('voucherid');
            inputVoucher.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });

        function hitungTotal() {
            var paket = document.getElementById("paket").value;
            var destinasi = document.getElementById("destinasi").value;
            var totalPaket = 0;

            if (paket === "paket1") {
                totalPaket += 1830000;
            } else if (paket === "paket2") {
                totalPaket += 3460000;
            } else if (paket === "paket3") {
                totalPaket += 6350000;
            }

            if (destinasi === "rajaampat") {
                totalPaket += 4800000;
            } else if (destinasi === "bandaneira") {
                totalPaket += 2800000;
            } else if (destinasi === "karimunjawa") {
                totalPaket += 3000000;
            } else if (destinasi === "derawan") {
                totalPaket += 3500000;
            } else if (destinasi === "bunaken") {
                totalPaket += 4300000;
            } else if (destinasi === "likupang") {
                totalPaket += 3000000;
            } else if (destinasi === "wakatobi") {
                totalPaket += 3700000;
            }

            document.getElementById("total").innerText = "Total Keseluruhan: Rp. " + totalPaket.toLocaleString();
        }

        
    </script>
</body>
</html>
