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
            <h1> Ubah Data page </h1>
        </div>
        <form action="" method="post">
            <?= validation_errors(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">id_parent</label>
                    <input type="text" name="id_page" class="form-control" value="<?php echo $page->id_page ?>" hidden>
                    <input type="text" name="id_parent" class="form-control" value="<?php echo $page->id_parent ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">id_user</label>
                    <input type="text" name="id_user" class="form-control" value="<?php echo $page->id_user ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $page->title ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">content</label>
                    <input type="text" name="content" class="form-control" value="<?php echo $page->content ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">url</label>
                    <input type="text" name="url" class="form-control" value="<?php echo $page->url ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">tgl_create</label>
                    <input type="text" name="tgl_create" class="form-control" value="<?php echo $page->tgl_create ?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">tgl_update</label>
                    <input type="text" name="tgl_update" class="form-control" value="<?php echo $page->tgl_update ?>">
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