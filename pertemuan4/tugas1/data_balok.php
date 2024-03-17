<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
    require_once 'class_balok.php';
    
    $balok1 = new Balok(7, 8, 9);
    $balok2 = new Balok(9, 10, 11);
    $balok3 = new Balok(12, 13, 14);
    $balok4 = new Balok(15, 16, 17);

    echo '<br>Luas Balok 1 = ' . $balok1->getLuas() . ' cm';
    echo '<br>Keliling Balok 1 = ' . $balok1->getKeliling() . ' cm';
    echo '<br>Volume Balok 1 = ' . $balok1->getVolume() . ' cm';
    echo '<br>';
    echo '<br>Luas Balok 2 = ' . $balok2->getLuas() . ' cm';
    echo '<br>Keliling Balok 2 = ' . $balok2->getKeliling() . ' cm';
    echo '<br>Volume Balok 2 = ' . $balok2->getVolume() . ' cm';
    echo '<br>';
    echo '<br>Luas Balok 3 = ' . $balok3->getLuas() . ' cm';
    echo '<br>Keliling Balok 3 = ' . $balok3->getKeliling() . ' cm';
    echo '<br>Volume Balok 3 = ' . $balok3->getVolume() . ' cm';
    echo '<br>';
    echo '<br>Luas Balok 4 = ' . $balok4->getLuas() . ' cm';
    echo '<br>Keliling Balok 4 = ' . $balok4->getKeliling() . ' cm';
    echo '<br>Volume Balok 4 = ' . $balok4->getVolume() . ' cm';
    
?>