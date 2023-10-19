<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>DATA ABSEN</title>
</head>

<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH DATA KARYAWAN
                    </div>
                    <div class="card-body">
                        <form action="simpan-siswa.php" method="POST">

                        <div class="form-group"></div>
                        <label for="NISN">NIK</label>
                        <input type="text" name="nik" placeholder="Masukan NIk" class="form-control">

                        <label for="NISN">nama lengkap</label>
                        <input type="text" name="nama_lengkap" placeholder="Masukan Nama lengkap" class="form-control">

                        <label for="NISN">Jabatan</label>
                        <input type="text" name="jabatan" placeholder="Masukan Jabatan" class="form-control">
                        </div>

                        
                        <button type="submit" class="btn btn-danger">SIMPAN</button>
                        <button type="reset" class="btn btn-primary">RESET</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>