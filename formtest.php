<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pemesanan Paket Wisata</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
    }
    select {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    button:hover {
        background-color: #0056b3;
    }
    #total {
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Pemesanan Paket Wisata</h2>
    <div class="form-group">
        <label for="paket">Pilih Paket:</label>
        <select id="paket">
            <option value="paket1">Paket 1 (Rp. 1.830.000)</option>
            <option value="paket2">Paket 2 (Rp. 3.460.000)</option>
            <option value="paket3">Paket 3 (Rp. 6.350.000)</option>
        </select>
    </div>
    <div class="form-group">
        <label for="destinasi">Pilih Destinasi Wisata:</label>
        <select id="destinasi">
            <option value="0">Pilih Destinasi</option>
            <option value="rajaampat">Raja Ampat (Rp. 4.800.000)</option>
            <option value="bandaneira">Banda Neira (Rp. 2.800.000)</option>
            <option value="karimunjawa">Karimunjawa (Rp. 3.000.000)</option>
            <option value="derawan">Kepulauan Derawan (Rp. 3.500.000)</option>
            <option value="bunaken">Bunaken (Rp. 4.300.000)</option>
            <option value="likupang">Likupang (Rp. 3.000.000)</option>
            <option value="wakatobi">Wakatobi (Rp. 3.700.000)</option>
        </select>
    </div>
    <button onclick="hitungTotal()">Hitung Total</button>
    <p id="total">Total Keseluruhan: Rp. 0</p>
</div>

<script>
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
