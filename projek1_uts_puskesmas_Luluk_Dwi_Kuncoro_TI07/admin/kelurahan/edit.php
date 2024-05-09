<?php
require_once 'header.php';
require_once 'sidebar.php';

require '../dbkoneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query untuk mengambil data unit kerja berdasarkan id
    $sql = "SELECT * FROM kelurahan WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_id = $_POST['id'];
    $_nama = $_POST['nama'];
    $_kec_id = $_POST['kec_id'];

    // Query SQL untuk update data unit kerja berdasarkan id
    $sql = "UPDATE kelurahan SET nama = ?, kec_id = ? WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_nama, $_kec_id, $_id]);

    echo "<script>window.location.href = 'index.php';</script>";
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Kelurahan</h1>
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
                            <form action="edit.php?id=<?= $row['id'] ?>" method="POST">
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kec_id" class="col-4 col-form-label">Kecamatan ID</label>
                                    <div class="col-8">
                                        <input id="kec_id" name="kec_id" type="text" class="form-control" value="<?= $row['kec_id'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
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
