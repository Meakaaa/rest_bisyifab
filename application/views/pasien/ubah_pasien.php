<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Codeigniter</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/logoskatel.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="card mx-10 my-10 ">
        <div class="card-header bg-red-500 text-white">
            <h1> Ubah Data pasien </h1>
        </div>
        <form action="" method="post">
            <?= validation_errors(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">nama_pasien</label>
                    <input type="text" name="no_pasien" class="form-control" value="<?php echo $pasien->no_pasien ?>" hidden>
                    <input type="text" name="nama_pasien" class="form-control" value="<?php echo $pasien->nama_pasien ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">tanggal_lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $pasien->tanggal_lahir ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">umur</label>
                    <input type="text" name="umur" class="form-control" value="<?php echo $pasien->umur ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">jk</label>
                    <input type="text" name="jk" class="form-control" value="<?php echo $pasien->jk ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $pasien->alamat ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">no_telepon</label>
                    <input type="text" name="no_telepon" class="form-control" value="<?php echo $pasien->no_telepon ?>">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn bg-red-500 text-slate-100">
                </div>
        </form>
    </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>