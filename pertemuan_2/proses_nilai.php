<?php
if(isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];

    echo "nama: $nama <br>";
    echo "mata kuliah: $matkul <br>";
    echo "nilai uts: $uts <br>";
    echo "nilai uas: $uas <br>" ;
    echo "nilai praktikum: $praktikum";
}else {
    echo "tidak ada data";
}