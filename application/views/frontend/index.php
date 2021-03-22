<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iCargo</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url()."assets/images/favicon.ico"; ?>"/>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url()."assets/frontend/assets/css/style.css"; ?>"/>
    <link rel="stylesheet" href="<?php echo base_url()."assets/frontend/assets/css/responsive.css"; ?>"/>
</head>

<body >

<!-- Navigation
    ================================================== -->
<div style="height: 100%; background-image: url('assets/images/backfront.png');">
    <div>
        <!--<img class="strips" src="@{'public/images/backfront.png'}" style="width: 200%; height: 100%;">-->
        <img class="strips" src="<?php echo base_url()."assets/frontend/assets/images/strips.png"; ?>">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo"> <img class="logo" src="<?php echo base_url()."assets/images/iCargo2.png"; ?>"/> </a>
            <div class="header-right">
                <a class="navbar-item" href="#modul">Modul</a>
                <a class="navbar-item" href="#benefits">Benefits</a>
                <a class="navbar-item" href="#features">Features</a>
                <a class="navbar-item" href="#testimonial">Testimonial</a>
                <a class="navbar-item" href="#developer">Developer</a>
                <a href="<?php echo base_url()."Login"; ?>">
                    <button class="primary">
                        Login
                        <i><img style="width: 20%; height: auto;" src="<?php echo base_url()."assets/images/logo-gembok.png"; ?>"></i>
                    </button>
                </a>
            </div>
        </div>
        <!--navigation-->


        <!-- Hero-Section
          ================================================== -->

        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                <h1 class="header-headline bold"> What is iCargo ? <br></h1>
                <p class="light" style="text-align: justify;"> 
                    iCargo merupakan solusi logistik untuk memudahkan pengguna jasa (Cargo Owner / Consignee dan Freight Forwarder)
                    dalam melakukan permohonan dokumen Deliver Order (DO) secara online tanpa harus datang ke Shipping Line. 
                </p><br/>
                <p class="light" style="text-align: justify;">
                    Selain itu, iCargo juga memfasilitasi release container, pembayaran service di terminal, assign trucking dan 
                    pengembalian container ke depo empty. 
                </p>
                <a href="#more">
                    <button class="hero-btn navbar-item"> More Details</button>
                </a>
            </div><!--hero-left-->

            <div class="col-sm-6 col-sm-6">
                <img class="ipad-screen img-responsive" src="<?php echo base_url()."assets/images/keseluruhan.png"; ?>"/>
            </div>
            <!--<div><img class="mouse" src="@{'public/frontend/assets/images/mouse.svg'}"/></div>-->
        </div><!--hero-->
    </div> <!--hero-container-->
</div><!--hero-background-->


<!-- Features
  ================================================== -->

<div id="modul" class="features-section">
    <!--style="background-image: url('../../../public/frontend/assets/images/strips2.png'); width: 100%; height: 100%;"-->
    <div class="features-container row">
        <h2 class="features-headline light"><b>Modul of <span style="color: red;">i</span>Cargo</b></h2>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display">
                <img src="<?php echo base_url()."assets/images/DO.png"; ?>">
            </div>
            <h5 class="feature-head-text feature-no-display"> REQUEST DO & PAYMENT </h5>
            <p class="feature-subtext light feature-no-display"> 
                Dalam modul Request DO dan Payment terdapat beberapa menu untuk mengakomodasi permintaan penebusan dan pembayaran DO antara lain 
                fitur Information Bill of Lading, Request DO, Online Invoice, Online Payment, Report dan DO Extention.
            </p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-mid">
                <img src="<?php echo base_url()."assets/images/SP2.png"; ?>">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-mid"> RELEASE SP2 </h5>
            <p class="feature-subtext light feature-no-display feature-display-mid"> 
                Modul ini berisi fungsionalitas untuk melakukan permintaan penebusan dan pembayaran SP2 di terminal. Dalam modul ini terdapat 
                beberapa fitur antara lain delivery Request (Request SP2), Online Payment, online invoice dan Assign Truck.
            </p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-last">
                <img src="<?php echo base_url()."assets/images/DEPO.png"; ?>">
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-last"> DEPO </h5>
            <p class="feature-subtext light feature-no-display feature-display-last"> 
                Merupakan tempat untuk tracking pengembalian Container ke empty depo. Dalam modul ini terdapat beberapa fungsi seperti informasi
                empty Container, EIR, EOR dan Pembayaran service Empty Depo.
            </p>
        </div>
    </div> <!--features-container-->
</div> <!--features-section-->



<!-- White-Section
  ================================================== -->

<div class="white-section row" style="background-color: #ffffff;">
    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="<?php echo base_url()."assets/frontend/assets/images/imac.png"; ?>">
    </div>
    <!--imac-->

    <div id="benefits" class="col-sm-6" style="background-color: #ffffff;">

        <div class="white-section-text"><br/><br/>
            <h2 class="imac-section-header light"><strong>Benefits of <b style="color: red;">i</b>Cargo</strong></h2>

            <div>
                <p> 
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Layanan online 24/7 <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Cashless transaction <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Pemesanan trucking secara online <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Keamanan dan kenyamanan bertransaksi <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Menyediakan EIR dan EOR Empty Depo secara online <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Mendapatkan laporan transaksi yang telah dilakukan <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Memudahkan pengguna jasa untuk pembayaran Delivery Order <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Dilakukan secara online,tanpa harus datang ke Shipping Line <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Percepatan dan efisiensi pengurusan dan penerbitan DO dan SP2 <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Menyediakan informasi mengenai data request DO yang dilakukan <br/>
                    <img src="<?php echo base_url()."assets/images/checklist.png"; ?>" style="width: 5%;"> Trace and Tracking untuk pengembalian container empty ke depo <br/>
                </p>
            </div>
        </div>
    </div>
</div>
<!--white-section-text-section--->


<!-- White-Section
  ================================================== -->

<div class="white-section row" style="background-color: #ffffff;">
    <div id="features" class="col-sm-8" style="background-color: #ffffff;">

        <div class="white-section-text"><br/><br/>
            <h2 class="phone-section-header light"><strong>Features of <b style="color: red;">i</b>Cargo</strong></h2>

            <div>
                <p> 
                    <img src="<?php echo base_url()."assets/images/features-icon/obl.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Online Bill of Lading</b> <span style="font-size: 9pt;">: Menampilkan data Bill of Lading</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/invo.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Online Invoice</b> <span style="font-size: 9pt;">: Menampilkan invoice DO dari Shipping Line</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/do.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Request DO</b> <span style="font-size: 9pt;">: Meminta DO yang akan ditebus / dilakukan pembayaran</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/onlinepay.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Online Payment</b> <span style="font-size: 9pt;">: Sistem pembayaran melalui Internet Banking – Click Pay</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/obl.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Report</b> <span style="font-size: 9pt;">: Menampilkan data transaksi penebusan DO dan pembayaran DO yang telah dilakukan pada sistem</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/onlinepay.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">SP2 Request</b> <span style="font-size: 9pt;">: Merupakan fitur permintaan DO bisa dilakukan secara Online tanpa harus datang ke lokasi tujuan</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/report.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">Assign Truck</b> <span style="font-size: 9pt;">: Permintaan Pengangkut untuk melakukan pengangkutan barang dari terminal Port sesuai info SP2</span><br/>
                    <img src="<?php echo base_url()."assets/images/features-icon/more.png"; ?>" style="width: 6%;"> <b style="font-size: 9pt;">More Features</b> <span style="font-size: 9pt;">: Dan masih banyak lagi fitur yang ada dalam iCargo</span><br/>
                </p>
            </div>
        </div>
    </div>
    
    <div class="imac col-sm-4">
        <img class="phone-screen img-responsive" src="<?php echo base_url()."assets/images/features-icon/big-feat.png"; ?>" style="width: 80%; height: auto;">
    </div>
    <!--imac-->

    
</div>
<!--white-section-text-section--->

<!-- Email-Section
  ================================================== -->

<div id="testimonial" class="blue-section" style="background-color: #ffffff;">
    
    <h2 class="team-section-header light text-center"><b style="color: #444444;">What our client say of <span style="color: red;">i</span>Cargo</b></h2>
    <img src="<?php echo base_url()."assets/images/edward.jpg"; ?>" style="height: 70%; width: auto;">
</div>
<!--blue-section-->

<!-- Team
  ================================================== -->

<div id="developer" class="team" style="background-color: #ffffff;">
    <h2 class="team-section-header light text-center"><b>Developer of <span style="color: red;">i</span>Cargo</b></h2>

    <div class="team-container row">
        <div class="col-sm-4 team-member">
            <img src="<?php echo base_url()."assets/images/a_pardana.png"; ?>" style="width: 76%; height: auto;">
            <div class="team-member-text">
                <h4 class="team-member-position light"><b style="font-size: 12pt; color: #333333">ADITRIA PUTRA PARDANA</b></h4>
                <p class="light">Pengalaman dan mental yang berbicara</p>
                <a href="http://www.linkedin.com/in/aditria-pardana-b846a9121/" target="_blank"><img class="team-social-icon" src="<?php echo base_url()."assets/images/logo-linkedin.jpg"; ?>" style="width: 10%; height: auto;"></a>
                <a href="http://www.instagram.com/a_pardana" target="_blank"><img class="team-social-icon" src="<?php echo base_url()."assets/images/logo-instagram.png"; ?>" style="width: 11%; height: auto;"></a>
                <a href="http://www.twitter.com/a_pardana" target="_blank"><img class="team-social-icon" src="<?php echo base_url()."assets/frontend/assets/images/team-twitter.svg"; ?>"></a><br/><br/>
                <p style="text-align: left;">
                    <img src="<?php echo base_url()."assets/images/logo-whatsapp.jpg"; ?>" style="width: 8%; height: auto;"><span class="light">&nbsp; +62 857 8147 6040</span><br/>
                    <img src="<?php echo base_url()."assets/images/logo-email.png"; ?>" style="width: 8%; height: auto;"><span class="light">&nbsp; aditria.pardana@yahoo.co.id</span><br/>
                </p>
            </div>
        </div>
        
        <div class="col-sm-8 team-member">
            <div>
                <p style="text-align: justify;">
                    Lahir di Jakarta, pada <b>20 Juni 1996</b>. Saat ini tinggal di <b>Papan Mas, Kec. Tambun Selatan, Kab. Bekasi</b>. 
                    Dia adalah anak terakhir dari tiga bersaudara. Dia lulusan tahun 2014 dari <span style="color: red;">SMK Mandalahayu Bekasi</span> jurusan 
                    Rekayasa Perangkat Lunak (RPL). Sekarang ia melanjutkan <i>study-nya</i> sebagai mahasiswa di Sekolah Tinggi Manajemen Informatika 
                    dan Komunikasi <span style="color: red;">(STMIK) Bani Saleh Bekasi</span>, mengambil kelas karyawan dengan program studi S1-Sistem Informasi (SI).
                </p>
                <p style="text-align: justify;">
                    Hingga saat ini, ia mempunyai riwayat pengalaman kerja di dua perusahaan, yang pertama sebagai <b>Desain Grafis</b> di <span style="color: red;">Sejahtera Bekasi</span>, 
                    yang dimana perusahaan tersebut bergerak di bidang Percetakan. Sedangkan, perusahaan kedua sebagai <b>Java Programmer</b> 
                    di <span style="color: red;">Martha Tilaar Group</span> yang dimana perusahaan tersebut bergerak di bidang Software Developer, dan Alhamdulillah saat ini ia
                    bekerja sebagai <b>Java Programmer</b> di <span style="color: red;">PT. Minda Perdana Indonesia</span> yang bergerak di bidang Software Developer.
                </p>
                <p style="text-align: justify">
                    Pria pecinta sepak bola ini mempunyai Tim favorite yaitu <b>FC Barcelona</b> dan <b>Spanyol</b>, sehingga mempunyai idola yaitu <span style="color: red;">Lionel Andres Messi</span> 
                    dan <span style="color: red;">Mesut Ozil</span>. Hingga saat ini dia mempunyai dua Tim Futsal yang aktif, 
                    yaitu <b>Jones FT</b> dan <b>Gemilang FT</b>. Dimana kedua Tim tersebut, ia menjabat sebagai Kapten Futsal. 
                    Selain tertarik dengan dunia sepak bola dan IT, ia juga tertarik dengan dunia <span style="color: red;">Psikolog</span>. 
                    Sehingga, ia juga mempunyai idola di dunia tersebut yaitu <b>Daud Antonius</b>.
                </p>
            </div>
        </div>

    </div> <!--team-container--->

</div> <!--team-section--->

<!-- Email-Section
  ================================================== -->

<div id="more" style="background-color: #f5f5f5; height: 25%; text-align: left; padding-top: 30px; padding-left: 100px; padding-right: 100px; padding-bottom: 35px;">
    <table style="text-align: center;" border="0">
        <tr>
            <td colspan="4"></td>
            <td style="text-align: center; width: 10%; font-size: 9pt;">Subsidary of</td>
        </tr>
        
        <tr>
            <td style="width: 7%;">
                <a href="http://www.ilcs.co.id/about" target="_blank">
                    <img src="<?php echo base_url()."assets/images/subsidary/logo_ilcs.png"; ?>" style="width: 50%; height: auto;">
                </a>
            </td>
            <td style="width: 8%; font-size: 10pt; text-align: left;">Plaza Telkom Lantai 4, <br/>
                Yos Sudarso 23-24 <br/> 
                Jakarta Utara
            </td>
            <td style="width: 8%; font-size: 10pt; text-align: center;">
                <img src="<?php echo base_url()."assets/images/logo-email2.png"; ?>" style="width: 15%; height: auto;">
                &nbsp; customercare@ilcs.co.id
            </td>
            <td style="width: 8%; font-size: 10pt; text-align: center;">
                <img src="<?php echo base_url()."assets/images/hp.png"; ?>" style="width: 12%; height: auto;">
                &nbsp; Tel. 1500 950
            </td>
            <td style="text-align: center;">
                <a href="http://www.indonesiaport.co.id/" target="_blank">
                    <img src="<?php echo base_url()."assets/images/subsidary/logo_ipc.png"; ?>" style="width: 40%; height: auto;">
                </a>
                <a href="http://www.telkom.co.id/" target="_blank">
                    <img src="<?php echo base_url()."assets/images/subsidary/logo_telkom.png"; ?>" style="width: 40%; height: auto;">
                </a>
            </td>
        </tr>
    </table>
<!--    <div>
        
        <span style="vertical-align: top;">
            
        </span>
    </div>-->
</div>
<!--blue-section-->

<!-- Footer
  ================================================== -->

<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>

            <div class="col-sm-12 webscope">
                <span class="webscope-text"> Copyright &copy; A. Pardana | iCargo 2017 All Right Reserved v 1 . 0</span>
            </div>
        </div>
        <!--row-->

    </div>
    <!--container-->
</div>
<!--footer-->

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="<?php echo base_url()."assets/frontend/assets/js/script.js"; ?>"></script>

</body>

</html>