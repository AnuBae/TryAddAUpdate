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

    <div class="container text-center">
        <h2 class="text-center mb-5">Tambah Data salary</h2>
        <p><?= $karyawan->id; ?></p>
        <p><?= $karyawan->nama; ?></p>

        <form action="post.php" method="post">
            <table class="table text-center mb-5">
                <tr>
                    <td><label for="number1">Id Karyawan: </label></td>
                    <td><input type="number" name="a" id="number1" value="<?= $karyawan->id; ?>" disabled></td>
                </tr>
                <tr>
                    <td><label for="number2">Nama: </label></td>
                    <td>
                        <p><?= $karyawan->nama; ?></p>
                    </td>
                </tr>
                <tr>
                    <td for="newSalary">Berikan Gaji sebesar:</td>
                    <td><input type="number" name="newSalary" id="newSalary"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="hitung"></td>
                </tr>
            </table>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>