<?php
function cetak($arr){
    for($x = 0; $x < count($arr); $x++){
        echo "Nama: $arr[$x] \n";
    }
}

$nama = array("Alghi", "Budi", "Cecep");
cetak($nama);

// Menghapus Elemen
echo "Setelah menghapus elemen pertama menggunakan array splice \n";
array_splice($nama, 0, 2);
cetak($nama);
?>