<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1>Merubah Password</h1>
                    <hr>
                </div>
                <div class="services-wrapper">                           
                    <form action="" method="post" accept-charset="utf-8">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="pull-left">Password Lama</label>
                                <input type="text" name="pwd_lama" value="<?php get_oldpassword(); ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="pull-left">Password Baru</label>
                                <input type="text" name="pwd_baru" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="rubah" value="SIMPAN" class="btn btn-primary pull-left">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<?php  
    function get_oldpassword(){
        $username = $_SESSION['username'];
        $query = mysql_query("SELECT * FROM data_user WHERE username='$username'");
        $old_password = mysql_fetch_assoc($query);
        echo $old_password['password'];
    }

    function set_newpassword(){
        $new_password = $_POST['pwd_baru'];
        $username = $_SESSION['username'];
        $query_id = mysql_query("SELECT * FROM data_user WHERE username='$username'");
        $data = mysql_fetch_assoc($query_id);
        $userid = $data['userid'];

        $query = mysql_query("UPDATE data_user SET password='$new_password' WHERE userid='$userid'");
        echo "<script>
            alert('Password Telah di Rubah');
            window.location=\"index.php\"</script>
        </script>";
    }
    
    if(isset($_POST['rubah']))
        set_newpassword();
?>