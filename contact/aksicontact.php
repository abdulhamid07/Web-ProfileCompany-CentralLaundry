<?php
session_start();
include "../config/koneksi.php";
function anti_injection($data){
$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}
$qs=mysql_query("select link from socmed where no in(4)");
$ds=mysql_fetch_assoc($qs);

$nama=anti_injection($_POST['nama']);
$email=anti_injection($_POST['email']);
$subjek=anti_injection($_POST['subjek']);
$pesan=anti_injection($_POST['message']);
$captcha=anti_injection($_POST['kode']);
$date = date("Y-m-d");

if($captcha!=$_SESSION['captcha_session']){
	exit("<script>alert('Kode yang dimasukkan salah'); window.history.back(); </script>");
}else{
$data = mysql_query('insert into pesan(nama,email,subjek,pesan,tgl)values("'.$nama.'","'.$email.'","'.$subjek.'","'.$pesan.'","'.$date.'")');
$email_from=$email;
$email_to = $ds['link'];//replace with your email

    $body = 'Name: ' . $nama. "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subjek . "\n\n" . 'Message: ' . $pesan;
    $success = @mail($email_to, $subjek, $body, 'From: <'.$email_from.'>');
header("location:../contact-9.html");
}	
?>