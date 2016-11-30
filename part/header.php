    <header id="header-2" class="soft-scroll header-2">
        <nav class="main-nav navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#">
                        <img src="assets/images/brand/pgblocks-logo-nostrap.png" class="brand-img img-responsive">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php  
                            require_once('menu.php');
                            
                            if(isset($_SESSION['username'])) {
                                $query=mysql_query("SELECT level FROM data_user WHERE username='$_SESSION[username]'");
                                $level=mysql_fetch_array($query);
                                    if($level[0]== 1 )
                                       direktur_menu();
                                    else if($level[0] == 2)
                                       pelayan_menu();
                                    else if($level[0] == 3)
                                       kasir_menu();
                                    else if($level[0] == 4)
                                       koki_menu();
                                    else if($level[0] == 5)
                                       pantry_menu();
                            }
                        ?>                 
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <div class="clearfix clear-columns"></div>
    <br><br><br><br><br>