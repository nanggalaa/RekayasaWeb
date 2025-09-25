# Praktikum 1 - Rekayasa Web

***Selasa, 23 September 2025***

Folder ini berisi tugas praktikum pertama mata kuliah **Rekayasa Web**.

## Daftar Tugas

### 1. tugas1.php
- Membuat sebuah variabel array berisi stok buku.
- Array di-*encode* menjadi format **JSON** menggunakan `json_encode()`.
- Output berupa JSON dari data array.

**Kode utama:**
```php
<?php
$stok_buku = array("Novel"=>75, "Komik"=>45, "NonFiksi"=>150);

echo json_encode($stok_buku);

?>
```
### Output
```json
{"Novel":75,"Komik":45,"NonFiksi":150}
```

### 2. tugas2.php
- Membuat sebuah variabel berisi data JSON.
- Data di-decode menjadi:
   - PHP Object
   - PHP Array
- Mengakses nilai dari object dan array untuk ditampilkan.

**Kode utama:**
```php
<?php
$jsonobj = '{"Novel":75,"Komik":45,"NonFiksi":150}';

// decode object
$obj = json_decode($jsonobj);

// mengakses nilai object
echo $obj->Novel;
echo $obj->Komik;
echo $obj->NonFiksi . "<br>";

//decode array
$arr = json_decode($jsonobj, true);

// mengakses nilai array
echo $arr["Novel"];
echo $arr["Komik"];
echo $arr["NonFiksi"];
```
**Output**
```json
75
45
150
75
45
150
```
