<div>
					<div class="row">
						<div class="span4">
							<h2 class="titleputih"><img src="images/about.png"> EXCLUSIVE MEMBER CARD</h2>
							<p><img src="images/kartu.png"> </p>
<p class="isib" align="justify">Dan Bagi Para Pelanggan Spesial, kami persembahkan manfaat dan banyak kemudahan dengan fasilitas <B>MEMBER CARD CENTRAL</B>
</p>
<p class="isib" align="justify">Segera hubungi customer service kami yang akan mendata dan mencatat 
para pelanggan menjadi bagiandari customer ekslusif kami, guna untuk mendapatkan banyak manfaat sebagi pemegang kartu</p>
						</div>
						
						<div class="span4abu">
						<h2 class="title"><img src="images/blog.png"> BLOG</h2>
						 <div id="listticker">
							 <ul>
  <?php            
  $sebelum=mysql_query( "SELECT * FROM news where tipe='B' ORDER BY no DESC LIMIT 10");		 
  while($t=mysql_fetch_array($sebelum)){
  $tgl = tgl_indo($t['tgl']);
  echo "<li class='lticker'><a href=news-$t[no]-$t[judul_seo].html>
  <div class=judul>".strtoupper($t['judul'])."</div></a>"; 		    
  // Tampilkan hanya sebagian isi blog
  $isi_blog = htmlentities(strip_tags($t['desk'])); // membuat paragraf pada isi blog dan mengabaikan tag html
  $isi = substr($isi_blog,0,130); // ambil karakter
  $isi = substr($isi_blog,0,strrpos($isi," ")); // potong per spasi kalimat
  echo " <div class=isib>$isi ... <a href=news-$t[no]-$t[judul_seo].html>
  <span class=lengkap>[selengkapnya] &nbsp;</span></a></div></li>
  ";} 
  ?>
  </ul></div>
						</div>
						<div class="span4">
							<h2 class="titleputih"><img src="images/contact.png"> KONTAK KAMI</h2>
						<?php $q=mysql_query("select * from cabang"); 
						while($dc=mysql_fetch_assoc($q)){	   
						?>

						<p class="kkota">
							<b><?php echo strtoupper($dc['kota']) ?></b>
						<br>
							<i class="icon icon-white icon-map-marker"></i><font style="font-size:12px;text-transform:italic;"> <?php echo $dc['alamat'] ?></font>
						<br>
							<i class="icon icon-white icon-envelope"></i> <?php echo $dc['telp'] ?>
						</p>
						<?php } ?>
						<a href="contact.html" class="btn btn-default">KONTAK KAMI</a>
						
						</div>
					</div>
				</div>