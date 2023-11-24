<?=$this->extend('layout/content_dashboard_admin')?>
<?=$this->section('list_admin')?>
    <!-- Admin Table -->
      <div class="p-4 mt-4 ml-4">
          <h2 class="text-xl font-bold text-teal-700">List Admin</h2>
      </div>
      <div class="flex flex flex-col items-center lg:items-start justify-center px-8 mt-2">
          <div class="flex items-center space-x-2 mt-2">
              <a href="<?= base_url('/admin/create_admin') ?>" type="button" class="flex items-center bg-teal-700 hover:bg-teal-500 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
                  <span>Add Admin</span>
              </a>
          </div>
      </div>
      <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
      <table class="w-full border-collapse bg-white text-left text-sm text-black-500">
      <thead class="bg-gradient-to-b from-teal-700 to-teal-500">
        <tr>
          <th scope="col" class="px-6 py-4 font-medium text-white">No</th>
          <th scope="col" class="px-6 py-4 font-medium text-white">Email</th>
          <th scope="col" class="px-6 py-4 font-medium text-white">Name</th>
          <th scope="col" class="px-6 py-4 font-medium text-white">Action</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        <tr class="hover:bg-teal-100">
        <?php $no = 1; 
        foreach ($Admin as $admin): ?>
          <?php if ($admin['roles'] == 'admin'): ?>
              <tr>
                  <td class="px-6 py-4"><?= $no++ ?></td>
                  <td class="px-6 py-4"><?= $admin['email'] ?></td>
                  <td class="px-6 py-4"><?= $admin['username'] ?></td>
                  <td class="px-6 py-4">
                      <button>
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                      </button>
                  </td>
              </tr>
          <?php endif; ?>
        <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
    </div>
<?=$this->endSection()?>
