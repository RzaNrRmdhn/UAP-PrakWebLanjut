<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
  </style>
</head>

<body>

  <!-- Sidebar -->
  <div class="fixed flex flex-col left-0 w-14 hover:w-64 md:w-64 bg-teal-800 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
      <ul class="flex flex-col py-4 space-y-1">
        <h1 class="hidden mt-2 mb-3 md:block font-bold text-sm md:text-xl text-center">
          ThriftingWeb<span class="text-teal-600">.</span>
        </h1>
        <div>
          <img src="<?= base_url('/assets/eunwoo.jpg') ?>" class="w-10 md:w-16 rounded-full mx-auto" />
          <h2 class="font-medium text-xs md:text-sm text-center text-white">
            Cha Eunwoo
          </h2>
          <p class="text-xs text-white text-center">Customer ThriftingWeb</p>
        </div>
        <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
          <span class="inline-flex justify-center items-center ml-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </span>
          <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
        </a>
        </li>
        <li>
          <a href="/seller/signup" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Register Penjual</span>
          </a>
        </li>
        <li>
          <a href="" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
              </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
          </a>
        </li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">History Pembelian</span>
          </a>
        </li>
        <li>
        <li>
          <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
            <span class="inline-flex justify-center items-center ml-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
            <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
          </a>
        </li>
        <li>

    </div>
  </div>
  <!-- ./Sidebar -->

  <!-- admin profile -->
  <div class="h-full ml-14  mb-10 md:ml-64">
    <div class="h-full bg-gray-200 p-8">
      <div class="bg-white rounded-lg shadow-xl pb-8">
        <div class="w-full h-[200px]">
          <img class="w-full h-full rounded-tl-lg rounded-tr-lg bg-gradient-to-b from-teal-800 to-teal-400">
        </div>
        <div class="flex flex-col items-center -mt-20">
          <img src="<?= base_url('/assets/eunwoo.jpg') ?>" class="w-40 border-4 border-white rounded-full">
          <div class="flex items-center space-x-2 mt-2">
            <p class="text-2xl">Eunwoo</p>
          </div>
          <p class="text-gray-700">My Profile</p>
        </div>
        <div class="flex flex flex-col items-center lg:items-end justify-center px-8 mt-2">
          <div class="flex items-center space-x-2 mt-2">
            <a href="" type="button" class="flex items-center bg-teal-500 hover:bg-teal-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
              </svg>
              <span>Edit</span>
            </a>
          </div>
        </div>
      </div>
      <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
        <div class="h-full w-full flex flex-col">
          <div class="flex-1 bg-white rounded-lg shadow-xl p-8" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h4 class="text-xl text-gray-900 font-bold">Personal Info</h4>
            <ul class="mt-2 text-gray-700">
              <li class="flex border-y py-2">
                <span class="font-bold w-24">Name:</span>
                <span class="text-gray-700">Cha Eunwoo</span>
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold w-24">Email</span>
                <span class="text-gray-700">chaeunwoo@gmail.com</span>
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold w-24">Alamat</span>
                <span class="text-gray-700">Buman II</span>
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold w-24">No. Telepon</span>
                <span class="text-gray-700">089577899654</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</body>

</html>