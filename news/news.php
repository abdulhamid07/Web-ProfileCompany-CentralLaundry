<div class="row">

<div class="span8">
<div class="post">
							<!--Welcome-->		
					<div class="wrap welcome_bg">
						<div class="container">
							<div class="welcome_block">
								<p class="fleft">.:NEWS & INFO</p>
								<div class="clear"></div>
							</div>
						</div>
					</div>
         

 <?php 
       $dataPerhalaman = $paging_news;
       $cetak="";
        if(isset($_GET['halaman'])){
          $nohalaman = $_GET['halaman'];
        }else{ 
          $nohalaman = 1;
        }
            // perhitungan offset
          $offset = ($nohalaman - 1) * $dataPerhalaman;
         
          $q  = mysql_query("SELECT COUNT(*) AS jumData FROM news where tipe='N'");
          $data = mysql_fetch_array($q);
          $query = mysql_query("select *,u.nama from news n
                                left join user u on u.kd_user=n.penulis where tipe='N' order by rand(no) $cetak LIMIT $offset, $dataPerhalaman");
           if($_GET['module']=='komentar'){ ?>
                                <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Terima kasih atas komentar Anda.</div>
        <?php } while($row=mysql_fetch_assoc($query)){ 
          $qcom = mysql_query("select * from comment where id_news='$row[no]'"); ?>
          <h2 class="title"><a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html"><?php echo $row['judul'] ?></a></h2>
            <img src="images/news/<?php echo $row['img'] ?>" alt="" width="640px"  height="281px"/>
              <div class="post_info">
                  <div class="fleft">On <span><?php echo tgl_indo($row['tgl']) ?></span> / By <a href="#"><?php echo ucwords($row['nama']) ?></a></div>
                     <div class="fright"><a href="#"><?php echo mysql_num_rows($qcom); ?></a> Comments</div>                                    
                        <div class="clear"></div>
              </div>
               <p><?php echo substr($row['desk'],0,250) ?></p>
               <a href="news-<?php echo $row['no'] ?>-<?php echo $row['judul_seo'] ?>.html" class="btn btn-warning">Read more</a>
          </p>
          <?php } ?>
      </div>


                      

  <?php
    $jumData = $data['jumData'];

      // menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
    $jumhalaman = ceil($jumData/$dataPerhalaman);
  ?>
  
<div class="pagination">
  <ul>
  <?php
    
      // menampilkan link previous
    if ($nohalaman > 1){
      
      echo  "<li><a href='news-halaman-".($nohalaman-1).".html'>&lt;&lt; Prev</a></li>";
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
          }else{ 
            echo " <li><a href='news-halaman-".$halaman.".html'>".$halaman."</a></li> ";
          }
          $showhalaman = $halaman;          
         }
    }

          // menampilkan link next
    if ($nohalaman < $jumhalaman){ 
      echo "<li><a href='news-halaman-".($nohalaman+1).".html'>Next &gt;&gt;</a></li>";
    }
    else
    {
      echo "<li class='disabled'><a href='#'>Next &gt;&gt;</a></li>";
    }
  ?>

    </ul>
  </div>
  </div>

