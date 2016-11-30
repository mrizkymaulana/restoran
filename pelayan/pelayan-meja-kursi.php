<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1>Daftar Meja Kosong</h1>
                    <hr>
                </div>
                <div class="services-wrapper">
                    <div class="col-md-12">
                        <div class="col-md-3 pull-left">
                            <a href="pelayan-waiting-list.html" class="btn btn-danger" role="button">Waiting list <span class="badge">3</span></a>
                        </div>
                        <div class="col-md-6 pull-right">
                            <div class="col-md-4">
                                <h5>Cari meja berdasarkan : </h5>
                            </div>
                            <div class="col-md-4">
                                <form method="post">
                                <select class="form-control" name="kapasitas">
                                    <option>Kapasitas</option>
                                    <option value="2">2 Orang</option>
                                    <option value="4">4 Orang</option>
                                    <option value="10">10 Orang</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="cari" value="cari" class="btn btn-primary">
                                </form> <!-- </form>  -->
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Meja</th>
                                <th>Kapasitas</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_POST['cari'])) {
                                    hasilCari();
                                }else
                                    tampilData();
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
                <h4 class="modal-title">Isi Nama Pelanggan</h4> 
            </div>                     
            <div class="modal-body"> 
                <form method="post">
                    
                </form>
            </div>                     
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                         
                <button type="button" class="btn btn-primary">Save changes</button>                         
            </div>                     
        </div>                 
    </div>             
</div>

<?php 
function tampilData(){
    $no = 1;
    $query = mysql_query("SELECT * FROM data_meja WHERE status='kosong' ORDER BY kode_meja");
    while ($data = mysql_fetch_assoc($query)) {
        echo "<tr>
                <td>$no</td>
                <td>$data[kode_meja]</td>
                <td>$data[kapasitas] Orang</td>
                <td>$data[status]</td>
                <td><input type='submit' value='Pilih' data-toggle='modal' data-target='#modal1' class='btn btn-info btn-xs'>
                </td>
        </tr>";
        $no++; //pertambahan no
    }
}

function hasilCari(){
    $no = 1;
    $cari = $_POST['kapasitas'];
    $query = mysql_query("SELECT * FROM data_meja WHERE status='kosong' and kapasitas='$cari' ORDER BY kode_meja");
    while ($data = mysql_fetch_assoc($query)) {
        echo "<tr>
                <td>$no</td>
                <td>$data[kode_meja]</td>
                <td>$data[kapasitas] Orang</td>
                <td>$data[status]</td>
                <td><input type='submit' value='Pilih' data-toggle='modal' data-target='#modal1' class='btn btn-info btn-xs'>
                </td>
        </tr>";
        $no++; //pertambahan no
    }
}
?>