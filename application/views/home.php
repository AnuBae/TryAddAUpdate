<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Try Add a Update</title>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5">Data Karyawan</h2>

        <table class="table text-center mb-5">
            <thead>
                <tr>
                    <th>Id Karyawan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Login Terakhir</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($karyawan as $dk) : ?>
                    <tr>
                        <th><?= $dk['id']; ?></th>
                        <th class="text-start"><?= $dk['nama']; ?></th>
                        <th><?= $dk['alamat']; ?></th>
                        <th><?= $dk['email']; ?></th>
                        <th><?= $dk['time']; ?></th>
                        <th>
                            <a href="<?= base_url(); ?>Home/TambahData/<?= $dk['id']; ?>" class="btn btn-warning">Login</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h2 class="text-center mb-5">Data Seluruh LogActivity</h2>
        <!-- 
        <div class="btn-group mb-5">
            <a href="<?= base_url(); ?>Home/TambahData" class="btn btn-primary" aria-current="page">Tambah data Salary</a>
        </div> -->

        <table class="table text-center mb-5">
            <thead>
                <tr>
                    <th>Id Karyawan</th>
                    <th>Nama</th>
                    <th>Waktu Login</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($log as $lg) : ?>
                    <tr>
                        <th><?= $lg['id_karyawan']; ?></th>
                        <th><?= $lg['nama']; ?></th>
                        <th><?= $lg['time']; ?></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>