# Praktikum 1 - Rekayasa Web

***Selasa, 30 September 2025***

Folder ini berisi tugas praktikum kedua mata kuliah **Rekayasa Web**.

## Daftar Tugas

### File : tampilWisata.php

### Deskripsi
- Program ini menggunakan cURL untuk mengambil data JSON dari file getWisata.php yang berjalan di localhost
- Data dari JSON kemudian di-decode menggunakan json_decode() agar bisa diolah dalam bentuk array PHP
- Data ditampilkan dalam bentuk tabel HTML dengan kolom:
  - KOTA
  - LANDMARK
  - TARIF

### Alur Program
- Mengambil data dari getWisata.php menggunakan fungsi curl().
- Mengubah JSON -> Array PHP dengan json_decode($send, TRUE).
- Menampilkan data dalam tabel HTML menggunakan perulangan foreach.

**Kode utama:**
```php
<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// alamat localhost untuk file getWisata.php, ambil hasil export JSON
$send = curl("http://localhost/RekayasaWeb/Pertemuan2/getWisata.php");

// mengubah JSON menjadi array
$data = json_decode($send, TRUE);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>
```
