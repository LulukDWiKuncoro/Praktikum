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
                <h3 class="card-title">Tugas 2</h3>

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
              <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Form Registrasi</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                </head>

                <body>
                    <form method="POST" action="tugas2a.php">
                        <div class="form-group row">
                            <label for="nim" class="col-2 ml-3 mt-3 col-form-label">NIM</label>
                            <div class="col-6 mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-adn"></i>
                                        </div>
                                    </div>
                                    <input id="nim" name="nim" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-2  ml-3 mt-3 col-form-label">Nama</label>
                            <div class="col-6 mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-address-book"></i>
                                        </div>
                                    </div>
                                    <input id="nama" name="nama" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2  ml-3 mt-3">Jenis Kelamin</label>
                            <div class="col-6 mt-3">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki laki">
                                    <label for="jk_0" class="custom-control-label">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan">
                                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="select" class="col-2  ml-3 mt-3 col-form-label">Program Studi</label>
                            <div class="col-6 mt-3">
                                <select id="prodi" name="prodi" class="custom-select">
                                <?php
                                //Array Prodi
                                $ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
                                foreach ($ar_prodi as $index_prodi => $value_prodi) {
                                ?>    
                                <option value="<?=$index_prodi?>"><?=$value_prodi ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-2  ml-3 mt-3">Skill Web &amp; Programming</label>
                            <div class="col-8 mt-3">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_0" type="checkbox" class="custom-control-input" value="HTML">
                                    <label for="skil_0" class="custom-control-label">HTML</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_1" type="checkbox" class="custom-control-input" value="CSS">
                                    <label for="skil_1" class="custom-control-label">CSS</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_2" type="checkbox" class="custom-control-input" value="JavaScript">
                                    <label for="skil_2" class="custom-control-label">JavaScript</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                                    <label for="skil_3" class="custom-control-label">RWD Bootstrap</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_4" type="checkbox" class="custom-control-input" value="PHP">
                                    <label for="skil_4" class="custom-control-label">PHP</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_5" type="checkbox" class="custom-control-input" value="Python">
                                    <label for="skil_5" class="custom-control-label">Python</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input name="skil[]" id="skil_6" type="checkbox" class="custom-control-input" value="Java">
                                    <label for="skil_6" class="custom-control-label">Java</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_domisili" class="col-2  ml-3 mt-3 col-form-label">Tempat Domisili</label>
                            <div class="col-6 mt-3">
                                <select id="domisili" name="domisili" class="custom-select">
                                    <!-- <option value="jakarta">Jakarta</option>
                                    <option value="depok">Depok</option>
                                    <option value="bogor">Bogor</option>
                                    <option value="tangerang">Tangerang</option>
                                    <option value="bekasi">Bekasi</option> -->
                                    <?php 
                                        //Array Domisili
                                        $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];
                                        foreach ($ar_domisili as $value_domisili) { ?>
                                        <option value="<?= $value_domisili ?>"><?= $value_domisili ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-2  ml-3 mt-3 col-form-label">Email</label>
                            <div class="col-6 mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-gg-circle"></i>
                                        </div>
                                    </div>
                                    <input id="email" name="email" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ml-2">
                            <div class="offset-2 col-4 mt-3">
                                <button name="submit" type="submit" class="btn btn-primary pl-4 pr-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </body>
                </html>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer">
                Ini adalah hasil praktikum 1
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
