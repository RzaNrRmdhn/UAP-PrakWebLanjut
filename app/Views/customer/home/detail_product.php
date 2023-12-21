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
                    <img src="<?php echo base_url('assets/logo.png') ?>" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-bold sm:text-2xl text-black whitespace-nowrap dark:text-white">Thrihfting<span class="text-teal-700 italic">WEB</span></span>
                </div>
                <!-- Search Bar -->
                <div class="flex items-center">
                    <form class="flex items-center">
                        <label for="voice-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                                </svg>
                            </div>
                            <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500" placeholder="Search..." required>
                            <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                                </svg>
                            </button>
                        </div>
                        <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-gradient-to-b from-teal-700 to-teal-300 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
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
                                        <form action="<?= url_to('logout') ?>">
                                            <?= csrf_field() ?>
                                            <button type="submit">Logout</button>
                                        </form>
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
                            <a href="<?php echo base_url('customer/home') ?>" aria-label="dashboard" class="relative flex items-center space-x-4 bg-gradient-to-r from-teal-700 to-teal-300 px-4 py-3 text-white">
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
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="<?php echo base_url('customer/category/shoes') ?>">
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
                                    <a class="py-2 px-16 block text-sm text-black hover:bg-gradient-to-r from-teal-700 to-teal-300 hover:text-white" href="<?php echo base_url('customer/grade/A') ?>">
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
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="p-4 sm:ml-16">
        <div class="p-4 mt-14">
            <!-- Color Background -->
            <div class="absolute inset-x-0 -top-40 -z-10 overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] bg-gradient-to-tr from-sky-700 to-teal-300 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"></div>
            </div>
            <!-- Grid Product -->
            <!-- component -->
            <form action="<?= base_url('/customer/buy') ?>" method="post" enctype="multipart/form-data">

                <div class=" md:flex items-start justify-center py-12 2xl:px-20 md:px-6 px-4">
                    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                    <div class="xl:w-2/6 lg:w-2/5 w-80 md:block hidden">
                        <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
                    </div>
                    <div class="md:hidden">
                        <img class="w-full" alt="image of a girl posing" src="https://i.ibb.co/QMdWfzX/component-image-one.png" />
                        <div class="flex items-center justify-between mt-3 space-x-4 md:space-x-0">
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/cYDrVGh/Rectangle-245.png" />
                            <img alt="image-tag-one" class="md:w-48 md:h-48 w-full" src="https://i.ibb.co/f17NXrW/Rectangle-244.png" />
                        </div>
                    </div>
                    <div class="xl:w-2/5 md:w-1/2 lg:ml-8 md:ml-6 md:mt-0 mt-6">
                        <div class="border-b border-gray-200 pb-6">
                            <p class="text-sm leading-none text-gray-600 dark:text-gray-300 ">Balenciaga Fall Collection</p>
                            <h1 class="lg:text-2xl text-xl font-semibold lg:leading-6 leading-7 text-gray-800 dark:text-white mt-2"><?= $barang['nama_barang'] ?></h1>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Colours</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 dark:text-gray-300">Smoke Blue with red accents</p>
                                <div class="w-6 h-6 bg-gradient-to-b from-gray-900 to-indigo-500 ml-3 mr-4 cursor-pointer"></div>
                                <svg class="cursor-pointer text-gray-300 dark:text-white" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="py-4 border-b border-gray-200 flex items-center justify-between">
                            <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Size</p>
                            <div class="flex items-center justify-center">
                                <p class="text-sm leading-none text-gray-600 dark:text-gray-300 mr-3">38.2</p>
                                <svg class="text-gray-300 dark:text-white cursor-pointer" width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5 5L1 9" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <input type="text" name="id" value="<?= $barang['id'] ?>" hidden>
                        <input type="text" name="harga" value="<?= $barang['harga_barang'] ?>" hidden>
                        <button type="submit" class="dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-base flex items-center justify-center leading-none text-white bg-gray-800 w-full py-4 hover:bg-gray-700 focus:outline-none">
                            <svg class="mr-3 text-white dark:text-gray-900" width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.02301 7.18999C7.48929 6.72386 7.80685 6.12992 7.93555 5.48329C8.06425 4.83666 7.9983 4.16638 7.74604 3.55724C7.49377 2.94809 7.06653 2.42744 6.51835 2.06112C5.97016 1.6948 5.32566 1.49928 4.66634 1.49928C4.00703 1.49928 3.36252 1.6948 2.81434 2.06112C2.26615 2.42744 1.83891 2.94809 1.58665 3.55724C1.33439 4.16638 1.26843 4.83666 1.39713 5.48329C1.52583 6.12992 1.8434 6.72386 2.30968 7.18999L4.66634 9.54749L7.02301 7.18999Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M4.66699 4.83333V4.84166" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.69 13.8567C14.1563 13.3905 14.4738 12.7966 14.6025 12.15C14.7312 11.5033 14.6653 10.8331 14.413 10.2239C14.1608 9.61476 13.7335 9.09411 13.1853 8.72779C12.6372 8.36148 11.9926 8.16595 11.3333 8.16595C10.674 8.16595 10.0295 8.36148 9.48133 8.72779C8.93314 9.09411 8.5059 9.61476 8.25364 10.2239C8.00138 10.8331 7.93543 11.5033 8.06412 12.15C8.19282 12.7966 8.51039 13.3905 8.97667 13.8567L11.3333 16.2142L13.69 13.8567Z" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.333 11.5V11.5083" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Buy
                        </button>
                        <div>
                            <p class="xl:pr-48 text-base lg:leading-tight leading-normal text-gray-600 dark:text-gray-300 mt-7">It is a long established fact that a reader will be distracted by thereadable content of a page when looking at its layout. The point of usingLorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <p class="text-base leading-4 mt-7 text-gray-600 dark:text-gray-300">Product Code: 8BN321AF2IF0NYA</p>
                            <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Length: 13.2 inches</p>
                            <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Height: 10 inches</p>
                            <p class="text-base leading-4 mt-4 text-gray-600 dark:text-gray-300">Depth: 5.1 inches</p>
                            <p class="md:w-96 text-base leading-normal text-gray-600 dark:text-gray-300 mt-4">Composition: 100% calf leather, inside: 100% lamb leather</p>
                        </div>
                        <div>
                            <div class="border-t border-b py-4 mt-7 border-gray-200">
                                <div data-menu class="flex justify-between items-center cursor-pointer">
                                    <p class="text-base leading-4 text-gray-800 dark:text-gray-300">Shipping and returns</p>
                                    <button class="cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 rounded" role="button" aria-label="show or hide">
                                        <svg class="transform text-gray-300 dark:text-white" width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 1L5 5L1 1" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden pt-4 text-base leading-normal pr-12 mt-4 text-gray-600 dark:text-gray-300" id="sect">You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are nonrefundable</div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    let elements = document.querySelectorAll("[data-menu]");
                    for (let i = 0; i < elements.length; i++) {
                        let main = elements[i];
                        main.addEventListener("click", function() {
                            let element = main.parentElement.parentElement;
                            let andicators = main.querySelectorAll("svg");
                            let child = element.querySelector("#sect");
                            child.classList.toggle("hidden");
                            andicators[0].classList.toggle("rotate-180");
                        });
                    }
                </script>
            </form>
            <!-- Color Background -->
            <div class="absolute inset-x-0 top-[-10rem] -z-10  overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-teal-100 to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <!-- Color Background -->
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-teal-700 to-teal-300 opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>

</html>