<?php
  $koneksi = mysql_connect("0.0.0.0:8080","root","root","Portofolio_Hilman");
  $hasil = mysql_query($koneksi , "SELECT * FROM user");
  ?>
  
  <-- <?php
       function project($isi){
        global $koneksi;
        $c = mysqli_query($koneksi,$isi);
        $box = [];
        while ($row = mysqli_fetch_assoc($c)){ 
          $box = $row
        }
       }
?> -->
  
