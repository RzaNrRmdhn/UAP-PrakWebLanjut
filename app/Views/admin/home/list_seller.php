<?=$this->extend('layouts/content_admin') ?>
<?=$this->section('list_seller')?>
    <!-- Table seller -->
    <div class="p-4 mt-4 ml-4">
        <h2 class="text-xl font-bold text-teal-700">List Seller</h2>
    </div>
    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-black-500">
    <thead class="bg-gradient-to-b from-teal-700 to-teal-500">
      <tr>
        <th scope="col" class="px-6 py-4 font-medium text-white">No</th>
        <th scope="col" class="px-6 py-4 font-medium text-white">Email</th>
        <th scope="col" class="px-6 py-4 font-medium text-white">Name</th>
        <th scope="col" class="px-6 py-4 font-medium text-white">Status</th>
        <th scope="col" class="px-6 py-4 font-medium text-white">Action</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
      <tr class="hover:bg-teal-100">
      <?php foreach ($Seller as $seller): ?>
        <?php if ($seller['roles'] == 'seller'): ?>
            <tr>
                <td class="px-6 py-4">1</td>
                <td class="px-6 py-4"><?= $seller['email'] ?></td>
                <td class="px-6 py-4"><?= $seller['username'] ?></td>
                <td class="px-6 py-4">
                  <span
                    class="inline-flex items-center gap-1 rounded-full bg-green-100 px-2 py-1 text-xs font-semibold text-green-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                    Active
                  </span>
                </td>
                <td class="px-6 py-4">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>
                </td>
            </tr>
        <?php endif; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?=$this->endSection()?>
