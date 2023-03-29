<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pasien Baru</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
</head>

<body>
  <div class="card mx-10 my-10">
    <div class="card-header bg-purple-500 text-white">
      <h1>Masukan Tujuan Pasien</h1>
    </div>

    <div class="card-body">

      <div class="mb-3">
        <label for="" class="form-label">NIK Pasien</label>
        <input type="number" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan NIK">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Kontak Pasien</label>
        <input type="text" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Kontak">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Metode Pembayaran</label>
        <input type="text" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Metode Pembayaran">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Poliklinik Tujuan</label>
        <input type="text" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Poliklinik Tujuan">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Gedung Antrian</label>
        <input type="text" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Gedung Antrian">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Tanggal Kunjungan</label>
        <input type="date" name="pcs_lego" class="form-control" id="exampleFormControlInput1" placeholder="Pilih Tanggal Kunjungan">
      </div>

      <div class="mb-3">
        <input type="submit" value="Lanjut" class="btn bg-purple-500 text-white hover:bg-purple-600 py-1 px-4">
      </div>
    </div>
    </form>
  </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
  integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>