<?php
function tentukan_deret_geometri($arr) {
    $length = count($arr);
    $rasio = $arr[1] / $arr[0];
    if ($length == 1) {
        return "true";
    }

    for ($i = 2; $i < $length; $i++) {
        if ($arr[$i] / $arr[$i - 1] != $rasio) {
            return "false";
        }
    }

    return "true";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]) . "<br>"; // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]) . "<br>"; // true
echo tentukan_deret_geometri([2, 4, 6, 8]) . "<br>"; // false
echo tentukan_deret_geometri([2, 6, 18, 54]) . "<br>"; // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]) . "<br>"; //false
?>