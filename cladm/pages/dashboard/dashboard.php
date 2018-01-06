<!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                    <?php getMessage() ?>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                        <?php $qc=mysql_query("select * from comment where status='D'"); 

                        ?>
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php echo mysql_num_rows($qc) ?>
                                    </h3>
                                    <p>
                                        Komentar News Belum Dibaca
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comments-o"></i>
                                </div>
                                <a href="media.php?fModule=viewallcomment" class="small-box-footer">
                                    View All Comments <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                             <?php $qp=mysql_query("select * from pesan where status='D'"); 

                            ?>
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                       <?php echo mysql_num_rows($qp) ?>
                                    </h3>
                                    <p>
                                        Pesan Pelanggan Belum Dibaca
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <a href="media.php?fModule=viewallmessage" class="small-box-footer">
                                    View All Messages <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                        <?php $qn=mysql_query("select * from news"); ?>
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                       <?php echo mysql_num_rows($qn) ?>
                                    </h3>
                                    <p>
                                        News & Blog
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-folder-open-o"></i>
                                </div>
                                <a href="media.php?fModule=news" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                             <?php
                                $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
                                $pengunjung = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
                             ?>
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php echo $pengunjung ?>
                                    </h3>
                                    <p>
                                        Pengunjung Hari Ini
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    &nbsp;
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <div class="col-xs-12">
                        <?php if($_SESSION['level']=='a'){ ?>
                            <div class="box box-primary">
                            
                            <?php
                            error_reporting();
                                $q=mysql_query("select * from user");
                                 $offset=0;
                            ?>
                            <div class="box-body table-responsive">
                            <a href="#" data-toggle="modal" data-target="#AddUser" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <i class="fa fa-user"></i></a>
                            <p>    
                                <table id="example2" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th><center>No</center></th>
                                <th><center>Username</center></th>
                                <th><center>Login</center></th>
                                <th><center>Logout</center></th>
                                <th><center>Browser</center></th>
                                <th><center>Ip</center></th>
                                <th><center>Status</center></th>
                                <th colspan="2"><center>Aksi</center></th>
                            </tr>
                        </thead>    
                        <tbody> 
                            <?php
                            while($result = mysql_fetch_array($q)){
                            $tanggal = tgl_indo($result['lastlogin']);
                           
                            ?>
                            
                            <tr>
                            <td><?php echo $offset = $offset+1; ?></td>
                            <td><?php echo $result['username']; ?></td>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo tgl_indo($result['logout']); ?></td>
                            <td><?php echo ucwords($result['browser']); ?></td>
                            <td><?php echo $result['ip']; ?></td>
                            <?php
                            if ($result['status']== 'on')
                            { 
                            echo
                            "<td><center><button class='btn btn-default btn-flat btn-xs disabled'><i class='fa fa-smile-o text-success'> <small>Online</small></i></td></button></center></td>";
                            }
                            else { 
                            echo
                            "<td><center><button class='btn btn-default btn-flat btn-xs disabled'><i class='fa fa-meh-o text-danger'> <small>Offline</small></i></button></center></td>";
                             } ?>
                             <td><a href="#" onclick="javascript:edituser('<?php echo $result['kd_user'] ?>','<?php echo $result['nama'] ?>','<?php echo $result['username'] ?>','<?php echo $result['password']?>','<?php echo $result['level'] ?>')"><i class="fa fa-edit"></i></a></td>
                             <td><a href="pages/dashboard/aksidashboard.php?aksi=hapus&id=<?php echo $result['kd_user'] ?>" onclick="return confirm('Yakin data akan dihapus?')"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                            </div>
                                
                            </div>
                    <?php } ?>
                    </div>
                        <div class="col-xs-4">
                            <div class="box box-warning">
                            
                                <?php
                                    $q=mysql_query("select * from mod_ym");
                                     $offset=0;
                                ?>
                                <div class="box-header">
                                    <h3 class="box-title">Yahoo Customer Hotline</h3>
                                </div>
                                <div class="box-body table-responsive">
                                 <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Id Yahoo</center></th>
                                            <th colspan="2"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><?php echo ucwords($result['nama']); ?></td>
                                        <td><?php echo $result['username']; ?></td>
                                        <td><center><a href="#" onclick="javascript:edit('<?php echo $result['no'] ?>','<?php echo $result['nama'] ?>','<?php echo $result['username'] ?>')"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/dashboard/aksidashboard.php?aksi=hapusym&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </br></br></br>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="box box-success">
                            
                                <?php
                                    $q=mysql_query("select * from owner");
                                     $offset=0;
                                ?>
                                <div class="box-header">
                                    <h3 class="box-title">Profil Pemilik</h3>
                                </div>
                                <div class="box-body table-responsive">
                                 <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><center>No</center></th>
                                            <th><center>Gambar</center></th>
                                            <th><center>Nama</center></th>
                                            <th><center>Deskripsi</center></th>
                                            <th colspan="3"><center>Aksi</center></th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <?php while($result = mysql_fetch_assoc($q)){
                                       
                                        ?>
                                        
                                        <tr>
                                        <td><?php echo $offset = $offset+1; ?></td>
                                        <td><img src="../images/<?php echo $result['img'] ?>" width="80" height="100" alt="gambar_owner"/></td>
                                        <td><?php echo strtoupper($result['nama']); ?></td>
                                        <td><?php echo $result['ket']; ?></td>
                                        <td><center><a href="media.php?fModule=editowner&id=<?php echo $result['no']; ?>"><i class="fa fa-edit"></i></a></center></td>
                                        <td><center><a href="pages/master_web/aksidashboard.php?aksi=hapusowner&id=<?php echo $result['no'] ?>" onClick="return confirm('Yakin data akan dihapus?')" ><i class="fa fa-trash-o"></i></a></center></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
    <?php include "pages/dashboard/adduser.php"; ?>
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel"> Edit Yahoo</h4>
          </div>
          <div class="modal-body">
            <form name="editmenu" method="post" action="pages/dashboard/aksidashboard.php?aksi=editym" onSubmit="return ValYm()">
                <input type="hidden" name="no" id="ymid"> 
                <label>Nama : </label>
                <input type="text" name="nama" id="ymnama" class="form-control input-sm" required placeholder="Nama" maxlength="15" value="">
                <hr>
                <label>Username Yahoo : </label>
                <input type="text" name="user" id="ymuser" class="form-control input-sm" required placeholder="Username" size="15" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-success" type="submit" name="tombolproses"><i class="glyphicon glyphicon-save"></i> Save</button>
          </div>
            </form>
        </div>
      </div>
    </div>

    <script>
        function edit(no,nama,username){
            var idym=no;
            var namaym=nama;
            var userym=username;
            document.editmenu.no.value=idym;
            document.editmenu.nama.value=namaym;
            document.editmenu.user.value=userym;
            $('#edit').modal('show');
        }
    </script>
    <script>
    function edituser(kd,nama,username,password,level){
        var userid=kd;
        var usernama=nama;
        var userpengguna=username;
        var userpsw=password;
        var userlvl=level;
       //var userpwd=psw;
        document.editusr.adminno.value=userid;
        document.editusr.adminnama.value=usernama;
        document.editusr.adminusr.value=userpengguna;
        document.editusr.level.value=userlvl;
        //document.EditU.psw1.value=userpwd;
        $('#EditUser').modal('show');
    }
    </script>