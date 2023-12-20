<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- component -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <!-- Navbar -->
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <img src="<?php echo base_url('assets/logo.png')?>" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-bold sm:text-2xl text-black whitespace-nowrap dark:text-white">Thrihfting<span class="text-teal-700 italic">WEB</span></span>
                </div>
                <!-- Search Bar -->
                <div class="flex items-center">
                    <form class="flex items-center">   
                        <label for="voice-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z"/>
                                </svg>
                            </div>
                            <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500" placeholder="Search..." required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z"/>
                                </svg>
                            </button>
                        </div>
                        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-gradient-to-b from-teal-700 to-teal-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            Search
                        </button>
                    </form>

                    <!-- Profiles -->
                    <div class="flex items-center">
                        <div class="flex items-center ml-3">
                            <div class="flex items-center">
                                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                                </button>
                                <p class="text-sm text-black pl-3 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                                </li>
                                <li>
                                
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-8 transition-transform -translate-x-full sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="sidebar min-h-screen w-[3.35rem] overflow-hidden border-r bg-white hover:w-56 hover:shadow-lg">
            <div class="flex h-screen flex-col justify-between pt-2 pb-6">
            <div>
                <ul class="mt-6 space-y-2 tracking-wide">
                <li class="min-w-max">
                    <a href="<?php echo base_url('customer/home')?>" aria-label="dashboard" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-700 to-teal-300 px-4 py-3 text-white">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <span class="-mr-1 font-medium">Dashboard</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <div x-data="{ open: false }">
                    <button @click="open = !open" class="bg group w-full flex justify-between items-center py-3 space-x-4 px-4 text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined">
                                sell
                            </span>
                            <span class="mx-4">Categories</span>
                        </span>

                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </button>
                    <div x-show="open" class="bg-gray-100">
                        <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="#">
                            <span class="material-symbols-outlined">
                                apparel
                            </span>
                            Clothes
                        </a>
                        <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="<?php echo base_url('customer/category/shoes')?>">
                            <span class="material-symbols-outlined">
                                footprint
                            </span>
                            Shoes
                        </a>
                    </div>
                </div>

                </li>
                <li class="min-w-max">
                    <div x-data="{ open: false }">
                    <button @click="open = !open" class="bg group w-full flex justify-between items-center py-3 space-x-4 px-4 text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white">
                        <span class="flex items-center">
                            <span class="material-symbols-outlined">
                                grade
                            </span>
                            <span class="mx-4">Grade</span>
                        </span>

                        <span>
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"></path>
                                <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </button>
                    <div x-show="open" class="bg-gray-100">
                        <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="<?php echo base_url('customer/grade') ?>">
                            <span class="material-symbols-outlined">
                                grade
                            </span>
                            Grade A
                        </a>
                        <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="#">
                            <span class="material-symbols-outlined">
                                grade
                            </span>
                            Grade B
                        </a>
                    </div>
                </div>

                </li>
                <li class="min-w-max">
                    <a href="#" class="bg group flex items-center space-x-4 px-4 py-3 text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white">
                    <span class="material-symbols-outlined">
                        shopping_cart
                    </span>
                    <span class="group-hover:text-white">Cart</span>
                    </a>
                </li>
                <li class="min-w-max">
                    <a href="#" class="bg group flex items-center space-x-4 px-4 py-3 text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white">
                    <span class="material-symbols-outlined">
                        receipt_long
                    </span>
                    <span class="group-hover:text-white">Transaction</span>
                    </a>
                </li>
                </ul>
            </div>
            <!-- <div class="w-max -mb-1">
                <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                <span class="group-hover:text-gray-700">Settings</span>
                </a>
            </div> -->
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="p-4 sm:ml-16">
        <div class="p-4 mt-14">
        <style>@import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);</style>
        <div class="w-full bg-gradient-to-r from-teal-700 to-teal-300 flex items-center p-5 lg:p-20 overflow-hidden relative">
            <div class="w-full max-w-5xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
                <div class="md:flex items-center -mx-10">
                    <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                        <div class="relative">
                            <img src="<?= base_url('assets/img/produk/1.jpg') ?>" class="w-full relative z-10" alt="">
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-10">
                        <div class="mb-10">
                            <h1 class="font-bold uppercase text-2xl mb-5">Striped Cardigan</h1>
                            <p class="text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Eos, voluptatum dolorum! Laborum blanditiis consequatur, voluptates, sint enim fugiat saepe, dolor fugit, magnam explicabo eaque quas id quo porro dolorum facilis... <a href="#" class="opacity-50 text-gray-900 hover:opacity-100 inline-block text-xs leading-none border-b border-gray-900">MORE <i class="mdi mdi-arrow-right"></i></a></p>
                        </div>
                        <div>
                            <div class="inline-block align-bottom mr-5 mb-2">
                                <span class="text-2xl leading-none align-baseline">Rp</span>
                                <span class="font-bold text-2xl leading-none align-baseline">75.000</span>
                            </div>
                            <div class="flex items-center mb-2">
                                <svg class="w-8 h-8 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="text-m font-semibold"> A</span>
                            </div>
                            <div class="align-bottom">
                                <button class="bg-teal-300 opacity-75 hover:opacity-100 text-teal-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>