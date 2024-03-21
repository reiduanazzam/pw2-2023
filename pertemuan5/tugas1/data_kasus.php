<?php

    require_once 'class_kasus.php';

    $motor = new Perintah2('Lemari', 'Buka Lemari', 2);
    $submarine = new Perintah3('Lemari', 'Tutup Lemari', 2);

    echo 'Perintah Pertama:<br>';
    $motor->getPerintah2();
    echo '<br>';

    echo 'Perintah Kedua<br>';
    $submarine->getPerintah3();
    echo '<br>';


?>