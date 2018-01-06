                <!-- Content Header (Page header) -->
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
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Layanan Total</h3>
                                </div>
                                <div class="box-body table-responsive">
                                    <?php
                                        $q=mysql_query("select * from layanan_total");
                                        $offset=0;
                                    ?>
                                 <?php echo getMessage(); ?>
                                    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModalLayanan">Tambah</button>
                                    <p>
                                    <table id="example2" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th><center>No</center></th>
                                                <th><center>Gambar</center></th>
                                                <th><center>Deskripsi</center></th>
                                                <th><center>Aktif</center></th>
                                                <th colspan="2"><center>Aksi</center></th>
                                            </tr>
                                        </thead>    
                                        <tbody> 
                                            <?php while($result = mysql_fetch_assoc($q)){ ?>
                                            <tr>
                                                <td><?php echo $offset = $offset+1; ?></td>
                                                <td><img src="../images/layanan/<?php echo $result['img'] ?>" alt="Gambar pelayanan" width="119px" height="88px"></td>
                                                <td><?php echo $result['ket']; ?></td>
                                                <td><center><a href="pages/master_web/aksilayanan.php?aksi=aktif&id=<?php echo $result['no'] ?>&st=<?php echo $result['aktif'] ?>" class="btn btn-xs btn-<?php if ($result['aktif']=='y'){ ?>success <?php }else{ ?>default<?php } ?>"> <?php echo ucwords($result['aktif']); ?></a></center></td>
                                                <td><center><a href="media.php?fModule=editlayanan&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                                <td><center><a href="pages/master_web/aksilayanan.php?aksi=hapus&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <?php include "pages/master_web/modal_layanan.php"; ?>