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
                <h3 class="card-title">Praktikum 2</h3>

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
                $nama = $_GET["nama"];
                $matkul = $_GET["matkul"];
                $nilai_uts = $_GET["nilai_uts"];
                $nilai_uas = $_GET["nilai_uas"];
                $nilai_tugas = $_GET["nilai_tugas"];

                $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

                if ($total_nilai >= 85) {
                    $grade = "A";
                } 
                elseif ($total_nilai >= 70){
                    $grade = "B";
                } 
                elseif ($total_nilai >= 56){
                    $grade = "C";
                } 
                elseif ($total_nilai >= 36){
                    $grade = "D";
                } 
                else {
                    $grade = "E";
                }
                

                switch ($grade) {
                    case 'A':
                        $predikat = "Sangat Memuaskan";
                        break;

                    case 'B':
                        $predikat = "Memuaskan";
                        break;
                    
                    case 'C':
                        $predikat = "Cukup";
                        break;
                    
                    case 'D':
                        $predikat = "Kurang";
                        break;

                    case 'E':
                        $predikat = "Sangat Kurang";
                        break;

                    default:
                        $predikat = "Tidak Ada";
                        break;
                }

                if ($total_nilai >= 70){
                    $status = "LULUS";
                }
                else {
                    $status = "Tidak LULUS";
                }

                echo "Nama : $nama" , "<br/>";
                echo "Mata Kuliah : $matkul" , "<br/>"; 
                echo "Nilai UTS : $nilai_uts" , "<br/>";
                echo "Nilai UAS : $nilai_uas" , "<br/>";
                echo "Nilai Tugas : $nilai_tugas" , "<br/>";
                echo "Total Nilai : $total_nilai" , "<br/>";
                echo "Grade : $grade", "<br/>";
                echo "Predikat : $predikat", "<br/>";
                echo "Status : $status";
                ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Ini adalah hasil praktikum 2
              </div>
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
