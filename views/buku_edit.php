<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="kode_buku" class="col-sm-3 control-label">Kode Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_buku" value="<?=$data['id_buku']?>"class="form-control" id="inputEmail3" placeholder="Kode Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="judul_buku" class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="judul_buku" value="<?=$data['jdl_buku']?>"class="form-control" id="inputEmail3" placeholder="Judul Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Pengarang" class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="Pengarang" value="<?=$data['pengarang']?>"class="form-control" id="inputEmail3" placeholder="Pengarang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Penerbit" class="col-sm-3 control-label">Penerbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="Penerbit" value="<?=$data['penerbit']?>"class="form-control" id="inputEmail3" placeholder="Penerbit">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="tahun_terbit" class="col-sm-3 control-label">Tahun Terbit</label>
                            <div class="col-sm-9">
                                <input type="text" name="tahun_terbit" value="<?=$data['thn_terbit']?>"class="form-control" id="inputEmail3" placeholder="Tahun Terbit" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Eksamplar" class="col-sm-3 control-label">Eksamplar</label>
                            <div class="col-sm-9">
                                <input type="text" name="Eksamplar" value="<?=$data['eksamplar']?>"class="form-control" id="inputEmail3" placeholder="Eksamplar" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        </div>
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="Status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="Status" class="form-control">
                                    <option value="Ada">-</option>
                                    <option value="Dikembalikan">Dikembalikan</option>
                                    <option value="Dipinjam">Dipinjam</option>	</select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Buku</button>
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
    $kode_buku=$_POST['kode_buku'];
    $judul_buku=$_POST['judul_buku'];
    $Pengarang=$_POST['Pengarang'];
    $Penerbit=$_POST['Penerbit'];
    $tahun_terbit=$_POST['tahun_terbit'];
    $Eksamplar=$_POST['Eksamplar']; 
    $Status=$_POST['Status'];
    //buat sql
    $sql="UPDATE buku SET id_buku='$kode_buku',jdl_buku='$judul_buku',pengarang='$Pengarang',penerbit='$Penerbit',thn_terbit='$tahun_terbit',eksamplar='$Eksamplar',status='$Status' WHERE id_buku ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=buku&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



