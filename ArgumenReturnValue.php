<?php
function Halo(int $x = 0, int $y = 0){
    return $x + $y;
}

echo Halo(4,5);
$z = Halo(2,3);
echo ("<br>$z");
?>