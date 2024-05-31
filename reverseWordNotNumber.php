<?php
function reverseAlphabets($str) {
    // Pisahkan angka dan huruf
    preg_match('/([a-zA-Z]+)(\d+)/', $str, $matches);
    
    if (count($matches) === 3) {
        $alphabets = $matches[1];
        $numbers = $matches[2];

        // Balik urutan huruf
        $reversedAlphabets = strrev($alphabets);

        // Gabungkan huruf yang dibalik dan angka
        return $reversedAlphabets . $numbers;
    }

    // Jika pola tidak sesuai, kembalikan string asli
    return $str;
}

$input = "rabka1";
$output = reverseAlphabets($input);
echo $output; // Output: EIGEN1
?>
