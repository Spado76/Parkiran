<!DOCTYPE html>
<html>
<head>
    <title>Form Tempat Parkir</title>
</head>
<body>
    <h1>Form Tempat Parkir</h1>
    <form method="POST" action="proses.php">
        <label for="plat_nomor">Plat Nomor:</label>
        <input type="text" name="plat_nomor" required><br><br>
        
        <label for="jenis_kendaraan">Jenis Kendaraan:</label>
        <select name="jenis_kendaraan" required>
            <option value="sepeda">Sepeda</option>
            <option value="motor">Motor</option>
            <option value="mobil">Mobil</option>
        </select><br><br>
        
        <label for="jam_masuk">Jam Masuk (HH:mm):</label>
        <input type="text" name="jam_masuk" required><br><br>
        
        <label for="jam_keluar">Jam Keluar (HH:mm):</label>
        <input type="text" name="jam_keluar" required><br><br>
        
        <input type="submit" value="Hitung Biaya">
    </form>
</body>
</html>
