<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Buku</h3>
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
                            <label for="jdl_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="jdl_buku" class="form-control" id="inputEmail3" placeholder="Inputkan Judul Buku" required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengarang" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengarang" required>
                            </div>

                        </div>
						 <div class="form-group">
                            <label for="penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerbit" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Penerbit" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="thn_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="thn_terbit"class="form-control" id="inputEmail3" placeholder="Inputkan Tahun Terbit" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="eksamplar" class="col-sm-3 control-label">Eksamplar</label>
                            <div class="col-sm-9">
                                <input type="text" name="eksamplar"class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Eksamplar" required>
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
                    <a href="?page=buku&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Buku
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
	$judul=$_POST['jdl_buku'];
	$pengarang_buku=$_POST['pengarang'];
	$penerbit_buku=$_POST['penerbit'];
  $tahun=$_POST['thn_terbit'];
	$eks_buku=$_POST['eksamplar']; 
  $status=$_POST['status'];
	
    //buat sql
    $sql="INSERT INTO buku VALUES ('','$kode','$judul','$pengarang_buku','$penerbit_buku','$tahun','$eks_buku','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
