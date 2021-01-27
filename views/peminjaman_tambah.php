<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Pinjam</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                         <div class="form-group">
                            <label for="kd_buku" class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="kd_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Buku" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Peminjam Buku" required>
                            </div>
                        </div>

                       <div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglPinjam" class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tglKembali" class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglKembali" class="form-control" id="inputEmail3" placeholder="Tanggal Kembali">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="LmPinjam" class="col-sm-3 control-label">Lama Pinjam</label>
                            <div class="col-sm-3">
                                <input type="text" name="LmPinjam" class="form-control" id="inputEmail3" placeholder="Lama Pinjam">
                            </div>
                        </div>
                         
                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Ada">-</option>
                                    <option value="Ada">Dikembalikan</option>
                                    <option value="Dipinjam">Dipinjam</option>
                                    
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Peminjam
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $kode=$_POST['kd_buku'];
    $peminjam=$_POST['peminjam'];
    $tglPinjam=$_POST['tglPinjam'];
    $tglKembali=$_POST['tglKembali'];
    $LmPinjam=$_POST['LmPinjam'];
    $status=$_POST['status'];
    
    //buat sql
    $sql="INSERT INTO peminjaman VALUES ('$kode','$peminjam','$tglPinjam','$tglKembali','$LmPinjam','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjam Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
