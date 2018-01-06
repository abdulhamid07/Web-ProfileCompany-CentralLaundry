<?php
	$q=mysql_query("select * from clients where tipe='HL'");
	$qgl=mysql_query("select * from clients where tipe='GL'");
	$qt=mysql_query("select * from testimoni")

?>
                    <div class="row">
					<div class="span5">
                          
                        	<p><img src="images/client.png"></p>
							 <h2 class="title">HOUSE LINEN/ LAUNDRY</h2>
					<?php while($qhl=mysql_fetch_assoc($q)){ ?>
							<div class="span2">
							<?php echo ucwords($qhl['desk']) ?>
							</div>
					<?php } ?>
													<div class="span5">
							 <h2 class="title">GUEST LAUNDRY</h2>
					<?php while($dgl=mysql_fetch_assoc($qgl)){ ?>
							<div class="span2">
							<?php echo ucwords($dgl['desk']) ?>
							</div>
					<?php } ?>
								
                        </div> 
                    </div>
								
						
						
						
                        <div class="span6color">
                            <h2 class="titleputih">::TESTIMONIAL::</h2>
                        <div class="listticker">    
                            <ul>
                        <?php while($dt=mysql_fetch_assoc($qt)){ ?>
                        	<li>
								<div class="span4">
								<b><?php echo strtoupper($dt['nama']) ?></b>
								<p><?php echo strtoupper($dt['jabatan']) ?></p>
								<p><i><?php echo $dt['pesan'] ?></i>
								</p>
								<hr>
								</div>	
								<div class="span2">
								<img src="images/testimoni/<?php echo $dt['img'] ?>">
								</div>
							</li>	
						<?php } ?>
						</ul>	
						</div>
                        </div>
                        
                        