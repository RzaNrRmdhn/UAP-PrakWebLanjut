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
    /* Compiled dark classes from Tailwind */
    .dark .dark\:divide-gray-700> :not([hidden])~ :not([hidden]) {
      border-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-50 {
      background-color: rgba(249, 250, 251);
    }

    .dark .dark\:bg-gray-100 {
      background-color: rgba(243, 244, 246);
    }

    .dark .dark\:bg-gray-600 {
      background-color: rgba(75, 85, 99);
    }

    .dark .dark\:bg-gray-700 {
      background-color: rgba(55, 65, 81);
    }

    .dark .dark\:bg-gray-800 {
      background-color: rgba(31, 41, 55);
    }

    .dark .dark\:bg-gray-900 {
      background-color: rgba(17, 24, 39);
    }

    .dark .dark\:bg-red-700 {
      background-color: rgba(185, 28, 28);
    }

    .dark .dark\:bg-green-700 {
      background-color: rgba(4, 120, 87);
    }

    .dark .dark\:hover\:bg-gray-200:hover {
      background-color: rgba(229, 231, 235);
    }

    .dark .dark\:hover\:bg-gray-600:hover {
      background-color: rgba(75, 85, 99);
    }

    .dark .dark\:hover\:bg-gray-700:hover {
      background-color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:bg-gray-900:hover {
      background-color: rgba(17, 24, 39);
    }

    .dark .dark\:border-gray-100 {
      border-color: rgba(243, 244, 246);
    }

    .dark .dark\:border-gray-400 {
      border-color: rgba(156, 163, 175);
    }

    .dark .dark\:border-gray-500 {
      border-color: rgba(107, 114, 128);
    }

    .dark .dark\:border-gray-600 {
      border-color: rgba(75, 85, 99);
    }

    .dark .dark\:border-gray-700 {
      border-color: rgba(55, 65, 81);
    }

    .dark .dark\:border-gray-900 {
      border-color: rgba(17, 24, 39);
    }

    .dark .dark\:hover\:border-gray-800:hover {
      border-color: rgba(31, 41, 55);
    }

    .dark .dark\:text-white {
      color: rgba(255, 255, 255);
    }

    .dark .dark\:text-gray-50 {
      color: rgba(249, 250, 251);
    }

    .dark .dark\:text-gray-100 {
      color: rgba(243, 244, 246);
    }

    .dark .dark\:text-gray-200 {
      color: rgba(229, 231, 235);
    }

    .dark .dark\:text-gray-400 {
      color: rgba(156, 163, 175);
    }

    .dark .dark\:text-gray-500 {
      color: rgba(107, 114, 128);
    }

    .dark .dark\:text-gray-700 {
      color: rgba(55, 65, 81);
    }

    .dark .dark\:text-gray-800 {
      color: rgba(31, 41, 55);
    }

    .dark .dark\:text-red-100 {
      color: rgba(254, 226, 226);
    }

    .dark .dark\:text-green-100 {
      color: rgba(209, 250, 229);
    }

    .dark .dark\:text-teal-400 {
      color: rgba(96, 165, 250);
    }

    .dark .group:hover .dark\:group-hover\:text-gray-500 {
      color: rgba(107, 114, 128);
    }

    .dark .group:focus .dark\:group-focus\:text-gray-700 {
      color: rgba(55, 65, 81);
    }

    .dark .dark\:hover\:text-gray-100:hover {
      color: rgba(243, 244, 246);
    }

    .dark .dark\:hover\:text-teal-500:hover {
      color: rgba(59, 130, 246);
    }

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
        <div class="flex justify-end items-center h-14 bg-teal-500 dark:bg-gray-800 header-right md:ml-64">
          <!-- <div class="w-full max-w-xl mr-4 p-2 ml-0">
            <span class="hidden md:block">ThriftingWeb.</span>
          </div> -->
          <ul class="flex items-center">
            <li>
              <button aria-hidden="true" @click="toggleTheme" class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-teal-200 hover:bg-teal-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                <svg x-show="isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <svg x-show="!isDark" width="24" height="24" class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
              </button>
            </li>
            <li>
              <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
            </li>
            <li>
              <form action="<?= url_to('logout') ?>" class="flex items-center mr-10 hover:text-teal-100">
                <?= csrf_field() ?>
                <span class="inline-flex mr-1">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                </span>
                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
              </form>
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
              <a href="<?= base_url('/admin/dashboard') ?>" class="relative flex flex-row items-center h-11 focus:outline-none bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url('/admin/list_admin') ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Account</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
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
                foreach ($pesanan as $pesanan) {
                ?>
                  <tbody>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        <?= $pesanan['nama_barang'] ?>
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        <?= $pesanan['Total'] ?>
                      </td>
                      <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <?= $pesanan['status'] ?>
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <span class="ml-3 hidden sm:block">
                          <form method="post" action="<?= base_url('/status/update/' . $pesanan['id']); ?>">
                            <Button type="submit" class=" inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                              <svg class="-ml-0.5 mr-1.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M2.695 14.763l-1.262 3.154a.5.5 0 00.65.65l3.155-1.262a4 4 0 001.343-.885L17.5 5.5a2.121 2.121 0 00-3-3L3.58 13.42a4 4 0 00-.885 1.343z" />
                              </svg>
                              Acc
                            </Button>
                          </form>
                        </span>
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

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
</body>

</html>