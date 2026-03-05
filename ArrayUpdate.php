<?php
function cetak($arr){
    for($x = 0; $x < count($arr); $x++){
        echo "Nama: $arr[$x] \n";
    }
}

$nama = array("Andi","Budi","Cecep");
cetak($nama);
echo "Setelah diupdate \n";
$nama[2] = "Zaim";
cetak($nama);
?>