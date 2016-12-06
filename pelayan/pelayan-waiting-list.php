<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1>Daftar Waiting list</h1>
                    <hr>
                </div>
                <div class="services-wrapper">                           
                        <button type="button" class="btn btn-dark btn-sm pull-left"  data-toggle="modal" data-target="#modalWaiting"><i class="fa fa-plus"></i> Waiting list</button>
                        <br><br><br>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Pelanggan</td>
                                <td>Kapasitas</td>
                                <td>Status</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $no = 1;
                                $query = mysql_query("SELECT * FROM data_waitinglist ORDER BY 'id'");
                                while ($data = mysql_fetch_assoc($query)) {
                                    echo "
                                    <tr>
                                        <td>$no</td>
                                        <td>$data[nama_pelanggan]</td>
                                        <td>$data[kapasitas] Orang</td>
                                        <td>$data[status]</td>
                                        <td>
                                            <input type='submit' value='Masuk' data-toggle='modal' data-target='#modal1' class='btn btn-default btn-xs'>
                                        </td>
                                    </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">DAFTAR MEJA KOSONG</h4> 
            </div>                     
            <div class="modal-body"> 
                <table class="table table-stripped">
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
                            $no = 1;
                            $query = mysql_query("SELECT * FROM data_meja WHERE status='kosong' ORDER BY kode_meja");
                            while ($data = mysql_fetch_assoc($query)) {
                                echo "<tr>
                                        <td>$no</td>
                                        <td>$data[kode_meja]</td>
                                        <td>$data[kapasitas]</td>
                                        <td>$data[status]</td>
                                        <td><input type='submit' value='Pilih' data-toggle='modal' data-target='#modal1' class='btn btn-info btn-xs'>
                                        </td>
                                </tr>";
                                $no++; //pertambahan no
                            }
                        ?>
                    </tbody>
                </table>
            </div>                     
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                         
                <button type="button" class="btn btn-primary">Save changes</button>                         
            </div>                     
        </div>                 
    </div>             
</div>

<div class="modal fade pg-show-modal" id="modalWaiting" tabindex="-1" role="dialog" aria-hidden="true"> 
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Isi Data Waiting List</h4> 
            </div>                     
            <div class="modal-body"> 
                <form method="post" role="form">
                    <div class="col-md-2">
                        <label>Nama </label>
                    </div>
                    <div class="col-md-7">
                        <input type="text" name="nama_pelanggan" value="" placeholder="" class="form-control">
                    </div>
                    <div class="clearfix clear-columns"></div><br>
                    <div class="col-md-2">
                        <label>Kapasitas </label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control" name="kapasitas">
                            <option>Pilih</option>
                            <option value="2">2 Orang</option>
                            <option value="4">4 Orang</option>
                            <option value="10">10 Orang</option>
                        </select>
                    </div>
            </div>                     
            <div class="modal-footer"> 
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                         
                    <input type="submit" name="simpanWL" value="SIMPAN" class="btn btn-primary">
                </form><!-- </form> -->
            </div>                     
        </div>                 
    </div>
</div>

<?php  
function tambahWL(){
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $kapasitas = $_POST['kapasitas'];

    $query = mysql_query("INSERT INTO data_waitinglist (id,nama_pelanggan,kapasitas) VALUES('','$nama_pelanggan','$kapasitas')") or die(mysql_error());
    echo "<script>
        alert('Berhasil');
        window.location=\"?pelayan=pelayan-waiting-list\"</script>
    </script>";
}
if(isset($_POST['simpanWL'])) tambahWL();
?>