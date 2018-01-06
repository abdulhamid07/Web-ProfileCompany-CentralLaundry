<?php include "config/koneksi.php";
		$q=mysql_query("select * from slider where aktif='y' limit 0,3");
 ?>
<div id="main_slider">
					<div class="camera_wrap" id="camera_wrap_1">
					<?php while($row=mysql_fetch_assoc($q)){ ?>
						<div data-src="images/slider/<?php echo $row['img']?>">
							<div class="camera_caption fadeIn">
								<div class="slide_descr"><?php echo strtoupper($row['cap']) ?></div>
							</div>
						</div>
					<?php } ?>
					</div><!-- #camera_wrap_1 -->
					
				</div>