<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

// Ambil data pasien
$sqlPasien = "SELECT id, nama FROM pasien";
$stmtPasien = $dbh->query($sqlPasien);

// Ambil data dokter
$sqlDokter = "SELECT id, nama FROM dokter";
$stmtDokter = $dbh->query($sqlDokter);

if (isset($_POST['submit'])) {
    $_tanggal = $_POST['tanggal'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];
    $_tensi = $_POST['tensi'];
    $_keterangan = $_POST['keterangan'];
    $_pasien_id = $_POST['pasien_id'];
    $_dokter_id = $_POST['dokter_id'];

    // Query SQL untuk menambahkan data pasien baru
    $sql = "INSERT INTO pasien (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_tanggal, $_berat, $_tinggi, $_tensi, $_keterangan, $_pasien_id, $_dokter_id]);

    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Periksa</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="add.php" method="POST">
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="berat" class="col-4 col-form-label">Berat</label>
                                    <div class="col-8">
                                        <input id="berat" name="berat" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tinggi" class="col-4 col-form-label">Tinggi</label>
                                    <div class="col-8">
                                        <input id="tinggi" name="tinggi" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tensi" class="col-4 col-form-label">Tensi</label>
                                    <div class="col-8">
                                        <input id="tensi" name="tensi" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
                                    <div class="col-8">
                                        <input id="keterangan" name="keterangan" type="text" class="form-control">
                                    </div>
                                </div>
                                <!-- Dropdown Pasien -->
                                <div class="form-group row">
                                    <label for="pasien_id" class="col-4 col-form-label">Pasien</label>
                                    <div class="col-8">
                                        <select id="pasien_id" name="pasien_id" class="custom-select">
                                            <?php
                                            foreach ($stmtPasien as $rowPasien) {
                                                echo "<option value='" . $rowPasien['id'] . "'>" . $rowPasien['nama'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Dropdown Dokter -->
                                <div class="form-group row">
                                    <label for="dokter_id" class="col-4 col-form-label">Dokter</label>
                                    <div class="col-8">
                                        <select id="dokter_id" name="dokter_id" class="custom-select">
                                            <?php
                                            foreach ($stmtDokter as $rowDokter) {
                                                echo "<option value='" . $rowDokter['id'] . "'>" . $rowDokter['nama'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once 'footer.php';
?>
