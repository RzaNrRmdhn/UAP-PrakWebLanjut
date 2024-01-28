<?= $this->extend('layouts/content_customer') ?>
<?= $this->section('grid_product') ?>
<!-- Grid Product -->
<div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
    <h2 class="sr-only">Products</h2>
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <?php
        foreach ($barang as $barang) {
        ?>
            <div class="max-w-2xl mx-auto">
                <div class="bg-gradient-to-b from-teal-700 to-teal-500 shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg p-8" src="<?= $barang['image'] ?>" alt="product image">
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h3 class="text-slate-100 font-semibold text-xl tracking-tight dark:text-white"><?= $barang['nama_barang'] ?></h3>
                        </a>
                        <div class="flex items-center justify-between">
                            <span class="text-3xl font-bold text-slate-100 dark:text-white"><?= $barang['harga_barang'] ?></span>
                            <a href="<?php echo base_url('customer/details/product/' . $barang['id']) ?>" class="text-black bg-slate-200 hover:bg-gradient-to-b from-teal-700 to-teal-500 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?= $this->endSection() ?>