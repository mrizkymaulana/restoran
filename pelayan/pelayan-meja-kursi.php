<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1>Daftar Meja Kosong</h1>
                    <hr>
                </div>
                <div class="services-wrapper">
                    <div class="col-md-1 pull-left">
                        <a href="?pelayan=pelayan-waiting-list" class="btn btn-danger" role="button">Waiting list <span class="badge">
                            <?php  
                                $query = mysql_query("SELECT * FROM data_waitinglist");
                                $row = mysql_num_rows($query);
                                echo $row;
                            ?>
                        </span></a>
                    </div>
                    <br><br><br>
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>No Meja</td>
                                    <td>Kapasitas</td>
                                    <td>Status</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    tampilData();
                                    if(isset($_POST['proses']))
                                        tambahPesanan();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<?php 
function tampilData(){
    $no = 1;
    $query = mysql_query("SELECT * FROM data_meja WHERE status='kosong' ORDER BY kode_meja");
    while ($data = mysql_fetch_assoc($query)) {
        echo "<tr>
                <td>$no</td>
                <td>$data[kode_meja]</td>
                <td>$data[kapasitas]</td>
                <td>$data[status]</td>
                <td>
                    <input type='button' name='view' value='pilih' id='$data[kode_meja]' class='view_data btn btn-xs btn-primary' />
                </td>
        </tr>";
        $no++; //pertambahan no
    }
}

function tambahPesanan(){
    $kode_meja = $_POST['kode_meja'];
    $pelanggan = $_POST['nama_pelanggan'];
    $query = mysql_query("INSERT INTO data_pesanan VALUES('','1','$kode_meja','$pelanggan'") or die('tambah gagal!! '.mysql_error());
    echo "<script>
        alert('Berhasil');
        window.location=\"?pelayan=pelayan-meja-kursi\"</script>
    </script>";
}
?>

<div id="dataModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Employe Data</h4>
            </div>
            <div class="modal-body" >
                 <form method="post" action="index.php?pelayan=tambah_pesanan">
                    <div class="col-md-4">
                        <label>Kode Meja </label>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="kode_meja" class="form-control" id="getKodeMeja" readonly>
                    </div>
                    <div class="clearfix clear-columns"></div><br>
                    <div class="col-md-4">
                        <label>Nama Pelanggan </label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="nama_pelanggan" class="form-control" id="nama_pelanggan">
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">close</button>
                <button class="btn btn-primary" type="submit" name="tambah">Proses</button>
                </form> 
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $(".view_data").click(function(){

            var kode_meja = $(this).attr("id");

            $.ajax({
                url:"pelayan/getKodeMeja.php",
                method:"post",
                data:{kode_meja:kode_meja},
                success:function(data){
                    $("#getKodeMeja").val(data);
                    $("#dataModal").modal("show");
                }
            }) 
        });

        
    });
</script>