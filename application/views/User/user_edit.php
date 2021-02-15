<div class="relative bg-blue-500 md:pt-32 pb-32 pt-12">
  <div class="px-4 md:px-10 mx-auto w-full">
    <div>
      <!-- Card stats -->
      <!-- <div class="flex flex-wrap">
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="flex-auto p-4">
              <div class="flex flex-wrap">
                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                  <h5 class="text-gray-500 uppercase font-bold text-xs">
                    Traffic
                  </h5>
                  <span class="font-semibold text-xl text-gray-800">
                    350,897
                  </span>
                </div>
                <div class="relative w-auto pl-4 flex-initial">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                    <i class="far fa-chart-bar"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="flex-auto p-4">
              <div class="flex flex-wrap">
                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                  <h5 class="text-gray-500 uppercase font-bold text-xs">
                    New users
                  </h5>
                  <span class="font-semibold text-xl text-gray-800">
                    2,356
                  </span>
                </div>
                <div class="relative w-auto pl-4 flex-initial">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="flex-auto p-4">
              <div class="flex flex-wrap">
                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                  <h5 class="text-gray-500 uppercase font-bold text-xs">
                    Sales
                  </h5>
                  <span class="font-semibold text-xl text-gray-800">
                    924
                  </span>
                </div>
                <div class="relative w-auto pl-4 flex-initial">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                    <i class="fas fa-users"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
            <div class="flex-auto p-4">
              <div class="flex flex-wrap">
                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                  <h5 class="text-gray-500 uppercase font-bold text-xs">
                    Performance
                  </h5>
                  <span class="font-semibold text-xl text-gray-800">
                    49,65%
                  </span>
                </div>
                <div class="relative w-auto pl-4 flex-initial">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                    <i class="fas fa-percent"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="text-center flex justify-between">
            <h6 class="text-gray-800 text-xl font-bold">Add New User</h6>
            <!-- <a href="<?php echo base_url() ?>user/user_new" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Add New User
            </a> -->
          </div>
        </div>
        <div class="block w-full overflow-x-scroll">
          <!-- Projects table -->
          <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-gray-100">
            <form method="POST" action="<?php echo base_url() ?>user/user_edit_process">
              <input type="hidden" name="id" value="<?php echo $user['id'] ?>" required/>
              <br>
              <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase">
                User Information
              </h6>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Name
                    </label>
                    <input type="text" name="name" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="<?php echo $user['name'] ?>" required/>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Email
                    </label>
                    <input type="email" name="email" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="<?php echo $user['email'] ?>" required readonly />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Role
                    </label>
                    <select name="role" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" required>
                      <option>---</option>
                      <option value="User" <?php echo ($user['role'] == 'User' ? "selected" : "") ?>>User</option>
                      <option value="Verificator" <?php echo ($user['role'] == 'Verificator' ? "selected" : "") ?>>Verificator</option>
                      <option value="Driver" <?php echo ($user['role'] == 'Driver' ? "selected" : "") ?>>Driver</option>
                      <option value="HoD" <?php echo ($user['role'] == 'HoD' ? "selected" : "") ?>>HoD</option>
                      <option value="Cost Manager" <?php echo ($user['role'] == 'Cost Manager' ? "selected" : "") ?>>Cost Manager</option>
                    </select>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Department
                    </label>
                    <select name="department" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" required="">
                      <option value="">---</option>
                      <option value="Inspeksi Teknik (IT)" <?php echo ($user['department'] == 'Inspeksi Teknik (IT)' ? "selected" : "") ?>>Inspeksi Teknik (IT)</option>
                      <option value="Pengujian dan Konsultasi (PnK)" <?php echo ($user['department'] == 'Pengujian dan Konsultasi (PnK)' ? "selected" : "") ?>>Pengujian dan Konsultasi (PnK)</option>
                      <option value="Inspeksi Umum (IU)" <?php echo ($user['department'] == 'Inspeksi Umum (IU)' ? "selected" : "") ?>>Inspeksi Umum (IU)</option>
                      <option value="Dukungan Bisnis (Dukbis)" <?php echo ($user['department'] == 'Dukungan Bisnis (Dukbis)' ? "selected" : "") ?>>Dukungan Bisnis (Dukbis)</option>
                      <option value="Driver" <?php echo ($user['department'] == 'Driver' ? "selected" : "") ?>>Driver</option>
                      <option value="Penjualan dan Dukungan Operasi (PDO)" <?php echo ($user['department'] == 'Penjualan dan Dukungan Operasi (PDO)' ? "selected" : "") ?>>Penjualan dan Dukungan Operasi (PDO)</option>
                    </select>
                  </div>
                  <button class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="submit">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  /* Make dynamic date appear */
  (function() {
    if (document.getElementById("get-current-year")) {
      document.getElementById(
        "get-current-year"
      ).innerHTML = new Date().getFullYear();
    }
  })();
  /* Sidebar - Side navigation menu on mobile/responsive mode */
  function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("bg-white");
    document.getElementById(collapseID).classList.toggle("m-2");
    document.getElementById(collapseID).classList.toggle("py-3");
    document.getElementById(collapseID).classList.toggle("px-6");
  }
</script>