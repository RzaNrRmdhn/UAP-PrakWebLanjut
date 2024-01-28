<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
  </style>
  <title>Dashboard Admin</title>
</head>

<body>
  <style>
    /* Custom style */
    .header-right {
      width: calc(100% - 3.5rem);
    }

    .sidebar:hover {
      width: 16rem;
    }

    @media only screen and (min-width: 768px) {
      .header-right {
        width: calc(100% - 16rem);
      }
    }
  </style>
  <div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
      <!-- Header -->
      <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
        <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-teal-500 dark:bg-gray-800 border-none">
          <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
          <span class="hidden md:block">ADMIN</span>
        </div>
        <div class="flex justify-end items-center h-14 bg-teal-500 dark:bg-gray-800 header-right">
          <ul class="flex items-center">
            <li>
              <a href="#" class="flex items-center mr-10 hover:text-teal-100">
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                </span>
                Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- ./Header -->

      <!-- Sidebar -->
      <div class="fixed flex flex-col left-0 w-14 hover:w-64 md:w-64 bg-teal-800 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <h1 class="hidden mt-2 mb-3 md:block font-bold text-sm md:text-xl text-center">
              ThriftingWeb<span class="text-teal-600">.</span>
            </h1>
            <div>
              <img src="<?= base_url('/assets/img/lucas.jpg') ?>" class="w-10 md:w-16 rounded-full mx-auto" />
              <h2 class="font-medium text-xs md:text-sm text-center text-white">
                Lucas
              </h2>
              <p class="text-xs text-white text-center">Admin ThriftingWeb</p>
            </div>
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8 mt-5">
                <div class="text-sm font-light tracking-wide text-gray-300 uppercase">Main</div>
              </div>
            </li>
            <li>
              <a href="<?= base_url('/admin/dashboard') ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url('/admin/list_admin') ?>" class="relative flex flex-row items-center h-11 focus:outline-none bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Account</span>
              </a>
            </li>
            <!-- ./Sidebar -->

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
              <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-24">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                  <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                      <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-blueGray-700">Transaksi</h3>
                      </div>
                      <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <button class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                      </div>
                    </div>
                  </div>

                  <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                      <thead>
                        <tr>
                          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Nama Barang
                          </th>
                          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Total
                          </th>
                          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Status
                          </th>
                          <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Action
                          </th>
                        </tr>
                      </thead>

                      <?php
                      foreach ($Admin as $adminn) {
                      ?>
                        <tbody>
                          <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">

                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">

                            </td>
                            <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                            </td>
                          </tr>
                        </tbody>
                      <?php
                      }
                      ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <!-- ./Admin Table -->
</body>

</html>