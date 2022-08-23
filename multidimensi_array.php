<?php
$arraymultidimensi = [
    [2,3,4],
    [7,6,10],
    [5,7,8],
];
echo "<pre>";
var_dump($arraymultidimensi);
echo "</pre>";

$mahasiswa = [
[
    'nama' => 'saifur',
    'alamat' => 'kalinyamatan',
    'tanggal_lahir' => '5 Maret 1997',
    'umur' => 22
],
[
    'nama' => 'mega',
    'alamat' => 'lebak',
    'tanggal_lahir' => '24 Mei 1999',
    'umur' => 0,
],
];
foreach($mahasiswa as $mahasiswa){
    echo "Nama: ".$mahasiswa['nama']."<br/>";
    echo "Alamat: ".$mahasiswa['alamat']."<br/>";
    echo "Tanggal lahir: ".$mahasiswa['tanggal_lahir']."<br/>";
    echo "Umur: ".$mahasiswa['umur']."<br/>";
}