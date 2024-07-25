<div class="hide" id="searchBar">
    <input type="search" name="searchBox" id="searchBox" placeholder="Type your search here..    Press [Esc] to exist">
</div>
<div class="container">  
    <div style="display: flex; align-items: center; margin-bottom:10px">
        <!-- <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px; padding: 0;"> -->
        
        <h1 style="margin: 0;">
            <span>PERSADA</span>UMAT
            <p style="margin: 0; font-size: 16px; color: white" >Inovasi Untuk Kesejahteraan Umat Yang Berkemajuan </p>
        </h1>
    </div>

    <label for="menu"><i class="fas fa-bars"></i></label>
    <input type="checkbox" id="menu">
    <nav>
        <style>
            .dropdown {
                position: relative;
                display: inline-block;
            }
            .dropdown a {
                display: flex;
                align-items: center;
                text-decoration: none;
                color: black; /* Warna teks untuk tautan PROFIL */
            }
            .dropdown .arrow {
                margin-left: 5px;
                color: black; /* Warna teks untuk panah */
                font-size: 0.8em; /* Ukuran ikon panah */
            }
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 325px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }
            .dropdown-content a {
                color: black; /* Warna teks untuk menu dropdown */
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }
            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }
        </style>

        <a href="/">DASHBOARD</a>
        
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">TENTANG KAMI</a>
            {{-- <i class="fas fa-chevron-down arrow"></i> --}}
            <div class="dropdown-content">

                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">TENTANG PERUSAHAAN</a>
                </div>
            
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">SEJARAH PERUSAHAAN</a>
                </div>
              
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">SEJARAH PERUSAHAAN</a>
                </div>
               
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">TIM MANAJEMEN</a>
                </div>
               
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">BUDAYA PERUSAHAAN</a>
                </div>
            
                </div>
        </div>                  
        
        
        <div class="dropdown">
            <a href="#" class="dropdown-toggle">LAYANAN</a>
            {{-- <i class="fas fa-chevron-down arrow"></i> --}}
            <div class="dropdown-content">

                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">CCTV</a>
                </div>
            
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">JARINGAN LAN WAN</a>
                </div>
              
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">JASA KONSTRUKSI</a>
                </div>
               
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">REPARASI KENDARAAN</a>
                </div>
               
                <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                    <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, blue, white);" ></i>
                    <a href="/404" style="color: black; text-decoration: none; text-align:left">CLEANING SERVICE BANGUNAN GEDUNG</a>
                </div>
            
                </div>
        </div>                    {{-- <a href="#">PROFIL</a> --}}
        
        

        <a href="/tdup">TDUP</a>
        
        
        
        {{-- <i class="fa-solid fa-magnifying-glass" id="search"></i> --}}
        <i class="fa-solid fa-sign-in-alt" id="search"></i>

    </nav>
</div>