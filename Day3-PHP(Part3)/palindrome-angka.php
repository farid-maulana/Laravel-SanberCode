<?php

function palindrome_angka($angka) {
    $angka++;
    $number = $angka;
    $reverse_angka = 0;
    while($number > 0){
        $lsd = $number % 10;
        $reverse_angka = $reverse_angka * 10 + $lsd;
        $number = ($number - $lsd) / 10;
    }
    if ($reverse_angka == $angka) {
        return $reverse_angka;
    } else {
        return palindrome_angka($angka);
    }
}

// // TEST CASES
echo "Palindrome selanjutnya dari angka 8 adalah " . palindrome_angka(9) . "<br>"; // 9
echo "Palindrome selanjutnya dari angka 10 adalah " . palindrome_angka(10) . "<br>"; // 11
echo "Palindrome selanjutnya dari angka 117 adalah " . palindrome_angka(117) . "<br>"; // 121
echo "Palindrome selanjutnya dari angka 175 adalah " . palindrome_angka(175) . "<br>"; // 181
echo "Palindrome selanjutnya dari angka 1000 adalah " . palindrome_angka(1000) . "<br>"; // 1001

?>