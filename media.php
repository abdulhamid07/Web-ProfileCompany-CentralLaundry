<!DOCTYPE html>
<?php
	session_start();
	include "config/koneksi.php";
	include "config/fungsi_indotgl.php";
?>
<html lang="en">

<head>
<meta charset="utf-8" />
<title>CENTRAL LAUNDRY & DRY CLEANING</title>
<link rel="icon" type="image/png" href="images/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Central laundry, laundry jogja, laundry, cucian, laundry hotel">
<meta name="author" content="Abdul Hamid & Endra Setiawan | ZADA Mediatech Yogyakarta | hamyd.abdul6@gmail.com & setiaendra18@gmail.com">
<!-- Stylesheets -->
<link rel="stylesheet" id="camera-css"  href="css/camera.css" type="text/css" media="all">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/site.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/ticker.css" type="text/css" />

    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<!-- 
    
    
    
    !-->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script language="javascript">

function CekTes(){ 
	var nama=/^[a-zA-Z\\ \\.\\]+$/;
 if(! nama.test(test.nama.value)){
        alert('Hanya isikan huruf pada Nama');
        test.nama.focus();
		return false;
    }
	var email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
		if(! email.test(test.email.value)){
			alert('Email tidak valid');
			test.email.focus();
			return false;
		}
	/*var kodec=document.getElementById("cekcaptcha");
	if(test.kode.value!=test.code.value){
		kodec.innerHTML='Kode Captcha Salah';
		test.kode.focus();
		return false
	} */
		return true
}
function ValSearch(){
	//var cariku=document.getElementById("carijudul");
	if(cari.search.value.length<3){
		//cariku.innerHTML='Pencarian minimal 3 huruf';
		alert("Pencarian minimal 3 huruf");
		cari.search.focus();
		return false
	}
	return true
	
}
</script>

</head>
<body >
	<div class="container box_shadow">
		<!--header-->
		<div class="header">
			<div class="wrap">

				<div class="container">
					<div class="fleft logo"><a href="index.html"><img src="images/logo.png" alt="Central Laundry" /></a></div>
					<?php include "includeIndex/topmenu.php"; ?>

					<div class="clear"></div>
				</div>
				 <div class="collapse clearfix" id="search">

                <form name="cari" class="navbar-form" role="search" action="search.html" method="post" onsubmit="return ValSearch()" >
                <span id="carijudul" style="color:red; font-weight:bold;"></span>
                    <div class="input-group group-addon" style="float:right">
                        <input type="text" name="search" class="form-control"required placeholder="Cari Judul Artikel">
                        <span class="input-group-btn">
							<button type="submit" class="btn navbar-btn btn-warning"><i class="icon icon-white icon-search"></i></button>
		    			</span>
                    </div>
                </form>

            </div>
			</div>
		</div>
        <!--//header-->
        
        
		
		 
		<!--page_container-->
		<div class="page_container">
			<div class="container">
		<?php if($_GET['module']=='index') { ?>
				<!--slider-->
				<?php include "includeIndex/slider.php"; ?>
				<!--//slider-->
		<?php }else{ ?> 
			</div>
			
		<!--Welcome-->
			<div class="breadcrumb">
				<div>
				<?php $pos=$_GET['module'] ?>
					<a href="index-2.html">Home</a><span>/</span><?php echo ucwords(str_replace('-', ' ', $pos)) ?>
				</div>
				<div>					
				</div>
			</div>
		<?php } ?>
		<!--//Welcome-->
			
			
			
			<div class="container">
                <section>
                	
                        	<?php include "select.php" ?>
						
                    	<?php if(($_GET['module']=='index')||($_GET['module']=='blog')||($_GET['module']=='detail')||($_GET['module']=='komentar')||($_GET['module']=='searching')||($_GET['module']=='searchpage')){ ?>
							<?php include "includeIndex/rightbar.php"; ?>                           
                        <?php } ?>                        	
                </section>
            </div>
			
			<!--Welcome-->
<?php if($_GET['module']!='detail'){ ?>
			<div class="wrap welcome_bg">
				<div class="container">
					<div class="welcome_block">
						<p class="fleft">.:PELAYANAN TOTAL</p>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<!--//Welcome-->
			
			
			<!--planning-->
<?php
	$q=mysql_query("select * from layanan_total where aktif='y' order by no limit 0,4");
?>
			<div class="wrap planning">
				<div class="fist_line_planning">
				<?php while($row=mysql_fetch_assoc($q)){ ?>
					<a href="javascript:void(0);">
						<span class="<?php echo $row['color'] ?> service_block">
							<br>
							<center><img  class="icon_block" src="images/layanan/<?php echo $row['img'] ?>" />
							<span class="service_txt"><?php echo $row['ket'] ?></span></center>
						</span>
					</a>
				<?php } ?>
					<div class="clear"></div>
				</div>
			</div>
			</div>
		<?php } ?>
			<!--//planning-->
		<?php if($_GET['module']=='index'){ ?>
        </div>
       	<?php } ?>
		
				
		
		<!--//page_container-->
		
		<!--footer-->
		<div id="footer">
			<div class="wrap">
				<?php include "includeIndex/topfooter.php"; ?>
			</div>
			
			<div class="footer_bottom">
				<div class="wrap">
					<div class="container">
						<div class="fleft copyright">CENTRAL LAUNDRY &copy; <?php echo date('Y') ?>  |  Privacy Policy | Design by
						<a href="#">ZADA Mediatech Yogyakarta</a></div>
						
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<!--//footer-->
	</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57cb6d85cccb3b470cd76674/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="js/camera.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script src="js/htweet.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/custom.js"></script>
      <script src="js/newsticker.js" type="text/javascript"></script>
      <script src="js/testticker.js" type="text/javascript"></script>
          <script src="js/jquery.prettyPhoto.js"></script>

      
      <script>
$(function() {
	var target=$('.header');
	var div_position target.offset().top;
	$(window).scroll(function()){
		var y_position=$(window).scrollTop();

		if(y_position>div_position){
			target.addClass('fixed');
		}else{
			target.removeClass('fixed');
		}
	} 
</script>
<script type='text/javascript'>
$(function() { $(window).scroll(function() { if($(this).scrollTop()>100) { $('#ScrollToTop').fadeIn()} else { $('#ScrollToTop').fadeOut();}});
$('#ScrollToTop').click(function(){$('html,body,php').animate({scrollTop:0},1000);return false})});
</script>
 <style type='text/css' scoped='scoped'>
#ScrollToTop{text-align:center; position:fixed; bottom:0px; left:3px; cursor:pointer;display:none}
</style>
<div id='ScrollToTop'><img alt='Back to top' src='images/top.png'/></div>

	
</body>

</html>

