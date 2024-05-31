<?php
function countOccurrences($input, $output)
{
	// Inisialisasi array hasil
	$result = [];

	// Iterasi setiap kata dalam array QUERY
	foreach ($output as $queryWord) {
		// Hitung jumlah kemunculan kata dalam array INPUT
		$count = 0;
		foreach ($input as $inputWord) {
			if ($queryWord === $inputWord) {
				$count++;
			}
		}
		// Simpan hasil dalam array
		$result[$queryWord] = $count;
	}

	var_dump($result);
	return $result;
}

// Contoh array INPUT dan QUERY
$input = ['xc', 'dz', 'bbb', 'dz'];
$output = ['bbb', 'ac', 'dz'];

// Panggil fungsi dan cetak hasilnya
$occurrences = countOccurrences($input, $output);
foreach ($occurrences as $queryWord => $count) {
	echo "Kata '$queryWord' muncul $count kali\n";
}
