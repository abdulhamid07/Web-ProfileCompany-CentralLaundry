<li class="active">
                            <a href="media.php?fModule=index">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Master Web</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <?php if($_SESSION['level']=='a'){  ?>
                                <li><a href="media.php?fModule=menu"><i class="fa fa-angle-double-right"></i>Menu</a></li>
                            <?php } ?>
                                <li><a href="media.php?fModule=comment"><i class="fa fa-angle-double-right"></i>Comment & Slider</a></li>
                                <li><a href="media.php?fModule=pesan"><i class="fa fa-angle-double-right"></i>Pesan & Testimoni</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gears"></i>
                                <span>Master Company</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="media.php?fModule=news"><i class="fa fa-angle-double-right"></i>News & Blog</a></li>
                                <li><a href="media.php?fModule=layanan"><i class="fa fa-angle-double-right"></i>Layanan Total</a></li>
                                <li><a href="media.php?fModule=pelayanan"><i class="fa fa-angle-double-right"></i>Pelayanan</a></li>
                                <li><a href="media.php?fModule=cabang"><i class="fa fa-angle-double-right"></i>Cabang & Socmed</a></li>
                                <li><a href="media.php?fModule=about"><i class="fa fa-angle-double-right"></i>About</a></li>
                            </ul>
                        </li>