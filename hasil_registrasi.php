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