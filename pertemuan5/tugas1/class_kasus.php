<?php

    class Perintah {
        protected $furniture;
        protected $jenis_perintah;

        protected function __construct($furniture, $jenis_perintah)
        {
            $this->furniture = $furniture;
            $this->jenis_perintah = $jenis_perintah;
        }

        protected function getInfo() {
            echo "Nama Furniture: " . $this->furniture . "<br>";
            echo "Jenis Perintah: " . $this->jenis_perintah . "<br>";
        }
    }
    


    class Perintah2 extends Perintah {
        public $doors;

        public function __construct($furniture, $jenis_perintah, $doors)
        {
            parent::__construct($furniture, $jenis_perintah);
            $this->doors =$doors;
        }

        public function getPerintah2() {
            parent::getInfo();
            echo "Jumlah Pintu: " . $this->doors . "<br>";
        }
    }

    
    class Perintah3 extends Perintah {
        public $doors;

        public function __construct($furniture, $jenis_perintah, $doors)
        {
            parent::__construct($furniture, $jenis_perintah);
            $this->doors =$doors;
        }

        public function getPerintah3() {
            parent::getInfo();
            echo "Jumlah Pintu: " . $this->doors . "<br>";
        }
    }

?>