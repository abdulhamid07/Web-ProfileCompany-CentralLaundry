<?php
	include "config/koneksi.php";
	$main=$_GET['id'];
	$angka=substr($main,0,1);
	
	if($angka==7){
		include "services/value_added.php";
	}else{
	$qdesc=mysql_query("select * from desc_serve where kd_main_serve='$main' LIMIT 0,1");
	$rdesc=mysql_fetch_assoc($qdesc);
	$qserve=mysql_query("select * from services where kd_main_serve='$main'");
	$qgallery=mysql_query("select * from gallery where kd_main_serve='$main' order by rand(no)");
	$pos=substr($main,2);
?>                 
                  <div class="row">
				  <div class="span12">
                    <h2 class="title">.:<?php echo str_replace('-', ' ', $pos) ?>:.</h2>
                    <div class="span7">
            <div class="alert alert-warning alert-dismissable">
			<ul class="portfolio-filter text-center">
			<?php
				while($rserve=mysql_fetch_assoc($qserve)){
			?>
                <li><a class="btn btn-default" href="#" data-filter=".<?php echo $rserve['kd_serve'] ?>"><?php echo strtoupper($rserve['nama']) ?></a></li>
            <?php } ?>
            </ul><!--/#portfolio-filter-->
            </div>

            <div class="row">
                <div class="portfolio-items">
                <?php while($rgal=mysql_fetch_assoc($qgallery)){ ?>
                    <div class="portfolio-item <?php echo $rgal['kd_serve'] ?> col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/portfolio/full/<?php echo $rgal['gambar'] ?>" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php echo ucfirst($rgal['ket']) ?></a></h3>
                                    <a class="preview" href="images/portfolio/full/<?php echo $rgal['gambar'] ?>" rel="prettyPhoto"><i class="icon icon-white icon-eye-open"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->
                <?php } ?>
                    </div>
                   </div>
					</div>


					<div class="span4services">
					<div class="alert alert-info alert-dismissable">
					<i class="icon icon-info-sign"></i>
					<h2 class="titleblue">APA ITU <?php echo str_replace('-', ' ', $pos) ?> ?</h2>
					<p align="justify" class="desc">
					<?php echo ucfirst($rdesc['ket']) ?>
					</p>
					</div>
                   	</div>
					</div>
					</div>
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
   <?php } ?>
