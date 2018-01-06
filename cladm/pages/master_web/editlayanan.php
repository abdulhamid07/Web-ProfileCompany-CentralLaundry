<?php
	include "../config/koneksi.php";
	$id=$_GET['id'];
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Layanan Total</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <?php
                                $q=mysql_query("select * from layanan_total where no='$id'");
                                $dl=mysql_fetch_assoc($q);
                            ?>
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Layanan</h3>                                
                                </div>
                                    <div class="box-body table-responsive">
                                        <form name="addlayanan" method="post" action="pages/master_web/aksilayanan.php?aksi=edit" enctype="multipart/form-data">
					                       <input type="hidden" name="id" value="<?php echo $id ?>">
					                           <label>Gambar :</label>
					                           <img src="../images/layanan/<?php echo $dl['img'] ?>" alt="Gambar pelayanan" width="119px" height="88px">
					                       <input type="file" name="image1" >
					                           <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
					                       <hr>
					                           <label>Deskripsi : </label>
					                       <textarea id="editor1" class="form-control" required name="desc" rows="10" cols="80" ><?php echo $dl['ket'] ?></textarea>
					                       <hr>
					                           <label>Warna : </label>
					                       <select name="warna" class="form-control input-sm" required>
					                          <option value="">-- Pilih Warna --</option>
        					                  <option value="color1"<?php if($dl['color']=='color1'){ ?>selected="selected"<?php } ?>>Biru</option>
        					                  <option value="color2"<?php if($dl['color']=='color2'){ ?>selected="selected"<?php } ?>>Merah</option>
        					                  <option value="color3"<?php if($dl['color']=='color3'){ ?>selected="selected"<?php } ?>>Hijau</option>
        					                  <option value="color4"<?php if($dl['color']=='color4'){ ?>selected="selected"<?php } ?>>Ungu</option>
					                       </select>
        					                <div class="box-footer">
        					                   <button type="reset" class="btn btn-default">Reset</button>
        					                   <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
                    					       <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Edit</button>
                                            </div>
					                   </form>
					               </div>
	                        </div>
	                    </div>
                    </div><!-- /.row (main row) -->
                </section><!-- /.content -->