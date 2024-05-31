<?php
function diagonalDifference($matrix)
{
	// Asumsikan matriks NxN, jadi jumlah baris atau kolom bisa digunakan
	$n = count($matrix);
	$primaryDiagonalSum = 0;
	$secondaryDiagonalSum = 0;

	for ($i = 0; $i < $n; $i++) {
		$primaryDiagonalSum += $matrix[$i][$i]; // Diagonal utama
		$secondaryDiagonalSum += $matrix[$i][$n - $i - 1]; // Diagonal sekunder
	}

	return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}

// Contoh matriks
$matrix = [
	[1, 2, 0],
	[4, 5, 6],
	[7, 8, 9]
];

$result = diagonalDifference($matrix);
echo "Hasil pengurangan jumlah diagonal adalah: " . $result;
