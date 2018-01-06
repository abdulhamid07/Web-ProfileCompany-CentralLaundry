<?php
    $id=$_GET['id'];
    //$update = mysql_query("update produk set review=review+1 where no='$id'");
    $query = mysql_query("select *,u.nama from news n
                                left join user u on u.kd_user=n.penulis where no='$id' limit 0,1");
    $qcom = mysql_query("select * from comment where id_news='$id'");
    $row = mysql_fetch_array($query);

?>   	
<div class="row">

                        <div class="span8">
                            <div class="post">
                                <h2 class="title"><?php echo $row['judul'] ?></h2>
                                
                            	<img class="detail" src="images/news/<?php echo $row['img'] ?>" alt=""/>
                                <div class="post_info">
                                	<div class="fleft">On <span><?php echo tgl_indo($row['tgl']) ?></span> / By <a href="#"><?php echo ucwords($row['nama']) ?></a></div>
                                    <div class="fright"><a href="#"><?php echo mysql_num_rows($qcom)?></a> Comments</div>                                    
                                	<div class="clear"></div>
                                </div>
                               <p>
                                   <?php echo $row['desk'] ?>
                               </p>
                            </div>

                                                        <h4><?php echo mysql_num_rows($qcom)?> comments</h4>
                            <div id="comments">
                                <ol>
                                <?php while($rowc=mysql_fetch_assoc($qcom)){ 
                                 ?>
                                   <li>
                                        <div class="avatar"><a href="#"><img src="images/avatar3.png" width="40px" height="40px" alt="" /></a></div>
                                        <div class="comment_right">
                                            <div class="comment_info">
                                                Posted by <a href="#"><?php echo ucwords($rowc['nama']) ?></a> <span>|</span><?php echo tgl_indo($rowc['tgl']) ?>
                                            </div>
                                                 <?php echo $rowc['pesan'] ?>                                        
                                            </div>
                                        <div class="clear"></div> 
                                <?php $qbc=mysql_query("select *,u.nama from bls_comment bc
                                left join user u on u.kd_user=bc.id_penulis where bc.id_comment='$rowc[no]'");

                                if(mysql_num_rows($qbc)>0){
                                        while($dbc=mysql_fetch_assoc($qbc)){ ?>
                                        <ul>
                                            <li>
                                                <div class="avatar"><a href="#"><img src="images/avatar2.png" width="40px" height="40px" alt="" /></a></div>
                                                <div class="comment_right">
                                                    <div class="comment_right">
                                                        <div class="comment_info">
                                                            Admin by <a href="#"><?php echo ucwords($dbc['nama']) ?></a> <span>|</span> <?php echo tgl_indo($dbc['tgl']) ?> <span>
                                                        </div>
                                                        <p><?php echo $dbc['pesan'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </li>
                                        </ul>
                                <?php } ?>                                      
                                   </li>

                                <?php }} ?>                              
                                                               
                                </ol>
                            </div>      
                                              
                            <!-- //Comments -->
                            <h2 class="title"></h2>
                            <!-- Leave a Comment -->
                            <h4>Leave a comment</h4>
                            <form name="test" class="comment_form" action="news/SaveComm.php?id=<?php echo $row['no'] ?>" method="post" onsubmit="return CekTes()">
                                <input class="span5"required type="text" name="nama" placeholder="Masukkan Nama"/>
                                <input class="span5"required type="text" name="email" placeholder="Masukkan Email"/>
                                <textarea name="pesan" class="span7"required onFocus="if (this.value == 'Message...') this.value = '';" onBlur="if (this.value == '') this.value = 'Message...';" >Message...</textarea>
                                <div class="clear"></div>
                                <input type="reset" class="contact_btn" value="Clear form" />
                                <input type="submit" class="contact_btn" value="Post Comment" />
                                <div class="clear"></div>
                            </form>
                            <!-- //Leave a Comment -->
                </div>

