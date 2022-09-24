<?php
include 'konek.php';
if(isset($_POST['btnProses'])){
    $nama =$_POST['nama'];
    $nis=$_POST['nis'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $jurusan=$_POST['jurusan'];
    echo $nama;
    
    if($_POST['btnProses']=="tambah"){
        $query="INSERT INTO tb_siswa VALUES('','$nama','$nis','$kelas','$alamat','$jurusan')";
        $sql=mysqli_query($konek,$query);
        if ($sql){
            header('location:index2.php');
        }
    } else {
        echo "edit data";
    }
}elseif($_GET['hapus']){
    echo "hapus"; 
    $query="DELETE FROM tb_siswa WHERE id='$_GET[hapus]'";
    $sql=mysqli_query($konek,$query);
    if ($sql){
        header('location:index2.php');
    }
}
?> 