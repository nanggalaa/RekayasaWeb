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

// saya beri <br> untuk memisah baris output agar tidak menyambung