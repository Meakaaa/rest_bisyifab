<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="application/assets/legoo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lego</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
</head>
<body>
    <div class="card mx-10 my-10">
        <div class="card-header bg-red-500 text-white">
            <h1>Tambah Data rekapmedis</h1>
        </div>

        <form action="<?= base_url('rekapmedis/simpan'); ?>" method="POST">
        
        <div class="card-body">
        
        <div class="mb-3">
            <label for="" class="form-label">id_penyakit</label>
            <textarea class="form-control" name="id_penyakit" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">status</label></label>
            <textarea class="form-control" name="status" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">tanggal</label></label>
            <textarea class="form-control" name="tanggal" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">id_dokter</label></label>
            <textarea class="form-control" name="id_dokter" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">no_pasien</label></label>
            <textarea class="form-control" name="no_pasien" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn bg-red-500 text-slate-100">
        </div>
    </div>
</form>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>