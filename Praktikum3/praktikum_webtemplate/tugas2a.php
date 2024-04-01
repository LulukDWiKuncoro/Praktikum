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
              <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nim = $_POST["nim"];
                    $nama = $_POST["nama"];
                    $jk = $_POST["jk"];
                    $skill_web = isset($_POST["skil"]) ? $_POST["skil"] : [];
                    $index_prodi = $_POST['prodi'];
                    $value_domisili = $_POST['domisili'];
                    $email = $_POST["email"];

                    //Array Skill
                    $skor_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];

                    function hitungTotalSkor($skill_web, $skor_skill){
                        $total_skor = 0;
                        // Hitung skor skill web
                        foreach ($skill_web as $skill) {
                            $total_skor += $skor_skill[$skill];
                        }
                        return $total_skor;
                    }

                    // Hitung total skor
                    $total_skor = hitungTotalSkor($skill_web, $skor_skill);
                    
                    function hitungKategoriSkill($total_skor){
                        // Tentukan Kategori Skill
                        if ($total_skor <= 0) {
                        $kategori_skill = "Tidak Memadai";
                        } elseif ($total_skor <= 40) {
                            $kategori_skill = "Kurang";
                        } elseif ($total_skor <= 60) {
                            $kategori_skill = "Cukup";
                        } elseif ($total_skor <= 100) {
                            $kategori_skill = "Baik";
                        } else {
                            $kategori_skill = "Sangat Baik";
                        }
                        return $kategori_skill;
                    }
                    
                    $kategori_skill = hitungKategoriSkill($total_skor);
                    
                    // Tampilkan hasil
                    echo "<h2>Hasil Registrasi:</h2>";
                    echo "NIM : $nim<br>";
                    echo "Nama : $nama<br>";
                    echo "Jenis Kelamin : $jk<br>";
                    echo "Program Studi : $index_prodi<br>";
                    echo "Skill : " . implode(", ", $skill_web) . "<br>";
                    echo "Total Skor : $total_skor<br>";
                    echo "Kategori Skill : $kategori_skill<br>";
                    echo "Tempat Domisili : $value_domisili<br>";
                    echo "Email : $email<br>";
                }
                    
                ?>
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
