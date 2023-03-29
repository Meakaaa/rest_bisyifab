<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="<?= base_url('application/assets/img/cilogo.png') ?>">
  <title>Register</title>
</head>

<body>
  <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url();">
    <div class="absolute bg-gradient-to-b from-[#537895] to-[#09203F] inset-0 z-0"></div>
    <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
      <div class="flex justify-center self-center  z-10">
        <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
          <div class="mb-4">
            <h3 class="font-semibold text-2xl text-gray-800">Register</h3>
            <p class="text-gray-500">Please create your account.</p>
          </div>
          <?= validation_errors(); ?>
          <form action="<?= base_url('user/daftar') ?>" method="post">
            <div class="space-y-5">
              <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">
                  Full Name
                </label>
                <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-orange-400" type="text" name="nama" placeholder="Enter your name">
              </div>
              <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">
                  Username
                </label>
                <input class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-orange-400" type="text" name="username" placeholder="Enter your username">
              </div>
              <div class="space-y-2">
                <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                  Password
                </label>
                <input class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-orange-400" type="password" name="password" placeholder="Enter your password">
              </div>
              <div>
                <button type="submit" class="w-full flex justify-center bg-orange-400  hover:bg-orange-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                  Register
                </button>
              </div>
          </form>
          <div>
            <p class="text-sm text-center text-gray-500 tracking-wide">Already have an account? <a href="<?php echo base_url('user/login') ?>">Login</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>