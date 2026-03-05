<?php
function cetak($arr){
    for($x = 0; $x < count($arr); $x++){
        echo "Nama: $arr[$x] \n";
    }
}

$nama = array("Alghi", "Budi", "Cecep");
cetak($nama);
// Menambah satu nilai
echo "Setelah di add satu buah nilai \n";
$nama[] = "Zaim";
cetak($nama);
// Menambah Lebih dari satu nilai
echo "Setelah di add lebih dari 1 buah data \n";
array_push($nama, "Mega", "Caca");
cetak($nama);
?>