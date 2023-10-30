<!DOCTYPE html>
<html>
<head>
    <title>latihan2</title>
</head>
<body>
    <h1>LATIHAN 2 WAD</h1>
    
    <form method="post" action="latihan3.php">
        <label for="InputAngka1">Masukkan angka: </label>
        <input type="number" id="InputAngka1" name="inputangka" required><br><br>
	
        <label for="Dropdown">Pengoperasian: </label>
        <select id="Dropdown" name="Dropdown">
            <option value="pilihan1">+ 10</option>
            <option value="pilihan2">* 5</option>
            <option value="pilihan3">- 30</option>
        </select><br><br>

        <button type="submit" name="hitung">Hitung</button>
    </form>
</html>
