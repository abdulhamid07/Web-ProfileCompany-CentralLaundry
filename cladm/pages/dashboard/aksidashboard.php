<?php
	include "../../../config/koneksi.php";

		function anti_injection($data){
			$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
			return $filter;
		}
	$no=$_POST['no'];
	$id=$_GET['id'];
	if($_GET['aksi']=='editym'){
		$nama=anti_injection($_POST['nama']);
		$usr=anti_injection($_POST['user']);
		$q=mysql_query("update mod_ym set nama='$nama',username='$usr' where no='$no'");
		header("location:../../media.php?fModule=index&err=2");
	}else if($_GET['aksi']=='hapusym'){
		$q=mysql_query("delete from mod_ym where no='$id'");
		header("location:../../media.php?fModule=index&err=1");

	}else if($_GET['aksi']=='editowner'){
	  $dir="../../../images/";
	  //$tipe_array=array('jpg','jpeg','png','gif','bmp');
	  $Lfile1    = $_FILES['image']['tmp_name'];
	  $TipeFile1      = $_FILES['image']['type'];
	  $NamaFile1      = $_FILES['image']['name'];
	  $size1= $_FILES['image']['size'];
	  $acak1           = rand(1,99);
	  $NamaFileUnik1 = $acak1.$NamaFile1;
	  //$filename=strtolower(end(explode('.', $NamaFile1)));
	  //$ext=$filename[count($filename)-1];
	  $UkuranMax=100000; // Dalam bytes
	  $gambar=$NamaFile1;

	  $nama=$_POST['nama'];
	  $desc=$_POST['desc'];
	 

	  if($gambar=''){
	  		
	  			$q=mysql_query("update owner set nama='$nama',ket='$desc' where no='$no'");	
	  }else{
	  	if($size1>$UkuranMax){
	  		header("location:../../media.php?fModule=index&err=9");
	  	}else{
	  	//if(($TipeFile1=="jpg")||($TipeFile1=="jpeg")||($TipeFile1=="png")||($TipeFile1=="gif")||($TipeFile1=="bmp")){
	  		$vfile_upload = $dir . $NamaFileUnik1;
	  		move_uploaded_file($Lfile1, $vfile_upload);
	  		$q=mysql_query("update owner set img='$NamaFileUnik1', nama='$nama',ket='$desc' where no='$no'");
	  	/*}else{
	  		header("location:../../media.php?fModule=index&err=9");
	  	}*/	
	  	}
	  }
	  		header("location:../../media.php?fModule=index&err=2");

	}else if($_GET['aksi']=='hapusowner'){
		$q=mysql_query("delete from owner where no='$id'");
		header("location:../../media.php?fModule=index&err=1");
	}else if(($_GET['aksi']=='edituser')||($_GET['aksi']=='adduser')||($_GET['aksi']=='edit')){
		$id=$_POST['adminno'];
		$nama=anti_injection($_POST['adminnama']);
		$user=anti_injection($_POST['adminusr']);
		$pass=md5($_POST['adminpsw1']);
		$psw=anti_injection($pass);
		$level=$_POST['level'];
		if($_GET['aksi']=='edituser'){
		$q=mysql_query("update user set nama='$nama',username='$user',password='$psw'"); ("".mysql_error());
		header("location:../../media.php?fModule=index&err=3");
		}else if($_GET['aksi']=='adduser'){
		
		$q=mysql_query('insert into user (nama,username,password,level)
						values("'.$nama.'","'.$user.'","'.$psw.'","'.$level.'")'); ("".mysql_error());	
		header("location:../../media.php?fModule=index&err=3");
		}else if($_GET['aksi']=='edit'){
			$q=mysql_query("update user set nama='$nama',username='$user',password='$psw',level='$level' where kd_user='$id'");
		header("location:../../media.php?fModule=index&err=2");	
		}
	}else if($_GET['aksi']=='hapus'){
		$id=$_GET['id'];
		$q=mysql_query("delete from user where kd_user='$id'");
		header("location:../../media.php?fModule=index&err=1");
	}
?>