<?php
	session_start();
	include "../../../../config/koneksi.php";
	include "../../../../config/fungsi_seo.php";

	function anti_injection($data){
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
	}
	$id=$_GET['id'];
	if(($_GET['aksi']=='tambah')||($_GET['aksi']=='edit')){
	  $dir="../../../../images/news/";
	  $Lfile1    = $_FILES['image2']['tmp_name'];
	  $TipeFile1      = $_FILES['image2']['type'];
	  $NamaFile1      = $_FILES['image2']['name'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  $size1= $_FILES['image2']['size'];
	  $UkuranMax=100000; 
	  $gambar=$NamaFile1;

	  $judul=anti_injection($_POST['judul']);
	  $seo_title = seo_title($judul);
	  $desc=$_POST['desk'];
	  $date=date('Y-m-d');
	  $penulis=$_SESSION['kd_user'];
	  $tipe=$_POST['tipe'];

	    $vfile_upload2 = $dir . $NamaFileUnik1;
	  	move_uploaded_file($Lfile1, $vfile_upload2);
	  if($_GET['aksi']=='tambah'){
	  	if($size1>$UkuranMax){
	  		header("location:../../../media.php?fModule=news&err=9");
	  	}else{
	  	$q=mysql_query('INSERT INTO news (img,judul,judul_seo,desk,tgl,penulis,tipe) 
	  					values("'.$NamaFileUnik1.'","'.$judul.'","'.$seo_title.'","'.$desc.'","'.$date.'","'.$penulis.'","'.$tipe.'")');
		header("location:../../../media.php?fModule=news&err=3");
	  	}
	  }else if($_GET['aksi']=='edit'){
	  $no=$_POST['id'];
	  		if($gambar==''){
	  			$q=mysql_query("update news set judul='$judul',judul_seo='$seo_title',desk='$desc',tgl='$date',penulis='$penulis',tipe='$tipe' where no='$no'");	
	  		}else{
	  			$q=mysql_query("update news set img='$NamaFileUnik1',judul='$judul',judul_seo='$seo_title',desk='$desc',tgl='$date',penulis='$penulis',tipe='$tipe' where no='$no'");	
	  		}
	  			header("location:../../../media.php?fModule=news&err=2");
	  }
	}else if($_GET['aksi']=='hapus'){
		$q=mysql_query("delete from news where no='$id'");
		header("location:../../../media.php?fModule=news&err=1");
	}

?>