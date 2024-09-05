
        <!--Main Content-->

        <div class="row main-content h-screen" style="color: #FFCB0F;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center" style="background:white; ">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" style="margin-bottom:25px; border: 1px solid #000; border-radius: 50%; display: inline-block; overflow: hidden; "/>
                       <br>
                    </span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                        <style>
                        /* Default link style */
                        .sbar {
                        color: navy; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to right, green, white); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        a {
                        /* font-size: 12px; */
                        color: navy; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to bottom, green, black); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        /* Hover effect */
                        a:hover {
                            background: linear-gradient(to right, silver, black); /* gradasi dari kuning ke hitam */
                            background-size: 100% 200%; /* ukuran gradient vertikal */
                            background-position: 0 100%; /* posisi gradient dari bawah */
                            transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                            padding: 5px 10px; /
                         } 
                         
                        span {
                            font-size: 12px;
                         } 
                         
                         
                         </style>
                         
                         
                            <li class="parent">
                                <a href="/" class="sbar"><i class="fas fa-cogs mr-2"> </i>
                                    <span class="none">DASHBOARD SIHADE</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="/dashboard" class="sbar"><i class="fas fa-cogs mr-2"> </i>
                                    <span class="none">DASHBOARD ADMIN</span>
                                </a>
                            </li>
                            <hr>
     
                            <li class="parent">
                                <a href="/beranda" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">BERANDA</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="/tentangkami" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">TENTANG KAMI</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="/produk" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">PRODUK</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="/produk" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">LAYANAN</span>
                                </a>
                            </li>
                            
                            <p style="margin-bottom: 10px;"></p>
                              
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('kostumer'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>KOSTUMER<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="kostumer">
                                    <li class="child">                                         
                                        <a href="/semuapelanggan" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>SEMUA PELANGGAN
                                        </a>
                                    </li> 


                                </ul>
                            </li>
                         
                          
                              
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('produk'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>PRODUK<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="produk">
                                    <li class="child">
                                                                             
                                        <a href="/semuapelanggan" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>SEMUA PELANGGAN
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                         
                          

                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">ADMINISTRATOR</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
