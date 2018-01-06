<?php
	$q=mysql_query("select * from owner");
	$qo=mysql_fetch_assoc($q);
	$qh=mysql_query("select * from about where tipe='H'");
	$qh1=mysql_query("select * from about where tipe='S'");
	$qsc=mysql_query("select * from cs_profile");

?>
                    <div class="row">
					<div class="span4color">
                            <h2 class="titleputih">SELAYANG PANDANG</h2>
                        	<p align="center"><img src="images/<?php echo $qo['img'] ?>"></p>
							<h5 class="titleputih"><?php echo strtoupper($qo['nama']) ?></h5>
							<p>Pendiri & Direktur Utama</p>
							<p><?php echo $qo['ket'] ?></p>
							
							
                        </div> 
                    <?php
                    	while($dh=mysql_fetch_assoc($qh)){
                    ?>
                        <div class="span4">
                            <h2 class="title"><?php echo strtoupper($dh['judul']) ?></h2>
						
                            <p><?php echo $dh['ket'] ?></p>

                        </div> 
                    <?php } ?>       
                    </div>
                    <?php while($dh1=mysql_fetch_assoc($qh1)){ ?>

                	<h2 class="title"><?php echo strtoupper($dh1['judul']) ?></h2>
                    <div class="alert alert-success alert-dismissable">						
                        <p align="justify"><?php echo $dh1['ket'] ?></p>
                    </div>
					<?php } ?>
                	<div class="row">
					<?php while($dsc=mysql_fetch_assoc($qsc)){ ?>
                        <div class="span3">                            
                            <div class="profile">
                            	<h6><?php echo strtoupper($dsc['judul_atas']) ?></h6>
								<img src="images/cs_profile/<?php echo $dsc['img'] ?>" alt="Gambar Central Sevice" width="589px" height="545px">
                                <div class="profile_title"><?php echo strtoupper($dsc['judul_bawah']) ?></div>                               
                            </div>
                        </div>
                    <?php } ?>
                 
						
						
