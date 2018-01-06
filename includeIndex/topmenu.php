<?php
    $query=mysql_query("select * from main_menu where aktif='y'");
    $qs=mysql_query("select * from socmed where no in(1,2)"); ("".mysql_error());


?> 
<div class="span2 fright">Follow us : 
	<div class="fright follow_us">
							<ul>
							<?php $no=1;
							while($ds=mysql_fetch_assoc($qs)){ ?>
								<li><a href="<?php if(empty($ds['link'])){ echo '#'; }else{ echo 'https://www.'.$ds['link']; }?>" class="<?php if($no==1){ ?>soc2<?php }else{ ?>soc1<?php } ?>"></a></li>
							<?php $no++; } ?>					
								<li><a href="#" class="soc4"></a></li>
								<div class="clear"></div>
							</ul>
	</div>
</div>  
<div class="navbar fright">
					<nav id="main_menu">
							<div class="menu_wrap">
								<ul class="nav sf-menu">
								 <?php while ($row=mysql_fetch_array($query)) {
								 	    	  $qserv=mysql_query("select * from sub_services where kd_main='$row[no]'");

                   				?>
									<li class="sub-menu first"><a href="<?php if(empty($row['link'])) { ?>javascript:{}<?php }else{ echo $row['link']; } ?>"><?php echo strtoupper($row['menu']) ?></a>
									<?php if(!empty($row['link'])) { ?>
									</li>
									<?php } ?>	
										<ul>
										<?php
											while($sub=mysql_fetch_assoc($qserv)){
											if($row['no']==$sub['kd_main']) {
										?>
											<li><a href="serve-<?php echo $sub['no'] ?>-<?php echo $sub['link'] ?>"><span>-</span><?php echo ucwords($sub['m_kategori']) ?></a></li>
										<?php }} ?>
										</ul>
									<?php if(!empty($row['link'])) { ?>
									</li>
									<?php } ?>
								<?php } ?>
								</ul>
								<button type="button" class="btn navbar-btn btn-success" data-toggle="collapse" data-target="#search">
                        			<i class="icon icon-white icon-search"></i>
                    			</button>
							</div>
						</nav>
				</div>