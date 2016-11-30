<?php 
    function pelayan_dashboard(){
?>
    <section id="content-1-3" class="content-block content-1-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="underlined-title">
                        <h1>Dashboard Pelayan</h1>
                        <hr>
                    </div>
                    <div class="services-wrapper">
                        <div class="col-md-12 col-md-offset-2">
                            <div class="col-md-4">
                                <a href="?pelayan=pelayan-meja-kursi">
                                    <div class="icon bg-crete">
                                        <span class="fa fa-laptop"></span>
                                    </div>
                                    <h3>Meja &amp; Kursi</h3>
                                </a>                                 
                            </div>
                            <div class="col-md-4">
                                <a href="?pelayan=pelayan-pemesanan">
                                    <div class="icon bg-finn">
                                        <span class="fa fa-code"></span>
                                    </div>
                                    <h3>Pemesanan</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php  
    } // end dashboard pelayan

    function kasir_dashboard(){
?>
    <section id="content-1-3" class="content-block content-1-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="underlined-title">
                        <h1>Dashboard Kasir</h1>
                        <hr>
                    </div>
                    <div class="services-wrapper">
                        <div class="col-md-4">
                            <a href="?kasir=kasir-bill">
                                <div class="icon bg-crete">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h3>Bill</h3>
                            </a>                                 
                        </div>
                        <div class="col-md-4">
                            <a href="?kasir=kasir-pembayaran">
                                <div class="icon bg-finn">
                                    <span class="fa fa-code"></span>
                                </div>
                                <h3>Pembayaran</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="?kasir=kasir-laporan">
                                <div class="icon bg-sunflower">
                                    <span class="fa fa-rocket"></span>
                                </div>
                                <h3>Laporan</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php  
    } // end dashboard kasir

    function koki_dashboard(){
?>
    <section id="content-1-3" class="content-block content-1-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="underlined-title">
                        <h1>Dashboard Koki</h1>
                        <hr>
                    </div>
                    <div class="services-wrapper">
                        <div class="col-md-4">
                            <a href="koki-menu.html">
                                <div class="icon bg-crete">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h3>Menu</h3>
                            </a>                                 
                        </div>
                        <div class="col-md-4">
                            <a href="koki-resep.html">
                                <div class="icon bg-finn">
                                    <span class="fa fa-code"></span>
                                </div>
                                <h3>Resep</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="koki-list-pesanan.html">
                                <div class="icon bg-crete">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h3>Daftar Pesanan</h3>
                            </a>                                 
                        </div>
                        <div class="clearfix clear-columns"></div>
                        <br><br><br>
                        <div class="col-md-4">
                            <a href="koki-ke-pantry.html">
                                <div class="icon bg-finn">
                                    <span class="fa fa-code"></span>
                                </div>
                                <h3>Pantry</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="koki-laporan.html">
                                <div class="icon bg-crete">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h3>Laporan</h3>
                            </a>                                 
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php  
    } // end dashboard koki

    function pantry_dashboard(){
?>
    <section id="content-1-3" class="content-block content-1-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="underlined-title">
                        <h1>Dashboard Pantry</h1>
                        <hr>
                    </div>
                    <div class="services-wrapper">
                        <div class="col-md-4">
                            <a href="pantry-persediaan-bahanbaku.html">
                                <div class="icon bg-crete">
                                    <span class="fa fa-laptop"></span>
                                </div>
                                <h3>Persediaan Bahan Baku</h3>
                            </a>                                 
                        </div>
                        <div class="col-md-4">
                            <a href="pantry-list-pesanan-koki.html">
                                <div class="icon bg-finn">
                                    <span class="fa fa-code"></span>
                                </div>
                                <h3>List Pesanan Koki</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="pantry-laporan.html">
                                <div class="icon bg-sunflower">
                                    <span class="fa fa-rocket"></span>
                                </div>
                                <h3>Laporan</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php  
    } // end dashboard pantry


    // pemilihan dashboard
    if(isset($_SESSION['username'])) {
        $query=mysql_query("SELECT level FROM data_user WHERE username='$_SESSION[username]'");
        $level=mysql_fetch_array($query);
            if($level[0]== 1 )
               direktur_dashboard();
            else if($level[0] == 2)
               pelayan_dashboard();
            else if($level[0] == 3)
               kasir_dashboard();
            else if($level[0] == 4)
               koki_dashboard();
            else if($level[0] == 5)
               pantry_dashboard();
    }
?>

