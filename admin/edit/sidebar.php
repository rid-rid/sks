            <aside> 
                <div id="sidebar" class="nav-collapse "> 
                    <!-- sidebar menu start-->                     
                    <ul class="sidebar-menu" id="nav-accordion"> 
                        <p class="centered"><a href="#">
                                <img src="../img/admin.png" class="img-circle" width="80">
                            </a></p> 
                        <h5 class="centered">Administrator Desa</h5> 
                        <li class="mt"> 
                            <a <?php if($page == "index") echo "class='active'";?> href="../index.php">  <i class="fa fa-desktop"></i>  <span>DASHBOARD</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a <?php if($page == "user") echo "class='active'";?> href="../user.php">  <i class="fa fa-user"></i>  <span>USER</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a <?php if($page == "penduduk") echo "class='active'";?> href="../penduduk.php">  <i class="fa fa-users"></i>  <span>PENDUDUK</span>  </a> 
                        </li>
						<li class="mt"> 
                            <a <?php if($page == "dana_desa") echo "class='active'";?> href="../dana_desa.php">  <i class="fa fa-money"></i>  <span>DANA DESA</span>  </a> 
                        </li>
                        <li class="sub-menu"> 
                            <a <?php if($sub == "data_surat") echo "class='active'";?> href="javascript:;">  <i class="fa fa-inbox"></i>  <span>DATA SURAT</span>  </a> 
                            <ul class="sub"> 
                                <li>
                                    <a <?php if($page == "usaha") echo "class='active'";?> href="../usaha.php">Surat Keterangan Usaha</a>
                                </li>                                 
                                <li>
                                    <a <?php if($page == "skck") echo "class='active'";?> href="../skck.php">Surat Pengantar SKCK</a>
                                </li>                                 
                                <li>
                                    <a <?php if($page == "ktps") echo "class='active'";?> href="../ktps.php">Surat Ket KTP Sementara</a>
                                </li>                                 
                                <li>
                                    <a <?php if($page == "penghasilan") echo "class='active'";?> href="../penghasilan.php">Surat Ket Penghasilan</a>
                                </li>
								<li>
                                    <a <?php if($page == "imunisasi") echo "class='active'";?> href="../imunisasi.php">Surat Imunisasi</a>
                                </li>
                            </ul>                             
                        </li>
						<li class="mt"> 
                            <a <?php if($page == "kelola_dana") echo "class='active'";?> href="../kelola_dana.php">  <i class="fa fa-archive"></i>  <span>KELOLA DANA DESA</span>  </a> 
                        </li>                       
                    </ul>                     
                    <!-- sidebar menu end-->                     
                </div>                 
            </aside>  