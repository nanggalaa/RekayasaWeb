# Praktikum 1 - Rekayasa Web

***Selasa, 30 September 2025***

Folder ini berisi tugas praktikum kedua mata kuliah **Rekayasa Web**.

## Daftar Tugas

### tampilWisata.php
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
