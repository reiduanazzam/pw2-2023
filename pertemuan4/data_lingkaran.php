<?php
    require_once 'class_lingkaran.php';

    echo "Nilai PHI " . Lingkaran::PHI; // titik dua 2 kali utk manggil const di luar class

    $lingkar1 = new Lingkaran(4);
    $lingkar2 = new Lingkaran(5);

    echo '<br>Luas Lingkaran 1 = ' . $lingkar1->getLuas() . ' cm';
    echo '<br>Keliling Lingkaran 1 = ' . $lingkar1->getKel() . ' cm'; 

    echo '<br>Luas Lingkaran 2 = ' . $lingkar2->getLuas() . ' cm';
    echo '<br>Keliling Lingkaran 2 = ' . $lingkar2->getKel() . ' cm';


?>