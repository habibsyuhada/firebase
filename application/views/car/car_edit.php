<div class="relative bg-blue-500 md:pt-32 pb-32 pt-12">
  <div class="px-4 md:px-10 mx-auto w-full">
    <div>
    </div>
  </div>
</div>
<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="text-center flex justify-between">
            <h6 class="text-gray-800 text-xl font-bold">Add New Car</h6>
            <!-- <a href="<?php echo base_url() ?>car/car_new" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Add New Car
            </a> -->
          </div>
        </div>
        <div class="block w-full overflow-x-scroll">
          <!-- Projects table -->
          <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-gray-100">
            <form method="POST" action="<?php echo base_url() ?>car/car_edit_process">
              <input type="hidden" name="id" value="<?php echo $car['id'] ?>" required/>
              <br>
              <h6 class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase">
                Car Information
              </h6>
              <div class="flex flex-wrap">
                <div class="w-full lg:w-12/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Car Name
                    </label>
                    <input type="text" name="car_name" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="<?php echo $car['car_name'] ?>" required/>
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Police Number
                    </label>
                    <input type="text" name="police_number" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" value="<?php echo $car['police_number'] ?>" required readonly />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlFor="grid-password" >
                      Status
                    </label>
                    <select name="status" class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150" required>
                      <option>---</option>
                      <option value="Idle" <?php echo ($car['status'] == 'Idle' ? "selected" : "") ?>>Idle</option>
                      <option value="Not Idle" <?php echo ($car['status'] == 'Not Idle' ? "selected" : "") ?>>Not Idle</option>
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