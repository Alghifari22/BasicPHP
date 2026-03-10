<?php
function DecimaltoHexa($desimal){
    $hexa = dechex($desimal);
    return $hexa;
}

$desimal = 255;
$hexa = DecimaltoHexa($desimal);
echo "====== PROGRAM KONVERSI BILANGAN DESIMAL TO HEXADESIMAL ====== <br><br>";
echo "Angka Desimal: ".$desimal. "<br>";
echo "Setelah di konversi: ".$hexa;
?>