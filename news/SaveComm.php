<?php
	include "../config/koneksi.php";
	$id=$_GET['id'];
	function anti_injection($data){
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
	}
	$nama=anti_injection($_POST['nama']);
	$email=anti_injection($_POST['email']);
	$pesan=anti_injection($_POST['pesan']);
	$captcha=anti_injection($_POST['captcha']);
	$date = date("Y-m-d");
	$q=mysql_query('insert into comment (nama,email,pesan,tgl,id_news)
					values ("'.$nama.'","'.$email.'","'.$pesan.'","'.$date.'","'.$id.'")');
	header("location:../komentar-err.html");		
?>