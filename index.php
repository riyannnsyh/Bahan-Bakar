<?php
include ('proses.php');
if(isset($_POST['kirim'])){
  $beli = new Beli();
  $beli->setHarga(15420, 16130, 18310, 16510);
  $beli->jumlah = ($_POST['liter']) ? $_POST['liter'] : 0;
  $beli->jenis = ($_POST['jenis']) ? $_POST['jenis'] : '';

  echo $beli->cetakPembelian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian BBM</title>
</head>
<body>
  <center>
    <form method="POST">
            <label for="liter">Jumlah Liter:</label>
            <input type="number" id="liter" name="liter" min="1" required>
            <br> <br>
            <label for="jenis">Jenis BBM:</label>
            <select id="jenis" name="jenis" required>
                <option disabled selected>--- Pilih Jenis ---</option>
                <option value="SSuper">Shell Super</option>
                <option value="SVPower">Shell V Power</option>
                <option value="SVPowerDiesel">Shell V Power Diesel</option>
                <option value="SVPowerNitro">Shell V Power Nitro</option>
            </select>
            <br> <br>
            <button type="submit" name="kirim">Beli</button>
        </form>
  </center>
</body>
</html>
