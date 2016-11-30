<?php
session_start();
if(empty($_SESSION)){
    header("Location: login.php");
}
include('connectivity.php');
?>
<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <script type="text/javascript">
    $(document).ready(function(){
        $("#link").click(function(){
            $("#wrapper-link").toggle();
        });
    });
    </script>
    <?php 
        include('part/doctype.php'); //part head 
    ?>     
    <body data-spy="scroll" data-target="nav">
        <?php 
            include('part/header.php'); //header 
        ?> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                        if(isset($_GET['kasir']))
                            include('kasir/'.$_GET['kasir'].'.php');
                        if(isset($_GET['pelayan']))
                            include('pelayan/'.$_GET['pelayan'].'.php');
                        else
                            include('part/dashboard.php');
                    ?>
                    </div><!-- col-md-12  -->
                </div> <!-- /.row -->
            </div><!-- /.container -->
        <?php 
            include('part/footer.php'); //footer 
        ?>         
    </body>     
</html>
