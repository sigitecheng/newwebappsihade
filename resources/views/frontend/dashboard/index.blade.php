<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Sihade</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/assets/moon/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="/assets/moon/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/assets/moon/css/responsive.css">
    <!-- fevicon -->
    {{-- <link rel="icon" href="/assets/moon/images/fevicon.png" type="image/gif" /> --}}
    <link rel="icon" href="/assets/brosur/faviconiconsihade.png" type="image/x-icon">


    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/assets/moon/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="/assets/moon/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="/assets/brosur/sihadetext.png" alt="#" style="width: 15vw; height: 10vh;">
                                        {{-- <img src="/assets/brosur/neworganik.png" alt="#" style="width: 11vw; height: 10vh;"> --}}
                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li style="color: white;"><i class="fas fa-map-marker-alt me-2"></i> Jl.	Pelesiran	No.	20E, Kec.	Coblong,
                                    Kota	Bandung </li>
                                    <li>
                                        <a href="https://wa.me/62811237916" target="_blank" rel="noopener noreferrer" style="color: white;">
                                          <i class="fas fa-phone-alt"></i> (+62) 811-237-916
                                        </a>
                                      </li>
                                      
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-12 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index.html">Beranda</a> </li>
                                                <li> <a href="#about">Tentang Kami</a> </li>
                                                <li><a href="#product">Produk</a></li>
                                                <li><a href="#testimonial">Layanan</a></li>
                                                <li><a href="#contact">Kontak Kami</a></li>
                                                <li><a href="#contact"><i class="fas fa-sign-in-alt"></i></a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="/assets/moon/images/search_icon.png"></button>
                                </form>
                            </div> --}}
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="/assets/moon/images/newpembaruan.jpg" alt="First slide" style="width: 100vw; height: 100vh; object-fit: cover;">

                    <div class="container">
                        <div class="carousel-caption relative">
                            {{-- <h1 style="font-size:60px; color:black;">Sihade</h1> --}}
                            <span>Industri Pupuk Alam Hara Makro</span>
                            
                            <p style="color: black;">Industri pupuk memainkan peran krusial dalam pertanian modern dengan menyediakan hara makro yang diperlukan tanaman untuk tumbuh optimal. Pupuk alam, sebagai alternatif non-sintetis, menawarkan solusi berkelanjutan yang memanfaatkan sumber daya alami untuk meningkatkan kualitas tanah dan hasil panen. Penggunaan pupuk makro ini memastikan bahwa tanaman mendapatkan nutrisi esensial secara seimbang, mendukung produktivitas pertanian dengan cara yang ramah lingkungan.</p>

                            @foreach ($data as $item)
                            <a class="buynow" href="{{ $item->brosur_sihade }}" download="{{ basename($item->brosur_sihade) }}" onclick="downloadFile('{{ $item->brosur_sihade }}'); return false;">Brosur</a>
                            <a class="buynow ggg" href="https://wa.me/62811237916" target="_blank">Kontak Kami</a>

                        @endforeach
                        
                        <script>
                        function downloadFile(url) {
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = url.substring(url.lastIndexOf('/') + 1);
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        }
                        </script>
                        
                                
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="/assets/moon/images/slide2.jpg" alt="Second slide" style="width: 100vw; height: 100vh; object-fit: cover;">
                    <div class="container">
                        <div class="carousel-caption relative">
                            {{-- <h1 style="font-size: 60px; color:black;">Sihade</h1> --}}
                            <span>Industri Pupuk Berkelanjutan Hara Makro</span>
                            <p style="color: black;">Dalam industri pupuk, penggunaan hara makro dari sumber alam menjadi semakin penting untuk mendukung pertanian yang berkelanjutan. Pupuk yang berbasis alam, berbeda dari pupuk sintetis, memanfaatkan bahan-bahan alami untuk memperbaiki kesuburan tanah dan meningkatkan hasil panen. Dengan pendekatan ini, tanaman mendapatkan nutrisi penting yang dibutuhkan secara seimbang, menjaga produktivitas pertanian sambil mengurangi dampak lingkungan.</p>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p> --}}
                          
                            @foreach ($data as $item)
                            <a class="buynow" href="{{ $item->brosur_sihade }}" download="{{ basename($item->brosur_sihade) }}" onclick="downloadFile('{{ $item->brosur_sihade }}'); return false;">Brosur</a>
                            <a class="buynow ggg" href="https://wa.me/62811237916" target="_blank">Kontak Kami</a>

                        @endforeach
                        
                        <script>
                        function downloadFile(url) {
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = url.substring(url.lastIndexOf('/') + 1);
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        }
                        </script>
                        
                                
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="/assets/moon/images/slide3.jpg" alt="Third slide" style="width: 100vw; height: 100vh; object-fit: cover;">
                    <div class="container">
                        <div class="carousel-caption relative">
                            {{-- <h1 style="font-size: 60px; ">Sihade</h1> --}}
                            <span>Industri Pupuk Berbasis Alam Nutrisi</span>
                            <p>Industri pupuk berfokus pada penyediaan hara makro yang vital untuk pertumbuhan tanaman, dengan pupuk alam menawarkan alternatif yang lebih ramah lingkungan dibandingkan dengan pupuk sintetis. Pupuk berbasis alam memanfaatkan bahan alami untuk meningkatkan kualitas tanah dan mendukung kesehatan tanaman. Dengan menggunakan pupuk ini, petani dapat mencapai hasil panen yang optimal sambil menjaga keseimbangan ekosistem dan mengurangi dampak negatif terhadap lingkungan.</p>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p> --}}
                          
                            @foreach ($data as $item)
                            <a class="buynow" href="{{ $item->brosur_sihade }}" download="{{ basename($item->brosur_sihade) }}" onclick="downloadFile('{{ $item->brosur_sihade }}'); return false;">Brosur</a>
                            <a class="buynow ggg" href="https://wa.me/62811237916" target="_blank">Kontak Kami</a>

                        @endforeach
                        
                        <script>
                        function downloadFile(url) {
                            var link = document.createElement('a');
                            link.href = url;
                            link.download = url.substring(url.lastIndexOf('/') + 1);
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                        }
                        </script>
                        
                                
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>Tentang Sihade<br><strong class="black">Organic Fertilizer</strong></h2>
                        {{-- <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p> --}}
                      <p style="text-align: justify;">                        
                        Pupuk organik adalah bahan alami seperti kompos atau pupuk kandang yang digunakan untuk memperbaiki kualitas tanah dan memberi nutrisi pada tanaman. Berbeda dari pupuk kimia, pupuk organik memperbaiki struktur tanah, meningkatkan kapasitas penahanan air, dan mendukung mikroorganisme tanah, sehingga tanah menjadi lebih subur, ramah lingkungan, dan mendukung pertumbuhan tanaman secara berkelanjutan. Penggunaannya juga mengurangi dampak negatif terhadap ekosistem dan mengurangi pencemaran.
                      </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="/assets/moon/images/about.png" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/moon/images/1.png" alt="#"/></i>
                        <span>0</span>
                        <h3>Pupuk Organik Hayati</h3>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/moon/images/3.png" alt="#"/></i>
                        <span>0</span>
                        <h3>Booster Buah</h3>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/moon/images/2.png" alt="#"/></i>
                        <span>0</span>
                        <h3>Evirofauna</h3>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="/assets/moon/images/4.png" alt="#"/></i>
                        <span>0</span>
                        <h3>Units of Technic</h3>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
    <div class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Layanan Kami<strong class="black"></strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3>Pupuk Organik Hayati</h3>
                            <figure><img src="/assets/moon/images/offer1.png" alt="img" /></figure>
                            {{-- <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p> --}}
                            <p>

                                Formula Aktif, hasil inokulasi mikrobia yang berperan penting dalam proses dekomposisi bahan organik, dapat di gunakan untuk penyemprotan tanah pertanian, juga untuk mempercepat proses pelapukan dalam pembuatan pupuk kompos.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3>Booster Buah</h3>
                            <figure><img src="/assets/moon/images/offer2.png" alt="img" /></figure>
                            {{-- <p>consectetur adipiscing elit, sed do eiusmodmpor incididunt ut labore et dolore magna aliqua. Ut enim ad</p> --}}
                            <p>
                        Gabungan bahan organik dengan unsur makro, mikro, multivitamin dan hormon tumbuh, untuk mengoptimalkan pembentukan bunga dan buah, sehingga hasil panen akan meningkat secara nyata. 
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3>Evirofauna</h3>
                            <figure><img src="/assets/brosur/cat.jpg" alt="img"  style="border-radius: 20px;" /></figure>
                            <p>
                            Bahan Organik murni untuk menghilangkan bau pada kotoran hewan peliharaan yang bekerja melalui proses dekomposisi dimana bahan kotoran akan terinkubasi secara biologi sehingga menjadikan hewan lebih sehat
                            </p>
                        
                            </div>
                    </div>

                    <div class="col-md-12">

                    
                        @foreach ($data as $item)
                        <a class="read-more" href="{{ $item->brosur_sihade }}" download="{{ basename($item->brosur_sihade) }}" onclick="downloadFile('{{ $item->brosur_sihade }}'); return false;">See More</a>
                        {{-- <a class="buynow ggg" href="https://wa.me/62811237916" target="_blank">Kontak Kami</a> --}}

                    @endforeach
                    
                    <script>
                    function downloadFile(url) {
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = url.substring(url.lastIndexOf('/') + 1);
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    }
                    </script>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Sihade Produk<strong class="black"></strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/moon/images/product_img1.jpg" alt="#" />
                                    <h3>Fresh Apple </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/moon/images/product_img2.jpg" alt="#" />
                                    <h3>Fresh Aalu  </h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/moon/images/product_img4.jpg" alt="#" />
                                    <h3>Rice Field </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/moon/images/product_img3.jpg" alt="#" />
                                    <h3>Vegetables</h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="/assets/moon/images/product_img5.jpg" alt="#" />
                                    <h3>Field Wheat </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    {{-- <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>testimonial</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">

                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/moon/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/moon/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/moon/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/moon/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/moon/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/moon/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 pa_right">
                                        <div class="testomonial_img">
                                            <i><img src="/assets/moon/images/tes.jpg" alt="#"/></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 pa_left">
                                        <div class="cross_inner">
                                            <h3>Johndue<br><strong class="ornage_color">Farm & CO</strong></h3>
                                            <p><img src="/assets/moon/icon/1.png" alt="#" />ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                <img src="/assets/moon/icon/2.png" alt="#" />
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div> --}}
  
    <!-- end clients -->
    <!-- contact -->

    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Hubungi Kami<strong class="black"></strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Nama Lengkap" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email Anda" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="No Whatsapp" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Masukan Pertanyaan Anda ?" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div id="map">
                
                </div>

            </div>
        </div>
    </div>

   
    <!-- end contact -->

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="address">
                            <a href="index.html"> <img src="/assets/brosur/sihadetext.png" alt="logo" /></a>
                       <p style="text-align: justify; font-size:14px;">
                        Sihade menyediakan solusi inovatif untuk pertanian dengan pupuk hayati berbahan alami yang memperbaiki kesehatan tanah dan penyerapan nutrisi, serta booster buah yang meningkatkan pertumbuhan dan kualitas buah menggunakan teknologi canggih. Kami berkomitmen pada solusi ramah lingkungan untuk meningkatkan hasil panen secara berkelanjutan.


                       </p>
                       
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="address">
                            <h3>Links</h3>
                            <ul class="Links_footer">
                                <li><img src="/assets/moon/icon/3.png" alt="#" /> <a href="/">Beranda</a> </li>
                                <li><img src="/assets/moon/icon/3.png" alt="#" /> <a href="#about">Tentang Kami</a> </li>
                                <li><img src="/assets/moon/icon/3.png" alt="#" /> <a href="#product">Produk</a> </li>
                                <li><img src="/assets/moon/icon/3.png" alt="#" /> <a href="#testimonial">Layanan</a> </li>
                                <li><img src="/assets/moon/icon/3.png" alt="#" /> <a href="#contact">Kontak Kami</a> </li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div> --}}

                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <div class="address">
                            <h3>Contact Us</h3>

                            <ul class="local">
                                <li>
                                    <a href="#"><img src="/assets/moon/icon/loc.png" alt="#" /></a><span style="color: white; margin-left:5px;">  Jl. Pelesiran No. 20E, Kec. Coblong, Kota Bandung</span>
                                    {{-- <br>United Kingdom </li> --}}
                                <li>
                                    <a href="#"><img src="/assets/moon/icon/email.png" alt="#" /></a><span style="color: white; margin-left:5px;" >sihadenew@gmail.com</span></li>
                                <li>
                                    <a href="#"><img src="/assets/moon/icon/call.png" alt="#" /></a>(+62) 811-237-916</li>

                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="copyright">
            <div class="container">
                {{-- <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p> --}}
           
        </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="/assets/moon/js/jquery.min.js"></script>
    <script src="/assets/moon/js/popper.min.js"></script>
    <script src="/assets/moon/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/moon/js/jquery-3.0.0.min.js"></script>
    <script src="/assets/moon/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/assets/moon/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/assets/moon/js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap" async defer></script>
<script>
    function initMap() {
        var bandung = {lat: -6.9175, lng: 107.6191}; // Koordinat Bandung

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: bandung
        });

        var marker = new google.maps.Marker({
            position: bandung,
            map: map
        });
    }
</script>
</body>

</html>