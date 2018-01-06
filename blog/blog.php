<?php  $md=$_GET['module']; ?>
<div class="row">
<div class="span8">
<div class="post">
							<!--Welcome-->		
					<div class="wrap welcome_bg">
						<div class="container">
							<div class="welcome_block">
								<p class="fleft">.:<?php if(($md=='searching')||($md=='searchpage')){ ?>HASIL PENCARIAN<?php }else{ ?>Blog<?php } ?></p>
								<div class="clear"></div>
							</div>
						</div>
					</div>
         

 <?php 
 if($md=='searching'){
        $judul=$_POST['search'];
      }
       $pag_blog=6;
       $dataPerhalaman = $pag_blog;
       $cetak="";
        if(isset($_GET['halaman'])){
          $nohalaman = $_GET['halaman'];
        }else{ 
          $nohalaman = 1;
        }
            // perhitungan offset
          $offset = ($nohalaman - 1) * $dataPerhalaman;
           if($md=='searching'){

          $q  = mysql_query("SELECT COUNT(*) AS jumData FROM news where judul LIKE '%$judul%'");
          $data = mysql_fetch_array($q);
          $query = mysql_query("select *,u.nama from news n
                                left join user u on u.kd_user=n.penulis where judul LIKE '%$judul%' order by rand(no) $cetak LIMIT $offset, $dataPerhalaman");
          }else{
          $q  = mysql_query("SELECT COUNT(*) AS jumData FROM news where tipe='B'");
          $data = mysql_fetch_array($q);
          $query = mysql_query("select *,u.nama from news n
                                left join user u on u.kd_user=n.penulis where tipe='B' order by tgl desc $cetak LIMIT $offset, $dataPerhalaman");
          }
          if($_GET['module']=='searching'){
                  if($data['jumData']>0){
                    echo "<div class=\"alert alert-success alert-dismissable\">
                                        <i class=\"icon icon-ok-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Ada $data[jumData] artikel ditemukan.</div>";
                  }else{
                     echo "<div class=\"alert alert-warning alert-dismissable\">
                                        <i class=\"icon icon-warning-sign\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Tidak ada artikel ditemukan.</div>";

                  }
          }
                    while($row=mysql_fetch_assoc($query)){ 
          $qcom = mysql_query("select * from comment where id_news='$row[no]'");
          ?>
          <h2 class="title"><a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html"><?php echo $row['judul'] ?></a></h2>
          <div style="padding-top:0px;">On <span><?php echo tgl_indo($row['tgl']) ?></span> / By <a href="#"><?php echo ucwords($row['nama']) ?></a>
          <span style="float:right;"><a href="#"><?php echo mysql_num_rows($qcom); ?></a> Comments</span>
            <span class="imageberita2"><img src="images/news/<?php echo $row['img'] ?>" alt="" width="90px"  height="70px" border="0"/> </span>
            <hr style="margin:3px;">
          </div>
                          
              <?php // Tampilkan hanya sebagian isi blog
                  $isi_blog = strip_tags($row['desk']); 
                  $isi = substr($row['desk'],0,200); 
                  $isi = substr($isi_blog,0,strrpos($isi," ")); 
              ?>
               <div class="isiberita2"><?php echo $isi ?>...  <a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html"><span class="lengkap2">[Selengkapnya]</span></a></div>
                                  <div class="clear"></div>

          <?php } ?>
      </div>


                      

  <?php

    $jumData = $data['jumData'];
    if(($md=='searching')&&($data['jumData']==0)){

    }else if(($md=='searching')&&($data['jumData']>6)){
      // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
    $jumhalaman = ceil($jumData/$dataPerhalaman);
  ?>

<div class="pagination">
  <ul>
  <?php
        echo "<li class='disabled'><a href='#'>Jumlah Record : $jumData </a></li>";

      // menampilkan link previous
    if ($nohalaman > 1){ ?>
    <li><a href="<?php if(($md=='searching')||($md=='searchpage')){ ?>search<?php }else{ ?>blog<?php } ?>-halaman-<?php echo ($nohalaman-1) ?>.html">&lt;&lt; Prev</a></li>
    
    <?php
  }
    else
    {
      echo  "<li class='disabled'><a href='#'>&lt;&lt; Prev</a></li>";
      }



          // memunculkan nomor halaman dan linknya
    for($halaman = 1; $halaman <= $jumhalaman; $halaman++)
    {
         if ((($halaman >= $nohalaman - 3) && ($halaman <= $nohalaman + 3)) || ($halaman == 1) || ($halaman == $jumhalaman)) 
         {   
          
          if ($halaman == $nohalaman){ 
            echo " <li class='active'><a href='#'>".$halaman."</a></li> ";
          }else{ ?>
            <li><a href="<?php if(($md=='searching')||($md=='searchpage')){ ?>search<?php } else{ ?>blog<?php } ?>-halaman-<?php echo $halaman ?>.html"><?php echo $halaman ?></a></li>
          <?php }
          $showhalaman = $halaman;          
         }
    }

          // menampilkan link next
    if ($nohalaman < $jumhalaman){ ?>
      <li><a href="<?php if(($md=='searching')||($md=='searchpage')){?>search<?php }else{ ?>blog<?php } ?>-halaman-<?php echo ($nohalaman+1) ?>.html">Next &gt;&gt;</a></li>
    <?php
    }
    else
    {
      echo "<li class='disabled'><a href='#'>Next &gt;&gt;</a></li>";
    }
        echo "<li class='disabled'><a href='#'>Page $nohalaman Of $jumhalaman</a></li>";

  ?>

    </ul>
  </div>
  <?php } ?>
  </div>

