<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $plat_nomor = $_POST["plat_nomor"];
    $jenis_kendaraan = $_POST["jenis_kendaraan"];
    $jam_masuk = strtotime($_POST["jam_masuk"]);
    $jam_keluar = strtotime($_POST["jam_keluar"]);

    // Menghitung lama parkir dalam jam
    $lama_parkir = ceil(($jam_keluar - $jam_masuk) / 3600);

    // Menentukan tarif sesuai jenis kendaraan
    switch ($jenis_kendaraan) {
        case "sepeda":
            $tarif_per_jam = 2000;
            break;
        case "motor":
            $tarif_per_jam = 3000;
            break;
        case "mobil":
            $tarif_per_jam = 5000;
            break;
        default:
            $tarif_per_jam = 0;
            break;
    }

    // Menghitung total biaya parkir
    $total_biaya = $lama_parkir * $tarif_per_jam;

    // Menampilkan hasil
    echo "<h2>Hasil Perhitungan Biaya Parkir</h2>";
    echo "Plat Nomor: " . $plat_nomor . "<br>";
    echo "Jenis Kendaraan: " . $jenis_kendaraan . "<br>";
    echo "Jam Masuk: " . date("H:i", $jam_masuk) . "<br>";
    echo "Jam Keluar: " . date("H:i", $jam_keluar) . "<br>";
    echo "Lama Parkir: " . $lama_parkir . " jam<br>";
    echo "Tarif per Jam: " . $tarif_per_jam . " rupiah<br>";
    echo "Total Biaya Parkir: " . $total_biaya . " rupiah<br>";
}
?>
