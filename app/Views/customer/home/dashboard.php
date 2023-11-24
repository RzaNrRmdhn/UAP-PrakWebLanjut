<?=$this->extend('layouts/content_dashboard_customer') ?>
<?=$this->section('grid_product')?>
        <!-- Grid Product -->
        <div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
            <h2 class="sr-only">Products</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <?php
                    foreach($barang as $barang){
                ?>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    <!-- <img src="<?=$barang['image']?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75"> -->
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700"><?=$barang['nama_barang']?></h3>
                    <p class="mt-1 text-lg font-medium text-gray-900"><?=$barang['harga_barang']?></p>
                    <p class="mt-1 text-lg font-medium text-gray-900">Grade Barang <?=$barang['grade']?></p>
                </a>
                <?php
                    }
                ?>
            </div>
        </div>
<?= $this->endSection() ?>
            
