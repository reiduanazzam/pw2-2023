<?php
    include_once 'header.php';
?>
<form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="" action="form_nilai.php">
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table table-bordered">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rul</td>
              <td>Statistika dan Probabilitas</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php	
                    require_once 'libfungsi2.php';
                    
	                if (isset($_POST['proses'])) {
		                $nama_lengkap = $_POST['nama_lengkap'];
		                $mata_kuliah = $_POST['matkul'];
		                $nilai_uts = $_POST['nilai_uts'];
		                $nilai_uas = $_POST['nilai_uas'];
		                $nilai_tugas = $_POST['nilai_tugas'];

                        $keterangan = number_format (($nilai_uts + $nilai_uas + $nilai_tugas) / 3, 2);
                        $lulus = kelulusan ($keterangan);
                        $predikat = predikat ($lulus);
                        $grade = grade ($predikat);
                        echo '<tr>';
                        echo '<td> 3 </td>';
                        echo '<td> ' . $nama_lengkap . '</td>';
				  		echo '<td> ' . $mata_kuliah . '</td>';
				  		echo '<td> ' . $nilai_uts . '</td>';
				  		echo '<td> ' . $nilai_uas . '</td>';
  				  		echo '<td> ' . $nilai_tugas . '</td>';
                        echo '<td> ' . $keterangan . '</td>';
                        echo '<td> ' . $grade . '</td>';
                        echo '<td> ' . $lulus . '</td>';
                        echo '<td> ' . $predikat . '</td>';
                        echo '</tr>'; 
                        
	                }
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>