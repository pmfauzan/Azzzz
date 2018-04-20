<?php
include "connect.php";
 
 $link=connect_db();
$_SESSION['jkt']=$_GET['jkt'];

if(!empty($_SESSION['jkt']))
{
$_SESSION['jkt']=$_GET['jkt'];
    $sql="select * from barang where id_barang like '%".$_SESSION['jkt']."%'";
    $res=mysqli_query($link,$sql);
    $data=mysqli_fetch_array($res);
 
 $hrg=isset($_POST['hrg']);
 $jml=isset($_POST['jml']);
 $tot=isset($_POST['total']);
 $tipe=isset($_POST['tipe']);
 $bank=isset($_POST['bank']);

 $sql="insert into pembayaran (harga,jumlah,total_harga,tipe_pembayaran,bank) values ('$hrg','$jml','$tot','$tipe','$bank');";
 $res=mysqli_query($link,$sql);

if($res)
 {
 	?>
 	<script>
                                function add() {
                                window.alert("Pemesanan Berhasil !");
                                }
                                </script>
    <?php
 	header("Location:index.php");
 }
 else
 {
	echo "<center><h1>Gagal Menambah Data Pembayaran</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br> Kembali <br> 
	<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link Ini</a>
	</center>";
 }
}
?>