<?php
	include "../../../config/koneksi.php";
	//include "../../../config/gambar.php";
	$id=$_GET['id'];
	$st=$_GET['st'];

	if(($_GET['aksi']=='tambah')||($_GET['aksi']=='edit')){

	  $dir="../../../images/layanan/";
	  $Lfile1    = $_FILES['image1']['tmp_name'];
	  $TipeFile1      = $_FILES['image1']['type'];
	  $NamaFile1      = $_FILES['image1']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image1']['size'];
	  $UkuranMax=100000; // Dalam bytes
	  $gambar=$NamaFile1;
	  $desc=$_POST['desc'];
	  $warna=$_POST['warna'];
	  $akt=$_POST['aktif'];

	  if($_GET['aksi']=='tambah'){
	  	if($size1>$UkuranMax){
	  		header("location:../../media.php?fModule=layanan&err=9");
	  	}else{
	  	$vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);	
	  	$q=mysql_query('INSERT INTO layanan_total (img,ket,color,aktif) 
	  					values("'.$NamaFileUnik1.'","'.$desc.'","'.$warna.'","'.$akt.'")');
		header("location:../../media.php?fModule=layanan&err=3");
	  	}
	  }else if($_GET['aksi']=='edit'){
	  $no=$_POST['id'];
	  		if($gambar==''){
	  			$q=mysql_query("update layanan_total set ket='$desc',color='$warna' where no='$no'");	
	  		}else{
	  			$q=mysql_query("update layanan_total set img='$NamaFileUnik1', ket='$desc',color='$warna' where no='$no'");	
	  		}
	  			header("location:../../media.php?fModule=layanan&err=2");
	  }
	}else if($_GET['aksi']=='hapus'){
		$q=mysql_query("delete from layanan_total where no='$id'");
		header("location:../../media.php?fModule=layanan&err=1");
	}else if($_GET['aksi']=='aktif'){
		$st=$_GET['st'];
		if($st=='y'){
		$q=mysql_query("update layanan_total set aktif='n' where no='$id'"); echo mysql_error();
		}else{
		$q=mysql_query("update layanan_total set aktif='y' where no='$id'");	
		}
		header("location:../../media.php?fModule=layanan&err=2");
	}
?>