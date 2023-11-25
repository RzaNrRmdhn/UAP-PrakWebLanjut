<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');</style>
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
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
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
            <img src="<?= base_url('/assets/img/lucas.jpg') ?>" class="w-10 md:w-16 rounded-full mx-auto"/>
              <h2
                class="font-medium text-xs md:text-sm text-center text-white">
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
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
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
                <span class="ml-2 text-sm tracking-wide truncate">Admins</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url('/admin/list_seller') ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Sellers</span>
              </a>
            </li>
            <li>
              <a href="<?= base_url('/admin/list_customer') ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Customers</span>
              </a>
            </li>
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center mt-2 h-8">
                <div class="text-sm font-light tracking-wide text-gray-300 uppercase">Tasks</div>
              </div>
            </li>
            <li>
              <a href="<?= base_url('/admin/payment_acc') ?>" class="relative flex flex-row items-center h-11 focus:outline-none bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Payment acc</span>
              </a>
            </li>
            <li>
              <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Grade</span>
              </a>
            </li>
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center mt-2 h-8">
                <div class="text-sm font-light tracking-wide text-gray-300 uppercase">Settings</div>
              </div>
            </li>
            <li>
              <a href="<?= base_url('/admin/admin_profile') ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-teal-700 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-teal-500 dark:hover:border-gray-800 pr-6">
                <span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
              </a>
            </li>
          </ul>
          <!-- <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">@2023 ThriftingWeb | All Right Reserved</p> -->
        </div>
      </div>
      <!-- ./Sidebar -->

      <div class="h-full ml-14 mt-14 mb-10 md:ml-64">


<!-- Bagian Konten untuk Payment Acc -->
<div class="flex justify-center items-center mt-20">
    <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-2xl">
        <h2 class="text-2xl font-semibold mb-4">Detail Pembayaran</h2>

<!-- Tombol untuk mengirimkan pembayaran yang diacc -->
<div class="mt-8 flex justify-end">
    <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md">Pilih Semua</button>
</div>

        <!-- Form untuk mengirimkan pembayaran yang diacc -->
        <form action="/proses-pembayaran" method="post">
            <!-- Kartu list untuk setiap pembayaran -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                
                <!-- Kartu Pembayaran 1 -->
                <div class="border p-4 rounded-md">
                    <h3 class="text-lg font-semibold mb-2">Pembayaran 1</h3>
                    <!-- Informasi Barang -->
                    <div class="mb-4">
                        <!-- Tambahkan input checkbox -->
                        <input type="checkbox" name="pembayaran[]" value="1" class=" float-right transform scale-150 origin-top-right">
                        <p class="text-gray-600"><strong>Nama Barang:</strong> Sepatu </p>
                        <p class="text-gray-600"><strong>Harga:</strong> Rp 150.000</p>
                        <p class="text-gray-600"><strong>Jumlah:</strong> 1</p>
                    </div>
                    <!-- Informasi Pembeli -->
                    <div>
                        <h4 class="text-md font-semibold mb-2">Informasi Pembeli</h4>
                        <p class="text-gray-600"><strong>Username:</strong> Michael </p>
                        <p class="text-gray-600"><strong>Alamat:</strong> Jl. Buman No. 1, Kota Bandar Lampung</p>
                        <p class="text-gray-600"><strong>No. Telepon:</strong> 0878 9878 7890</p>
                    </div>
                    <!-- Total Pembayaran -->
                     <div class="mt-4">
                        <p class="text-gray-600"><strong>Total Pembayaran:</strong> Rp 150.000</p>
                    </div>
                    </div>
   

                <!-- Kartu Pembayaran 2 -->
                <div class="border p-4 rounded-md">
                <h3 class="text-lg font-semibold mb-2">Pembayaran 2</h3>
                    <!-- Informasi Barang -->
                    <div class="mb-4">
                        <!-- Tambahkan input checkbox -->
                        <input type="checkbox" name="pembayaran[]" value="1" class=" float-right transform scale-150 origin-top-right">
                        <p class="text-gray-600"><strong>Nama Barang:</strong> Sepatu </p>
                        <p class="text-gray-600"><strong>Harga:</strong> Rp 150.000</p>
                        <p class="text-gray-600"><strong>Jumlah:</strong> 1</p>
                    </div>
                    <!-- Informasi Pembeli -->
                    <div>
                        <h4 class="text-md font-semibold mb-2">Informasi Pembeli</h4>
                        <p class="text-gray-600"><strong>Username:</strong> Susanti </p>
                        <p class="text-gray-600"><strong>Alamat:</strong> Jl. Persegi , Kota Metro</p>
                        <p class="text-gray-600"><strong>No. Telepon:</strong> 0856 4536 4325</p>
                    </div>
                    <!-- Total Pembayaran -->
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Total Pembayaran:</strong> Rp 200.000</p>
                    </div>
                </div>
              

                <!-- Kartu Pembayaran 3 -->
                <div class="border p-4 rounded-md">
                <h3 class="text-lg font-semibold mb-2">Pembayaran 3</h3>
                    <!-- Informasi Barang -->
                    <div class="mb-4">
                        <!-- Tambahkan input checkbox -->
                        <input type="checkbox" name="pembayaran[]" value="1" class=" float-right transform scale-150 origin-top-right">
                        <p class="text-gray-600"><strong>Nama Barang:</strong> Sepatu </p>
                        <p class="text-gray-600"><strong>Harga:</strong> Rp 150.000</p>
                        <p class="text-gray-600"><strong>Jumlah:</strong> 1</p>
                    </div>

                        <!-- <input type="checkbox" name="pembayaran[]" value="1" class="mr-2">
                        <p class="text-gray-600"><strong>Nama Barang:</strong> Sweater Rajut </p>
                        <p class="text-gray-600"><strong>Harga:</strong> Rp 150.000</p>
                        <p class="text-gray-600"><strong>Jumlah:</strong> 1</p>
                    </div> -->
                    <!-- Informasi Pembeli -->
                    <div>
                        <h4 class="text-md font-semibold mb-2">Informasi Pembeli</h4>
                        <p class="text-gray-600"><strong>Username:</strong> Tika </p>
                        <p class="text-gray-600"><strong>Alamat:</strong> Jl. Untung , Kota Bandar lampung</p>
                        <p class="text-gray-600"><strong>No. Telepon:</strong>0857 6654 4523</p>
                    </div>
                    <!-- Total Pembayaran -->
                    <div class="mt-4">
                        <p class="text-gray-600"><strong>Total Pembayaran:</strong> Rp 150.000</p>
                    </div>
                </div>
            </div>

            <!-- Tombol untuk mengirimkan pembayaran yang diacc -->
            <div class="mt-8">
                <button type="submit" class="bg-teal-500 text-white px-4 py-2 rounded-md">Terima Pembayaran Terpilih</button>
            </div>
        </form>
    </div>
</div>

    

</body>
</html>