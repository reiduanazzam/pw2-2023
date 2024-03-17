<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {

        public function __construct($a, $b) {
            $this->a =$a;
            $this->b =$b;
        }

        public function tambah($a, $b) {
            return $a + $b;
        }

        public function kurang($a, $b) {
            return $a - $b;
        }

        public function bagi($a, $b) {
            if ($b == 0) {
                return "Error: Pembagi tidak boleh nol";
            }
            return $a / $b;
        }

        public function kali($a, $b) {
            return $a * $b;
        }

        // Method lainnya
    }

    // Buat object dan tampilkan masing-masing method
    $calculator = new Calculator(15, 5);

    echo "Hasil Tambah: " . $calculator->tambah(15, 5) . "\n";
    echo '<br>';
    echo "Hasil Kurang: " . $calculator->kurang(15, 5) . "\n";
    echo '<br>';
    echo "Hasil Bagi: " . $calculator->bagi(15, 5) . "\n";
    echo '<br>';
    echo "Hasil Bagi dengan Pembagi Nol: " . $calculator->bagi(15, 0) . "\n";
    echo "<br>";
    echo "Hasil Kali: " . $calculator->kali(15, 5) . "\n";
    echo '<br>';

?>