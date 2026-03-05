<?php
function kalkulator(int $x = 0, string $op, int $y = 0){
    switch($op){
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
        case "/":
            return ($b == 0) ? "Error: Pembagian dengan nol tidak diperbolehkan" : $a / $b;
        case "%":
            return ($b == 0) ? "Error: Modulus dengan nol tidak diperbolehkan" : $a % $b;
        case "^":
            return pow($a,$b);
        default:
            return "Operator tidak valid";
    }
}

// Penjumlahan
echo kalkulator(3, "+", 4);

// Pembagian
echo ("\n" .kalkulator(4, "/", 2));

// Tidak valid
echo ("\n" .kalkulator(10, "x", 20))
?>