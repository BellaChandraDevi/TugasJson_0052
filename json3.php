<?php
$json_data=file_get_contents("pekerja2.json");
$obj = json_decode($json_data);
echo "Nim: "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "No Hp : "; echo $obj->no_hp;
echo "<br>";
echo "Mata kuliah pertama: ";echo $obj->makul[0];
echo "<br>";
echo "Mata kuliah kedua: ";echo $obj->makul[1];
echo "<br>";
echo "Mata kuliah ketiga: ";echo $obj->makul[2];
?>