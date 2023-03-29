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
            <h1> Ubah Data penyakit </h1>
        </div>
        <form action="" method="post">
            <?= validation_errors(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">nama_penyakit</label>
                    <input type="text" name="id_penyakit" class="form-control" value="<?php echo $penyakit->id_penyakit ?>" hidden>
                    <input type="text" name="nama_penyakit" class="form-control" value="<?php echo $penyakit->nama_penyakit ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $penyakit->keterangan ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">status</label>
                    <input type="text" name="status" class="form-control" value="<?php echo $penyakit->status ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">waktu</label>
                    <input type="text" name="waktu" class="form-control" value="<?php echo $penyakit->waktu ?>">
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