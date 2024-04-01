<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Formulir Registrasi</title>
</head>
<body>
  <form method="POST" action="#">
    <div class="form-group row">
      <label for="nim" class="col-4 col-form-label">NIM</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adn"></i>
            </div>
          </div> 
          <input id="nim" name="nim" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-book"></i>
            </div>
          </div> 
          <input id="nama" name="nama" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Jenis Kelamin</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
          <label for="jenis_kelamin_0" class="custom-control-label">Laki-Laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Perempuan"> 
          <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="skill" class="col-4 col-form-label">Program Studi</label> 
      <div class="col-8">
        <select id="skill" name="program_studi" class="custom-select" required>
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Bisnis Digital">Bisnis Digital</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Skill Web & Programming</label> 
      <div class="col-8">
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_0" type="checkbox" class="custom-control-input" value="HTML"> 
          <label for="Skill_0" class="custom-control-label">HTML</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_1" type="checkbox" class="custom-control-input" value="CSS"> 
          <label for="Skill_1" class="custom-control-label">CSS</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
          <label for="Skill_2" class="custom-control-label">JavaScript</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap"> 
          <label for="Skill_3" class="custom-control-label">RWD Bootstrap</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_4" type="checkbox" class="custom-control-input" value="PHP"> 
          <label for="Skill_4" class="custom-control-label">PHP</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_5" type="checkbox" class="custom-control-input" value="Python"> 
          <label for="Skill_5" class="custom-control-label">Python</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="Skill[]" id="Skill_6" type="checkbox" class="custom-control-input" value="Java"> 
          <label for="Skill_6" class="custom-control-label">Java</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="Domisili" class="col-4 col-form-label">Tempat Domisili</label> 
      <div class="col-8">
        <select id="Domisili" name="domisili" class="custom-select" required>
          <option value="Jakarta">Jakarta</option>
          <option value="Depok">Depok</option>
          <option value="Bogor">Bogor</option>
          <option value="Tangerang">Tangerang</option>
          <option value="Bekasi">Bekasi</option>
          <option value="Lainnya">Lainnya</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">Email</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-gg-circle"></i>
            </div>
          </div> 
          <input id="email" name="email" type="email" class="form-control" required>
        </div>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nim = htmlspecialchars($_POST["nim"]);
      $nama = htmlspecialchars($_POST["nama"]);
      $jenis_kelamin = isset($_POST["jenis_kelamin"]) ? htmlspecialchars($_POST["jenis_kelamin"]) : "";
      $program_studi = isset($_POST["program_studi"]) ? htmlspecialchars($_POST["program_studi"]) : "";
      $skill = isset($_POST["Skill"]) ? $_POST["Skill"] : [];
      $domisili = htmlspecialchars($_POST["domisili"]);
      $email = htmlspecialchars($_POST["email"]);

      // Hitung skor skill
      $skor_skill = skor_skill($skill);

      // Tentukan kategori skill
      $kategori_skill = kategori_skill($skor_skill);

      // Output hasil registrasi
      echo "<h2>Hasil Registrasi:</h2>";
      echo "<p><strong>NIM:</strong> $nim</p>";
      echo "<p><strong>Nama:</strong> $nama</p>";
      echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
      echo "<p><strong>Program Studi:</strong> $program_studi</p>";
      echo "<p><strong>Skill:</strong> " . implode(", ", $skill) . "</p>";
      echo "<p><strong>Skor Skill:</strong> $skor_skill</p>";
      echo "<p><strong>Kategori Skill:</strong> $kategori_skill</p>";
      echo "<p><strong>Domisili:</strong> $domisili</p>";
      echo "<p><strong>Email:</strong> $email</p>";
  }

  function skor_skill($selected_skills) {
      $skills = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
      $skor = 0;
      foreach ($selected_skills as $skill) {
          $skor += $skills[$skill];
      }
      return $skor;
  }

  function kategori_skill($skor) {
      if ($skor == 0) {
          return "Tidak Memadai";
      } elseif ($skor <= 40) {
          return "Kurang";
      } elseif ($skor <= 60) {
          return "Cukup";
      } elseif ($skor <= 100) {
          return "Baik";
      } elseif ($skor <= 150) {
          return "Sangat Baik";
      } else {
          return "Undefined";
      }
  }
  ?>
</body>
</html>