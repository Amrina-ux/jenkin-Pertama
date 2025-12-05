<?php

class Calculator
{
    // Fungsi penjumlahan
    public function add($a, $b)
    {
        return $a + $b;
    }

    // Fungsi pengurangan
    public function subtract($a, $b)
    {
        return $a - $b;
    }

    // Fungsi perkalian
    public function multiply($a, $b)
    {
        return $a * $b;
    }

    // Fungsi pembagian
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new Exception("Tidak bisa membagi dengan nol!");
        }
        return $a / $b;
    }
}

// Bagian eksekusi manual (jika ingin coba langsung di terminal)
$calc = new Calculator();

echo "Hasil Tambah (5 + 3) = " . $calc->add(5, 3) . PHP_EOL;
echo "Hasil Kurang (10 - 4) = " . $calc->subtract(10, 4) . PHP_EOL;
echo "Hasil Kali (6 * 7) = " . $calc->multiply(6, 7) . PHP_EOL;
echo "Hasil Bagi (20 / 5) = " . $calc->divide(20, 5) . PHP_EOL;
