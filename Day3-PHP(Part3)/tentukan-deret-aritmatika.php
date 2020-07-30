<?php

function tentukan_deret_aritmatika($arr) {
    $length = count($arr);
    $beda = $arr[1] - $arr[0];
    if ($length == 1) {
        return "true";
    }

    for ($i = 2; $i < $length; $i++) {
        if ($arr[$i] - $arr[$i - 1] != $beda) {
            return "false";
        }
    }

    return "true";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]) . "<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]) . "<br>";// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]) . "<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]) . "<br>";// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]) . "<br>";// false

?>