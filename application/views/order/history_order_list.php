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
	              <th>Status</th>
	              <th></th>
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
<div class="modal fade modal_detail">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail</h5>
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Nama</label>
              <label class="col-sm col-form-label" name="Nama"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Perjalanan</label>
              <label class="col-sm col-form-label" name="Perjalanan"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Departemen</label>
              <label class="col-sm col-form-label" name="Departemen"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Proyek</label>
              <label class="col-sm col-form-label" name="Proyek"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Alamat Asal</label>
              <label class="col-sm col-form-label" name="Alamat_Asal"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Alamat Tujuan</label>
              <label class="col-sm col-form-label" name="Alamat_Tujuan"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Tanggal Berangkat</label>
              <label class="col-sm col-form-label" name="Tanggal_Berangkat"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Status</label>
              <label class="col-sm col-form-label" name="Status"></label>
            </div>
          </div>
          <div class="col-md-12">
            <table class="table table-bordered text-center table-detail">
              <thead class="text-uppercase bg-primary">
                <tr class="text-white">
                  <th>No</th>
                  <th>Mulai</th>
                  <th>Berhenti</th>
                  <th>Waktu Perjalanan	</th>
                  <th>Driver</th>
                  <th>Nomor Polisi</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	load_onprogress_order();

	function load_onprogress_order() {
		db.collection("Travel")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data();
      });
      gabung_data('travel',json_all);
    });
    db.collection("Request").orderBy("Tanggal_Berangkat", "desc")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data();
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
    }
    else if(nama_var == 'request'){
      json_request = data;
      if(Object.keys(json_request).length == 0){
        kosong = 1;
      }
      else{
        kosong = 0;
      }
    }
    else if(nama_var == 'users'){
      json_users = data;
    }
    else if(nama_var == 'car'){
      json_car = data;
    }
    if((Object.keys(json_travel).length > 0 || kosong == 1) && Object.keys(json_request).length > 0 && Object.keys(json_users).length > 0){
      var json_onprogress_order = [];
      var json_request_key = Object.keys(json_request);
      json_request_key.forEach(function(key) {
        var date_arr = json_request[key].Tanggal_Berangkat.split('-');
        var action = "<button type='button' class='btn btn-sm btn-secondary' onclick='open_detail(this)' data-key='"+key+"'>Detail</button>";
        var json_arr = [json_request[key].Nama || "", json_request[key].Departemen || "", json_request[key].Proyek || "", json_request[key].Perjalanan || "", json_request[key].Alamat_Asal || "", json_request[key].Alamat_Tujuan || "", date_arr[2] + "-" + date_arr[1] + "-" + date_arr[0] || "", json_request[key].Status || "", action];
        json_onprogress_order.push(json_arr);
      });
      $('.datatables').DataTable().clear().destroy();
      $('.datatables').DataTable({
        responsive: true,
        data: json_onprogress_order,
        order:[[ 6, "desc" ]],
        dom: 'Bfrtip',
        buttons: [
          'excelHtml5',
          'csvHtml5',
        ]
      }).draw();
      $('#loading_firebase').hide();
    }
  }

  function open_detail(btn) {
    var key = $(btn).attr("data-key");
    $("label[name=Nama]").text(json_request[key].Nama);
    $("label[name=Perjalanan]").text(json_request[key].Perjalanan);
    $("label[name=Departemen]").text(json_request[key].Departemen);
    $("label[name=Proyek]").text(json_request[key].Proyek);
    $("label[name=Alamat_Asal]").text(json_request[key].Alamat_Asal);
    $("label[name=Alamat_Tujuan]").text(json_request[key].Alamat_Tujuan);
    var date_arr = json_request[key].Tanggal_Berangkat.split('-');
    $("label[name=Tanggal_Berangkat]").text(date_arr[2] + "-" + date_arr[1] + "-" + date_arr[0]);
    $("label[name=Status]").text(json_request[key].Status);
    var table_travel = "";
    var no = 1;
    var tr = "";
    console.log(json_car);
    var json_travel_key = Object.keys(json_travel);
    json_travel_key.forEach(function(travel_key) {
      console.log(key+" "+json_travel[travel_key].Request_id);
      if(key == json_travel[travel_key].Request_id){
        tr += "<tr>"+
                "<td>"+no+"</td>"+
                "<td>"+json_travel[travel_key].Mulai+"</td>"+
                "<td>"+json_travel[travel_key].Berhenti+"</td>"+
                "<td>"+json_travel[travel_key].Waktu_Perjalanan+"</td>"+
                "<td>"+json_users[json_request[json_travel[travel_key].Request_id].driverId].Nama+"</td>"+
                "<td>"+ (json_travel[travel_key].hasOwnProperty('CarId') ? json_car[json_travel[travel_key].CarId].no_polisi : "") +"</td>"+
              "</tr>";
        no++;
      }
    });
    console.log(tr);
    $(".table-detail tbody").html(tr);
    $('.modal_detail').modal({
      "show": true
    })
  }
</script>