<?php
session_start();
if($_SESSION){
    header("Location: index.php");
}
include('connectivity.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <link href="assets/tambahan/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <br><br><br>
            <div class="row col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class='panel-heading'>
                        Silahkan Log In
                    </div>
                    <div class="panel-body">
                        <?php
                    if(isset($_POST['login'])){
                        
                        $username   = $_POST['username'];
                        $password   = $_POST['password'];
                        $level      = $_POST['level'];
                        
                        $query = mysql_query("SELECT * FROM data_user WHERE username='$username' AND password='$password'");
                        if(mysql_num_rows($query) == 0){
                            echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                            echo $query. " and ".mysql_num_rows($query);
                        }else{
                            $row = mysql_fetch_array($query);
                            if($row['level'] == 1 && $level == 1)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='direktur';
                                header("Location: index.php");
                            }
                            else if($row['level'] == 2 && $level == 2)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='pelayan';
                                header("Location: index.php");
                            }
                            else if($row['level'] == 3 && $level == 3)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='kasir';
                                header("Location: index.php");
                            }
                            else if($row['level'] == 4 && $level == 4)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='koki';
                                header("Location: index.php");
                            }
                            else if($row['level'] == 5 && $level == 5)
                            {
                                $_SESSION['username']=$username;
                                $_SESSION['level']='pantry';
                                header("Location: index.php");
                            }
                            else{
                                echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
                            }
                        }
                    }
                    ?>
                    
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                        </div>
                        <div class="form-group">
                            <select name="level" class="form-control" required>
                                <option value="">Pilih Level User</option>
                                <option value="1">Direktur</option>
                                <option value="2">Pelayan</option>
                                <option value="3">Kasir</option>
                                <option value="4">Koki</option>
                                <option value="5">Pantry</option>
                                <option value="6">Customer Service</option>
                                <option value="99">Administrator</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
                        </div>
                    </form>
                    </div>                     
                </div>
            </div>
            <!-- Main component for a primary marketing message or call to action -->
        </div>         
        <!-- /container -->


        
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
