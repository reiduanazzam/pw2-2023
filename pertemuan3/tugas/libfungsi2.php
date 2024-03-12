<?php
    function predikat($grade){
        switch ($grade) {
            case 'A':
                return 'Sangat Memuaskan';
            case 'B':
                return 'Memuaskan';
            case 'C':
                return 'Cukup Memuaskan';
            case 'D':
                return 'Kurang Memuaskan';
            case 'E':
                return 'Tidak Memuaskan';
            default :
                return 'kosong';
        }
    }

	function kelulusan($keterangan){
		
        if ($keterangan >= 55) {
            return 'Lulus';
        } else {
            return 'Tidak Lulus';
        }
	}
	
	function grade($keterangan) { 
        if ($keterangan = 100 && $keterangan >= 85) {
            return 'A';
        } elseif ($keterangan <= 84 && $keterangan >= 70) {
            return 'B';
        } elseif ($keterangan <= 69 && $keterangan >= 56) {
            return 'C';
        } elseif ($keterangan <= 55 && $keterangan >= 36) {
            return 'D';
        } elseif ($keterangan <= 35 && $keterangan >= 0) {
            return 'E';
        } else {
            return 'I';
        }
	}
?>