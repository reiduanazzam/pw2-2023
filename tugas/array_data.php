<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi (yang udah ada di contoh: pisang, melon, berry)
  */
  $m_fruits = [
    ["ID" => "1", "name" => "Semangka", "color" => "Merah", "stock" => 25, "price" => 29000, "description" => "Buah yang dagingnya berwarna merah yang segar"],
    ["ID" => "2", "name" => "Jeruk", "color" => "Oranye", "stock" => 15, "price" => 19000, "description" => "Buah berwarna oranye yang segar"],
    ["ID" => "3", "name" => "Salak", "color" => "Coklat", "stock" => 10, "price" => 17000, "description" => "Buah berkulit coklat yang dagingnya berwarna putih"],
    ["ID" => "4", "name" => "Nanas", "color" => "Kuning", "stock" => 20, "price" => 26000, "description" => "Buah berwarna kuning yang rasanya terkadang asam"],
    ["ID" => "5", "name" => "Anggur", "color" => "Ungu", "stock" => 15, "price" => 21000, "description" => "Buah berwarna ungu yang bijinya bisa dimakan"],
    ["ID" => "6", "name" => "Mangga", "color" => "Hijau", "stock" => 23, "price" => 23000, "description" => "Buah berkulit hijau yang dagingnya berwarna oranye/kuning"],
    ["ID" => "7", "name" => "Pepaya", "color" => "Oranye", "stock" => 30, "price" => 30000, "description" => "Buah yang bisa membantu melancarkan BAB"],
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
          foreach($m_fruits[0] as $header){
            echo "<td>".$header."</td>";
          }
          for($i=1;$i<count($m_fruits);$i++){
           echo "<tr>";
          foreach($m_fruits[$i] as $row_data){
           echo "<td>".$row_data."</td>";
         }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
