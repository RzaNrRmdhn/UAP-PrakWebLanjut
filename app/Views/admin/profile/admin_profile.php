<?=$this->extend('layouts/content_dashboard_admin') ?>

<?=$this->section('admin_profile')?>
    <div class="h-full bg-gray-200 p-8">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div class="w-full h-[200px]">
                <img class="w-full h-full rounded-tl-lg rounded-tr-lg bg-gradient-to-b from-teal-800 to-teal-400">
            </div>
            <div class="flex flex-col items-center -mt-20">
            <img src="<?= base_url('/assets/img/lucas.jpg') ?>" class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">Lucas</p>
                </div>
                <p class="text-gray-700">Admin ThriftingWeb</p>
            </div>
            <div class="flex flex flex-col items-center lg:items-end justify-center px-8 mt-2">
                <div class="flex items-center space-x-2 mt-2">
                    <a href="<?= base_url('/edit') ?>" type="button" class="flex items-center bg-teal-500 hover:bg-teal-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
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
                            <span class="font-bold w-24">Full name:</span>
                            <span class="text-gray-700">Lucas Wong</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Birthday:</span>
                            <span class="text-gray-700">25 January, 1999</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Joined:</span>
                            <span class="text-gray-700">10 Jan 2022</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Mobile:</span>
                            <span class="text-gray-700">+6282287254412</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email:</span>
                            <span class="text-gray-700">lucaswong@gmail.com</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Location:</span>
                            <span class="text-gray-700">Jakarta, Indonesia</span>
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Languages:</span>
                            <span class="text-gray-700">Indonesia, English, Korean</span>
                        </li>
                        
                    </ul>
                </div>            
            </div> 
        </div>
    </div>
<?=$this->endSection() ?>