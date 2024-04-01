<?php include_once "header.php" ?>

<?php include_once "sidebar.php" ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 3</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","TE"=>"Teknik Elektro", "BD"=>"Bisnis Digital"];
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Pendaftaran Siswa</h1>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <!-- <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="TE">Teknik Elektro</option> -->
        <?php
        foreach ($ar_prodi as $index_prodi => $value_prodi) {
        ?>    
            <option value="<?=$index_prodi?>"><?=$value_prodi ?></option>
       <?php } ?>
      </select>
    </div>
  </div>  


  <div class="form-group row">
    <label class="col-4">Hobi</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_0" type="checkbox" class="custom-control-input" value="Main Game"> 
        <label for="hobi_0" class="custom-control-label">Main Game</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_1" type="checkbox" class="custom-control-input" value="Membaca"> 
        <label for="hobi_1" class="custom-control-label">Membaca</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_2" type="checkbox" class="custom-control-input" value="Nonton"> 
        <label for="hobi_2" class="custom-control-label">Nonton</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_3" type="checkbox" class="custom-control-input" value="Menulis"> 
        <label for="hobi_3" class="custom-control-label">Menulis</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobi[]" id="hobi_4" type="checkbox" class="custom-control-input" value="Futsal"> 
        <label for="hobi_4" class="custom-control-label">Futsal</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ipk" class="col-4 col-form-label">IPK</label> 
    <div class="col-8">
      <input id="ipk" name="ipk" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$index_prodi = $_POST['prodi'];
$hobi = $_POST['hobi'];
$ipk = $_POST['ipk'];
// print_r($hobi); //lihat hasil pesan array


//CETAK
echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "Nama: $nama <br>";
echo "Jenis kelamin: $jk <br>";
echo "Program Studi: $index_prodi <br>";
echo "Hobi: ";
foreach ($hobi as $value) {
    echo "$value, ";
}
echo "<br>";
echo "IPK: $ipk <br>";

function status($ipk){
    if($ipk>=3 && $ipk<=4){
        return "LULUS";
    }
    else{
        return "GAGAL";
    }
}
echo "Status: ".status($ipk);

?>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">
                Footer
              </div> -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php include_once "footer.php" ?>
