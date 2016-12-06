
<section id="content-1-3" class="content-block content-1-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="underlined-title">
                    <h1>List Meja Terisi</h1>
                    <hr>
                </div>
                <div class="services-wrapper">
                    <table class="table table-condensed table-responsive table-hover">
                        <thead>
                            <tr align="center">
                                <td>No</td>
                                <td>No Meja</td>
                                <td>Nama Pelanggan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $no = 1;
                                $query = mysql_query("SELECT * FROM data_pesanan");
                                while ($data = mysql_fetch_assoc($query)) {
                                    echo 
                                    "
                                        <tr>
                                            <td>$no</td>
                                            <td>$data[kode_meja]</td>
                                            <td>$data[nama_pelanggan]</td>
                                            <td>
                                                <a href=''>
                                                    <input type='submit' value='Pilih' class='btn btn-default btn-xs'>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                                    $no++;
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