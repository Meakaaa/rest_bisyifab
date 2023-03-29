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
            <h1>Tambah Data page</h1>
        </div>

        <form action="<?= base_url('page/simpan'); ?>" method="POST">
        
        <div class="card-body">

        <div class="mb-3">
            <label for="" class="form-label">id_parent</label>
            <input type="text" name="id_parent" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">id_user</label></label>
            <textarea class="form-control" name="id_user" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">title</label>
            <textarea class="form-control" name="title" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">content</label>
            <input type="text" name="content" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">url</label></label>
            <textarea class="form-control" name="url" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="" class="form-label">tgl_create</label>
            <input type="text" name="tgl_create" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>

        <div class="mb-3">
            <label for="" \ class="form-label">tgl_update</label></label>
            <textarea class="form-control" name="tgl_update" id="exampleFormControlTextarea1" rows="3"></textarea>
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