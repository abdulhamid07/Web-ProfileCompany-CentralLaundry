
<?php 
    $md=$_GET['fModule'];

    if($md=='edittestimoni'){
        $id=$_GET['id'];
        $q=mysql_query("select * from testimoni where no='$id'");
        $dt=mysql_fetch_assoc($q);
    }
?>
 <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Master Web</a></li>
                        <li class="active">Testimoni & Pesan</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-warning">
                            <div class="box-header">
                                <h3 class="box-title"><?php if($md=='edittestimoni'){ ?>Edit<?php }else{ ?>Tambah<?php } ?>  Testimoni</h3>
                            </div>
                                <div class="box-body">
                                <form name="test" method="post" action="pages/master_web/testimoni/aksitestimoni.php?aksi=<?php if($md=='edittestimoni'){ ?>edittest<?php }else{ ?>tambahtest<?php } ?>" onsubmit="return ValTest()" enctype="multipart/form-data">
	                                <?php if($md=='edittestimoni'){ ?>
                                    <input type="hidden" name="no" value="<?php echo $id ?>">
                                    <?php } ?>
                                    <label>Gambar : </label>
                                    <?php
                                        if($md=='edittestimoni'){
                                    ?>
                                    <img src="../images/testimoni/<?php echo $dt['img'] ?>" alt="Gambar Testimoni" <?php if($md=='addtestimoni'){?>required<?php }else{} ?> width="100" height="100">
                                    <?php
                                        }
                                    ?>
	                                <input type="file" name="image2">
                                    <?php if($md=='edittestimoni'){ ?>
                                    <span><sub><font color="red">*Kosongkan gambar jika tidak ada perubahan</font></sub></span>
                                    <?php } ?>
	                                <hr>
	                                <label>Nama : </label>
	                                <input type="text" name="nama" class="form-control input-sm"required placeholder="Nama Anda" <?php if($md=='edittestimoni'){ echo "value='".$dt['nama']."'"; } ?>>
	                                <hr>
                                    <label>Jabatan/ kalangan : </label>
                                    <input type="text" name="jabatan" class="form-control input-sm"required placeholder="Jabatan atau kalangan" <?php if($md=='edittestimoni'){ echo "value='".$dt['jabatan']."'"; } ?>>
                                    <hr>
					                <label>Testimoni : </label>
					                <textarea id="editor1" class="form-control input-sm"required name="pesan" rows="10"><?php if($md=='edittestimoni'){ echo $dt['pesan']; }?></textarea>
						        <div class="box-footer">
						            <button type="reset" class="btn btn-default">Reset</button>
						            <button type="button" class="btn btn-warning" onclick="window.history.back()">Batal</button>
	            					<button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Simpan</button>
						            </form>
						        </div>
	                            </div>
	                        </div>
                    	</div><!-- /.row (main row) -->
                    </div>
                </section><!-- /.content -->