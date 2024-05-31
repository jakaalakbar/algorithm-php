<?php
function findLongestWord($sentence)
{
	// Pisahkan kalimat menjadi array kata
	$words = explode(' ', $sentence);

	// Inisialisasi variabel untuk menyimpan kata terpanjang
	$longestWord = '';

	// Iterasi setiap kata dalam array
	foreach ($words as $word) {
		// Jika panjang kata saat ini lebih besar dari panjang kata terpanjang sebelumnya, ganti kata terpanjang
		if (strlen($word) > strlen($longestWord)) {
			$longestWord = $word;
		}
	}

	return $longestWord;
}

// Contoh kalimat
$sentence = "Ini adalah sebuah kalimat dengan beberapa kata jakaalakbar";
$longestWord = findLongestWord($sentence);
echo "Kata terpanjang adalah: " . $longestWord;
