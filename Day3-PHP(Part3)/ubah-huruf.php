<?php

function ubah_huruf($string){
    $length = strlen($string);
    $result = '';
    for ($i = 0; $i < $length; $i++) {
        $letter = $string[$i];
        $result .= ++$letter;
    }
    return $result;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat') . "<br>"; // tfnbohbu

?>