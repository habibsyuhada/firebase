<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<div class="data-tables datatable-primary">
	    		<table class="table table-bordered text-center datatables">
	          <thead class="text-uppercase bg-primary">
	            <tr class="text-white">
	              <th>Nama</th>
	              <th>Departemen</th>
	              <th>Proyek</th>
	              <th>Tipe Perjalanan	</th>
	              <th>Alamat Asal</th>
	              <th>Alamat Tujuan</th>
	              <th>Tanggal Berangkat</th>
	              <th>Tanggal Selesai</th>
	              <th>Driver</th>
	            </tr>
	          </thead>
	          <tbody>
	          </tbody>
	        </table>
	        <div id="loading_firebase">
	        	<div class="loader my-4"></div>
	        	<h5 class="text-center">Loading...</h5>
	        </div>
	      </div>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	// load_data2();

	// function load_data2() {
	// 	var json_driver = {};
	// 	db.collection("Users").get().then((querySnapshot) => {
	//     querySnapshot.forEach((doc) => {
	// 			var data = doc.data();
	// 			if(data.Role == 'Driver'){
	// 				json_driver[doc.id] = data.Nama;
	// 			}
	//     });
	// 	}).catch(function(error) {
	// 	  console.log("Error getting document:", error);
	// 	});

	// 	db.collection("Request").orderBy("Tanggal_Berangkat", "desc")
  //   .onSnapshot(function(querySnapshot) {
  //   	var json_all = [];
  //     querySnapshot.forEach(function(doc) {
  //       console.log(doc.data());
  //       var data = doc.data();
  //       var json_arr = [data.Nama || "", data.Departemen || "", data.Proyek || "", data.Perjalanan || "", data.Alamat_Asal || "", data.Alamat_Tujuan || "", data.Tanggal_Berangkat || "", data.Tanggal_Selesai || "", json_driver[data.driverId] || ""];
  //       json_all.push(json_arr);
  //     });

  //     console.log(JSON.stringify(json_all));
	//     $('.datatables').DataTable().clear().destroy();
	//     $('.datatables').DataTable({
	//     	responsive: true,
	//     	data: json_all,
	//     	order:[]
	//     }).draw();
	//     $('#loading_firebase').hide();
  //   });
	// }

	load_onprogress_order();

	function load_onprogress_order() {
		db.collection("Travel")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        if(doc.data().hasOwnProperty('Berhenti') == false && doc.data().hasOwnProperty('Request_id') == true){
          json_all[doc.id] = doc.data();
        }
      });
      gabung_data('travel',json_all);
    });
    db.collection("Request")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data();
        if(doc.data().Status != 'End' || doc.data().Status != 'Cancel'){
          json_all[doc.id] = doc.data();
        }
      });
      gabung_data('request',json_all);
    });
    db.collection("Users")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data()
      });
      gabung_data('users',json_all);
    });
    db.collection("Car")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data()
      });
      gabung_data('car',json_all);
    });
	}

  var json_travel = [];
  var json_request = [];
  var json_users = [];
  var json_car = [];
  var kosong = 0;
  function gabung_data(nama_var, data) {
    if(nama_var == 'travel'){
      json_travel = data;
      if(Object.keys(json_travel).length == 0){
        kosong = 1;
      }
      else{
        kosong = 0;
      }
    }
    else if(nama_var == 'request'){
      json_request = data;
    }
    else if(nama_var == 'users'){
      json_users = data;
    }
    else if(nama_var == 'car'){
      json_car = data;
    }
    console.log(nama_var);
    console.log(data);
    if((Object.keys(json_travel).length > 0 || kosong == 1) && Object.keys(json_request).length > 0 && Object.keys(json_users).length > 0){
      var json_onprogress_order = [];
      var no = 1;
      var json_travel_key = Object.keys(json_travel);
      json_travel_key.forEach(function(key) {
        var action = "<button type='button' class='btn btn-sm btn-secondary' onclick='open_detail(this)' data-key='"+key+"'>Detail</button>";
        var json_arr = [no, json_request[json_travel[key].Request_id].Nama || "", json_users[json_request[json_travel[key].Request_id].driverId].Nama || "", json_car[json_travel[key].CarId].no_polisi || "", json_travel[key].Mulai || "", action];
        json_onprogress_order.push(json_arr);
        no++;
      });
      // console.log(json_onprogress_order);
      $('.datatables').DataTable().clear().destroy();
      $('.datatables').DataTable({
        responsive: true,
        data: json_onprogress_order,
        order:[]
      }).draw();
      $('#loading_onprogress_order').hide();
    }
  }
</script>