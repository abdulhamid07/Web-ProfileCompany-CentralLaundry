 <?php
    $q=mysql_query("select * from news order by tgl desc limit 0,3");
    $qo=mysql_query("select * from owner");
    $do=mysql_fetch_assoc($qo);
 ?>                           	
								        <div class="span4">
                        <?php if($_GET['module']=='index'){ ?>
                        </br></br>
                        <?php } ?>
                          <div class="sidebar">
                                <div class="widget">
                                    <h2 class="title">CUSTOMER SERVICE</h2>
                                    <?php 
                                          //ym
                                          $ym=mysql_query("select * from mod_ym order by no desc");
                                          while($t=mysql_fetch_array($ym)){ ?>
                                           		<center>
                                                  <a href="ymsgr:sendIM?<?php echo $t['username'] ?>">
                                                  <img src="http://opi.yahoo.com/online?u=<?php echo $t['username'] ?>&amp;m=g&amp;t=14&amp;l=us"></a>
                                                  <p><?php echo $t['nama'] ?></p></center>
                                          <?php }
                                    ?>                                 
                                </div>
                                <div class="widget">
                                	<h2 class="title">PENDIRI & DIREKTUR UTAMA</h2>
                                	<a href="about.html" title="Lihat Profile Lengkap"><center><img src="images/<?php echo $do['img']?>" alt="Gambar Owner" width="150px" height="200px">
                                  <h4><font color="white"><?php echo strtoupper($do['nama']) ?></font></h4></center>
                                  </a>


                                   
                                </div>
								
                                <div class="widget">
                                	<h2 class="title">POSTING TERBARU</h2>
                                	<ul class="recent_post">
                                    <?php while($row=mysql_fetch_assoc($q)){ ?>
                                        <li>
                                        	<a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo']?>.html"><img src="images/news/<?php echo $row['img'] ?>" alt="" /></a>
                                            <div><a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo']?>.html"><?php echo $row['judul'] ?></a></div>
                                            <?php echo tgl_indo($row['tgl']) ?>
                                        	<div class="clear"></div>
                                        </li>
                                    <?php } ?>
                                       
                                    </ul>
                                	 
                                </div>
                                
                                
                                <div class="widget">
                                	<h2 class="title">STATISTIK PENGUNJUNG</h2>
                                	                       <?php
  // Statistik user
  $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
  $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
  $waktu   = time(); // 

  // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini 
  $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
  // Kalau belum ada, simpan data user tersebut ke database
  if(mysql_num_rows($s) == 0){
    mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
  } 
  else{
    mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
  }

  $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
  $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0); 
  $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
  $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0); 
  $bataswaktu       = time() - 300;
  $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

  $path = "counter/";
  $ext = ".png";

  $tothitsgbr = sprintf("%06d", $tothitsgbr);
  for ( $i = 0; $i <= 9; $i++ ){
       $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
  }

  echo "<p align='left'>
      <img src='counter/hariini.png'> Pengunjung hari ini : $pengunjung <br />
      <img src='counter/total.png'> Total pengunjung    : $totalpengunjung <br />
      <img src='counter/hariini.png'> Hits hari ini    : $hits[hitstoday] <br />
      <img src='counter/total.png'> Total Hits       : $totalhits <br />
      <img src='counter/online.png'> Pengunjung Online: $pengunjungonline<br /> </p>
      <p align='left'>$tothitsgbr </p>";
?>                                 
                                </div>
                            </div> 
                          </div>
                        </div>  
                                                    
 