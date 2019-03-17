<?php
    
    $kon = mysqli_connect("localhost", "id8951477_alfian",'12345678',"id8951477_akademik");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>
