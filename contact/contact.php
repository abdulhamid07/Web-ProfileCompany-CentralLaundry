                	<div class="row">
                    	
                    	<div class="span6">
                        	<h2 class="title">FORM PESAN ANDA</h2>
                            <div class="contact_form">  
                            	<div id="note">
                                   
                                </div>
                                <div id="fields">
                                <?php  if($_GET['module']=='contact-hasil'){ ?>
                                <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Terima kasih atas pesan Anda.</div>
                                <?php } ?>
                                    <form name="test" id="ajax-contact-form" method="post" action="contact/aksicontact.php" onsubmit="return CekTes()">
                                    <?php  //$kode=$_SESSION['captcha_session']; ?>
                                    <input type="hidden" name="code" value="<?php echo $kode ?>">
                                        <label>Nama<sup><font color="red">*</font></sup></label>
                                        <input class="span6"required type="text" name="nama" id="nama" value="" placeholder="Nama (Wajib di Isi)" />
                                        <label>Email<sup><font color="red">*</font></sup></label>
                                        <input class="span6"required type="text" name="email" value="" placeholder="Email (Wajib di isi)" /><span id="valemail"></span>
                                        <label>Subjek<sup><font color="red">*</font></sup></label>
                                        <input class="span6"required type="text" name="subjek" value="" placeholder="Subject" />
                                        <label>Pesan<sup><font color="red">*</font></sup></label>
                                        <textarea name="message"required id="message" class="span6" rows="8" placeholder="Pesan"></textarea>
                                        <label>Kode<sup><font color="red">*</font></sup></label>
                                        <img src="config/captcha3.php">
                                        <!--<span id="cekcaptcha" style="color:red;"></span>-->
                                        <input  type="text" class="span6"required name="kode" id="captcha" maxlength="6" placeholder="Masukkan Kode diatas">
                                        <div class="clear"></div>
                                        <input type="reset" class="btn btn-warning" value="Hapus" />
                                        <input type="submit" class="btn btn-warning" value="Kirim" />
                                        <div class="clear"></div>
                                    </form>
                                </div>
                            </div>
                        </div> 
						<div class="span6">
                        	<h2 class="title">HEAD OFFICE YOGYAKARTA</h2>
                            <div id="map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31625.41879159286!2d110.3715882732192!3d-7.771010339794935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59dc46266933%3A0x38f01a65ad323c6!2sCentral+Laundry+%26+Dry+Cleaning!5e0!3m2!1sid!2sid!4v1470283329114" 
							width="450" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
                        </div>						
                	</div>
                    <h2 class="title">KONTAK & SOSIAL MEDIA</h2>
                            
                        <div class="row">
                    <?php
                        $q=mysql_query("select * from cabang order by no");
                        while($dc=mysql_fetch_assoc($q)){
                    ?>
                        <div class="span3">
                        <h5 class="title"><?php echo strtoupper($dc['kota']) ?></h5>
                            <table>
                            <tr valign="top">
                            <td><?php echo ucwords($dc['alamat']) ?></td>
                            </tr>
                            <td><?php echo $dc['telp'] ?></td>
                            </tr>
                            </table>
                        </div>
                    <?php } ?>     
                    </div>
                    <hr>
                    <?php
                        $q=mysql_query("select * from socmed order by no");
                        while($ds=mysql_fetch_assoc($q)){
                    ?>
                        <div class="span4">
                            <table border="0" width="100%" align="center">
                            <tr>
                            <td width="10%"><img src="images/socmed/<?php echo $ds['img'] ?>" width="50px" height="50px"></td>
                            <td width="80%"><a href="<?php if(empty($ds['link'])){ echo '#'; }else{ echo 'https://www.'.$ds['link']; } ?>" class="title">
                            <h4><?php echo ucwords($ds['n_socmed']) ?></h4>
                            </a>
                            </td>
                            </tr>
                            </table>
                        </div>
                    <?php  } ?>
