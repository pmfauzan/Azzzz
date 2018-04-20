<?php
include "connect.php";
$link=connect_db();

if(!empty(isset($_POST['nama'])))
{
$sqld="select * from inf_lokasi where lokasi_propinsi=".$_POST['prop']."";
    $resd=mysqli_query($link,$sqld);
    $datad=mysqli_fetch_array($resd);
$sqlk="select * from inf_lokasi where lokasi_propinsi=".$_POST['prop']." and lokasi_kabupatenkota=left('".$_POST['kota']."',2)";
    $resk=mysqli_query($link,$sqlk);
    $datak=mysqli_fetch_array($resk);
$sqlkc="select * from inf_lokasi where lokasi_propinsi=".$_POST['prop']." and lokasi_kabupatenkota=left('".$_POST['kota']."',2) and lokasi_kecamatan=left('".$_POST['kec']."',2)";
    $reskc=mysqli_query($link,$sqlkc);
    $datakc=mysqli_fetch_array($reskc);

 $nama=$_POST['nama'];
 $mail=$_POST['email'];
 $alm=$_POST['alamat'];
 $prop=$datad[lokasi_nama];
 $kota=$datak[lokasi_nama];
 $kec=$datakc[lokasi_nama];
 $kdp=$_POST['kdpos'];
$tlp=$_POST['tlp'];

 $_SESSION['jkt']=$_GET['jkt'];
 
 
 $sql="insert into pemesan (id_pemesan,nama,email,alamat,provinsi,kota,kecamatan,kode_pos,telepon) values ('$id','$nama','$mail','$alm','$prop','$kota','$kec','$kdp','$tlp');";
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
 	header("Location:checkout.php?jkt=".$_SESSION['jkt']."");
 }
 else
 {
	echo "<center><h1>Gagal Menambah Data Pesanan</h1><br>";
	echo "Error : ".mysqli_error($link);
	echo "<br> Kembali <br> 
	<a href='menu_utama.php?menu=mata_kuliah&action=tampil'>Link Ini</a>
	</center>";
 }
}
?>