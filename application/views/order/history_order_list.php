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
            <h6 class="text-gray-800 text-xl font-bold">Request List</h6>
            <a href="<?php echo base_url() ?>car/car_new" class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Add New Request
            </a>
          </div>
        </div>
        <div class="block w-full overflow-x-scroll">
          <!-- Projects table -->
          <table class="items-center w-full bg-transparent border-collapse datatables">
            <thead>
              <tr>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Request By
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Department
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Project
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Type Request
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Source Address
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Destination Address
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                  Departure Time
                </th>
                <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($car_list as $key => $value): ?>
                <tr>
                  <td class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200"><?php echo $value['car_name'] ?></td>
                  <td class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200"><?php echo $value['police_number'] ?></td>
                  <td class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200"><?php echo $value['status'] ?></td>
                  <td class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200">
                    <a href="#pablo" class="text-gray-600 block py-1 px-3" onclick="openDropdown(event,'table-dark-<?php echo $key ?>-dropdown')"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-<?php echo $key ?>-dropdown">
                      <a href="<?php echo base_url() ?>car/car_edit/<?php echo $value['id'] ?>" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Edit</abs
                      ><a href="<?php echo base_url() ?>car/car_delete_process/<?php echo $value['id'] ?>" onclick="return confirm('Are You Sure?')" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Delete</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
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
  /* Function for dropdowns */
  function openDropdown(event, dropdownID) {
    let element = event.target;
    while (element.nodeName !== "A") {
      element = element.parentNode;
    }
    Popper.createPopper(element, document.getElementById(dropdownID), {
      placement: "bottom-start",
    });
    document.getElementById(dropdownID).classList.toggle("hidden");
    document.getElementById(dropdownID).classList.toggle("block");
  }
  $('.datatables').DataTable({
    // responsive: true,
    order: [],
  });
  // load_data2();

  // function load_data2() {
  //   db.collection("Users")
  //     .onSnapshot(function(querySnapshot) {
  //       var json_all = [];
  //       querySnapshot.forEach(function(doc) {
  //         var data = doc.data();
  //         var action = `<a href="#pablo" class="text-gray-600 block py-1 px-3" onclick="openDropdown(event,'table-light-1-dropdown')">
  //                     <i class="fas fa-ellipsis-v"></i>
  //                   </a>
  //                   <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-light-1-dropdown">
  //                     <a href="<?php echo base_url() ?>user/user_edit/` + doc.id + `" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Edit</a>
  //                     <a href="#!" onclick="delete_data(this)" data-key="` + doc.id + `" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Delete</a>
  //                   </div>`;
  //         var json_arr = [data.Nama || "", data.Email || "", data.Role || "", data.Departemen || "", data.Password || "", action];
  //         json_all.push(json_arr);
  //       });

  //       console.log(JSON.stringify(json_all));
  //       $('.datatables').DataTable().clear().destroy();
  //       $('.datatables').DataTable({
  //           responsive: true,
  //           data: json_all,
  //           order: [],
  //           columns: [{
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             },
  //             {
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             },
  //             {
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             },
  //             {
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             },
  //             {
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             },
  //             {
  //               className: "px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left bg-gray-100 text-gray-600 border-gray-200",
  //               targets: "1"
  //             }
  //           ]
  //         }).columns.adjust()
  //         .responsive.recalc().draw();
  //       $('#loading_firebase').hide();
  //     });
  // }

  // async function delete_data(btn) {
  //   Swal.fire({
  //     title: 'Are you sure to <b class="text-danger">&nbsp;Delete&nbsp;</b> this?',
  //     text: "You won't be able to revert this!",
  //     type: 'warning',
  //     showCancelButton: true,
  //     confirmButtonColor: '#3085d6',
  //     cancelButtonColor: '#d33',
  //     confirmButtonText: 'Yes, Delete it!'
  //   }).then((result) => {
  //     if (result.value) {
  //       sweetalert('loading', 'Please Wait...');
  //       var key = $(btn).attr("data-key");
  //       db.collection("Users").doc(key).delete().then(function() {
  //         // load_data();
  //         sweetalert('success', 'Document successfully deleted!');
  //       }).catch(function(error) {
  //         sweetalert('error', error);
  //       });

  //     }
  //   })
  // }
</script>