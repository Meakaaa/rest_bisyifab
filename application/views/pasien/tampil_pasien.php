<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="application/assets/pasieno.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="s//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    
</head>
<body>
  <div class="flex justify-center mt-2 mx-5">
                <div>    
                    <h1 class="mr-[350px] text-4xl font-semibold">Data pasien</h1>
                </div>

                <div class="text-1xl space-x-5 text-white font-semibold">
                    <a href="<?php echo site_url('pasien/simpan')?>">
                    <p class=" py-1 pl-4 pr-4 rounded-md bg-red-500 hover:bg-yellow-400  focus:outline-none focus:ring ">Tambah Data</p>
                    </a>
                </div>
        </div>

        <div class="container-2xl mx-5 mt-5">
            <center>
                <table id="myTable" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="">NO Pasien</th>
                            <th class="">Nama Pasien</th>
                            <th class="">Tanggal Lahir</th>
                            <th class="">Umur</th>
                            <th class="">Jenis Kelamin</th>
                            <th class="">Alamat</th>
                            <th class="">NO Telepon</th>
                            <th class="">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($pasien as $l):  ?>
                        <tr>
                            <td class=""><?php echo $l->no_pasien ?></td>
                            <td class=""><?php echo $l->nama_pasien ?></td>
                            <td class=""><?php echo $l->tanggal_lahir ?></td>
                            <td class=""><?php echo $l->umur?></td>
                            <td class=""><?php echo $l->jk ?></td>
                            <td class=""><?php echo $l->alamat ?></td>
                            <td class=""><?php echo $l->no_telepon ?></td>
                            <td class="">
                                <a href="<?php echo site_url('pasien/ubah/' . $l->no_pasien) ?>">Ubah</a>
                                |
                                <a href="<?php echo site_url('pasien/hapus/' . $l->no_pasien) ?>">Hapus</a>
                            </td>
                        </tr> 
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </center>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable(
                {
                    paging: false,
                    ordering: false,
                    info: false,
                }
            );
        } );
    </script>

</body>
</html>
