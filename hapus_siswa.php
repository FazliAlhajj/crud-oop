<?php 
    require "class/Siswa.php";

    $id = $_GET["id"];
    
    $siswa = new Siswa; 
    $siswa->hapus_siswa($id);
    header("location: siswa.php");

?>