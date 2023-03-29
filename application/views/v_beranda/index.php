<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>BiSyifa</title>
</head>

  <?php $this->load->view('layout_user/header'); ?>

  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-10 py-24 md:flex-row flex-col items-center">
      <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        <img class="object-cover object-center rounded" alt="banner" src="asset/banner.png">
      </div>
      <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Kesehatan Kamu adalah Tujuan Kami
        </h1>
        <p class="mb-8 leading-relaxed text-xl">Kami bekerja untuk kesehatan tubuh dan diri kamu. Segera daftarkan dirimu untuk segala gejala penyakitmu di iSyifa.</p>
        <div class="flex justify-center">
          <a class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg" href="<?= base_url('daftar/baru') ?>">Pasien Baru</a>
          <a class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" href="<?= base_url('daftar/lama') ?>">Pasien Lama</a>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-10 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Informasi Lainnya
          </h1>
          <div class="h-1 w-20 bg-purple-500 rounded"></div>
        </div>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/vaccine.jpg" alt="vaccine">
            <h3 class="tracking-widest text-purple-500 text-xs font-medium title-font">SUBTITLE</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ikuti Program Vaksin gratis di iSyifa</h2>
            <p class="leading-relaxed text-base">Konsultasi lebih dalam dengan dokter konsulten terbaik</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/vaccine.jpg" alt="vaccine">
            <h3 class="tracking-widest text-purple-500 text-xs font-medium title-font">SUBTITLE</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ikuti Program Vaksin gratis di iSyifa</h2>
            <p class="leading-relaxed text-base">Konsultasi lebih dalam dengan dokter konsulten terbaik</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/vaccine.jpg" alt="vaccine">
            <h3 class="tracking-widest text-purple-500 text-xs font-medium title-font">SUBTITLE</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ikuti Program Vaksin gratis di iSyifa</h2>
            <p class="leading-relaxed text-base">Konsultasi lebih dalam dengan dokter konsulten terbaik</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/vaccine.jpg" alt="vaccine">
            <h3 class="tracking-widest text-purple-500 text-xs font-medium title-font">SUBTITLE</h3>
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Ikuti Program Vaksin gratis di iSyifa</h2>
            <p class="leading-relaxed text-base">Konsultasi lebih dalam dengan dokter konsulten terbaik</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <section class="text-gray-600 body-font bg-gray-100">
    <div class="container px-5 py-24 mx-auto">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-10 text-gray-900 text-center">Ketersediaan Kamar</h1>
      <div class="flex flex-wrap text-center">
        <?php foreach ($kamar as $kmr): ?>
            <div class="p-4 sm:w-1/3 w-1/3">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-purple-500 mb-2"><?php echo $kmr['total_kamar']; ?></h2>
              <p class="leading-relaxed text-purple-500 text-xl">Total Kamar</p>
            </div>
            <div class="p-4 sm:w-1/3 w-1/3">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-purple-500 mb-2"><?php echo $kmr['kamar_tersedia'] ?></h2>
              <p class="leading-relaxed text-purple-500 text-xl">Tersedia</p>
            </div>
            <div class="p-4 sm:w-1/3 w-1/3">
              <h2 class="title-font font-medium sm:text-4xl text-3xl text-purple-500 mb-2"><?php echo $kmr['kamar_terpakai'] ?></h2>
              <p class="leading-relaxed text-purple-500 text-xl">Terpakai</p>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-10 py-24 mx-auto">
      <div class="flex flex-wrap w-full mb-20">
        <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Layanan Dokter
          </h1>
          <div class="h-1 w-20 bg-purple-500 rounded"></div>
        </div>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/doctor.jpg" alt="doctor">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">dr. Juliansyih Safitri Safri, SP.THT</h2>
            <p class="leading-relaxed text-base mb-3">Spesialis THT</p>
            <p class="leading-relaxed text-base font-semibold text-green-500">Available</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/doctor.jpg" alt="doctor">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">dr. Juliansyih Safitri Safri, SP.THT</h2>
            <p class="leading-relaxed text-base mb-3">Spesialis THT</p>
            <p class="leading-relaxed text-base font-semibold text-green-500">Available</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/doctor.jpg" alt="doctor">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">dr. Juliansyih Safitri Safri, SP.THT</h2>
            <p class="leading-relaxed text-base mb-3">Spesialis THT</p>
            <p class="leading-relaxed text-base font-semibold text-green-500">Available</p>
          </div>
        </div>
        <div class="xl:w-1/4 md:w-1/2 p-4">
          <div class="bg-gray-100 p-6 rounded-lg">
            <img class="h-40 rounded w-full object-cover object-center mb-6" src="asset/doctor.jpg" alt="doctor">
            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">dr. Juliansyih Safitri Safri, SP.THT</h2>
            <p class="leading-relaxed text-base mb-3">Spesialis THT</p>
            <p class="leading-relaxed text-base font-semibold text-green-500">Available</p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <?php $this->load->view('layout_user/footer') ?>

</body>

</html>