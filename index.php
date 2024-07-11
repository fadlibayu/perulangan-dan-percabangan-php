<!DOCTYPE html>
<html lang="id">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Konversi Nilai</title>
</head>
<body>
     <h2>Masukkan Nilai Anda</h2>
     <form action="konversi.php" method="POST">
           <label for="nilai">Nilai (0 - 100):</label>
           <input type="number" id="nilai" name="nilai" min="0" max="100">
           <button type="submit">Konversi</button>
      </form>
</body>
</htm