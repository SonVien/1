<?php
$konek=mysqli_connect("localhost","root","");
$db=mysqli_select_db($konek,"sandirpl");
if($konek){
    echo "koneksi berhasil";
}
?>
