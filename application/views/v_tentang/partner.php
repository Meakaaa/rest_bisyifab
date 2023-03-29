<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>iSyifa</title>
</head>

  <?php $this->load->view('layout_user/header'); ?>

  <?php foreach ($partner as $prn): ?>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto flex flex-wrap">
      <div class="lg:w-full mx-auto">
        <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative mb-4">
          <img alt="rumah sakit" class="w-full object-cover h-full opacity-70 object-center block absolute inset-0 rounded-2xl" src="<?= base_url('asset/hospital.jpg') ?>">
          <div class="text-center relative z-10 w-full">
            <h2 class="text-4xl lg:text-8xl text-black uppercase font-bold title-font"><?php echo $prn['title'] ?></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endforeach; ?>

<div class="container my-12 px-6 mx-auto">
  <section class="mb-20 text-gray-800 text-center">
    <div class="grid lg:grid-cols-3 gap-6 xl:gap-x-12">
      
      <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="<?= base_url('') ?>">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
    </div>

    <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
    </div>
      <div class="mb-10">
        <div class="relative block border border-gray-500 rounded-lg shadow-lg">
          <div class="flex">
            <div
              class="relative overflow-hidden bg-no-repeat bg-cover shadow-lg rounded-lg mx-4 my-4"
              data-mdb-ripple="true" data-mdb-ripple-color="light">
              <img src="<?= base_url('asset/bpjs.jpg') ?>" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                  style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>
        </div>
    </div> -->



    </div>
  </section>
</div>

  <?php $this->load->view('layout_user/footer') ?>

</body>

</html>