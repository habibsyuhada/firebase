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
	load_data2();

	function load_data2() {
		var json_driver = {};
		db.collection("Users").get().then((querySnapshot) => {
	    querySnapshot.forEach((doc) => {
				var data = doc.data();
				if(data.Role == 'Driver'){
					json_driver[doc.id] = data.Nama;
				}
	    });
		}).catch(function(error) {
		  console.log("Error getting document:", error);
		});

		db.collection("Request")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        console.log(doc.data());
        var data = doc.data();
        var json_arr = [data.Nama || "", data.Departemen || "", data.Proyek || "", data.Perjalanan || "", data.Alamat_Asal || "", data.Alamat_Tujuan || "", data.Tanggal_Berangkat || "", data.Tanggal_Selesai || "", json_driver[data.driverId] || ""];
        json_all.push(json_arr);
      });

      console.log(JSON.stringify(json_all));
	    $('.datatables').DataTable().clear().destroy();
	    $('.datatables').DataTable({
	    	responsive: true,
	    	data: json_all,
	    	order:[]
	    }).draw();
	    $('#loading_firebase').hide();
    });
	}
</script>