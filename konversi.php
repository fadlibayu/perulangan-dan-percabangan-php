<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];

    function konversiNilai($nilai) {
       if ($nilai >= 80.00) {
          return ["A", 4.00];
       } elseif ($nilai >= 76.25) {
       return ["A-", 3.67];
       } elseif ($nilai >= 68.75) {
       return ["B+", 3.33];
       } elseif ($nilai >= 65.00) {
       return ["B", 3.00];
       } elseif ($nilai >= 62.50) {
       return ["B-", 2.67];
       } elseif ($nilai >= 57.50) {
       return ["C+", 2.33];
       } elseif ($nilai >= 55.00) {
        return ["C", 2.00];
       } elseif ($nilai >= 51.25) {
       return ["C-", 1.67];
       } elseif ($nilai >= 43.75) {
       return ["D+", 1.33];
       } elseif ($nilai >= 40.00) {
       return ["D", 1.00];
       } else {
       return ["E", 0.00];
       }
    }
    list($nilaiHuruf, $nilaiNumerik) = konversiNilai($nilai);

    $statusKelulusan = $nilai >= 60 ? "LULUS" : "TIDAK LULUS";
    
    echo "<h2>Hasil Konversi Nilai</h2>";
    echo "<p>Nilai Anda: $nilai</p>";
    echo "<p>Nilai Huruf: $nilaiHuruf</p>";
    echo "<p>Nilai Numerik: $nilaiNumerik</p>";
    echo "<p>Status: Anda $statusKelulusan</p>";
    }