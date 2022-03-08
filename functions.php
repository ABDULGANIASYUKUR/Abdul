<?php
    $koneksi = mysqli_connect("0.0.0.0:3306","root","root","Portofolio_Amel");
    $a= mysqli_query($koneksi, "SELECT * FROM User");
    $b= mysqli_query($koneksi, "SELECT * FROM about");
    
    function data($isi){
        global $koneksi;
        $c = mysqli_query($koneksi , $isi);
        $box = [];
        while ($lakukan = mysqli_fetch_assoc($c)){
            $box[] = $lakukan;
        }
        return $box;
    }
    
    function tambah($data){
        global $koneksi;
        $email = $data["email"];
        $nama  = $data["nama_k"];
        $pesan = $data["pesan"];
        
        $query = "INSERT INTO Contact VALUES(NULL,'$email','$nama','$pesan')";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
    
?>