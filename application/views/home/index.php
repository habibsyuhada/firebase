<div class="main-content-inner mt-4">
  <div class="row my-4">
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>Today's Request</b></h4>
    		<h1 class="my-2 font-weight-bold total-request-today">0</h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>This Month's Request</b></h4>
    		<h1 class="my-2 font-weight-bold total-request-month">0</h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>This Year's Request</b></h4>
    		<h1 class="my-2 font-weight-bold total-request-year">0</h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>Summary All Request</b></h4>
    		<h1 class="my-2 font-weight-bold total-request-all">0</h1>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white text-center p-3 shadow">
    		<canvas id="dailyreportChart" height="100"></canvas>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3 shadow">
    		<h3 class="font-weight-bold mb-2 text-center">In Progress Request</h3>
    		<table class="table table-bordered text-center datatables tbl-daily-chart">
          <thead class="text-uppercase bg-primary">
            <tr class="text-white">
              <th>No.</th>
              <th>Bidang</th>
              <th>Date</th>
              <th>Total Time</th>
              <th>Total Cost</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div id="loading_daily_table">
          <div class="loader my-4"></div>
          <h5 class="text-center">Loading...</h5>
        </div>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3 shadow">
    		<h3 class="font-weight-bold mb-2 text-center">In Progress Request</h3>
    		<table class="table table-bordered text-center datatables tbl-in-progress-request">
          <thead class="text-uppercase bg-primary">
            <tr class="text-white">
              <th>No.</th>
              <th>User</th>
              <th>Driver</th>
              <th>Police Number</th>
              <th>Depart</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          	<?php //for ($i=1; $i < 5; $i++): ?>
            <!-- <tr>
              <th><?php echo $i ?></th>
              <td>Habib Syuhada</td>
              <td>Driver <?php echo $i ?></td>
              <td>BP 1234 QA</td>
              <td>10:05</td>
              <td><a href="#" class="btn btn-xs btn-secondary">Detail</a></td>
            </tr> -->
          	<?php //endfor; ?>
          </tbody>
        </table>
        <div id="loading_onprogress_order">
          <div class="loader my-4"></div>
          <h5 class="text-center">Loading...</h5>
        </div>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3 shadow">
        <canvas id="budgetvsactualChart"></canvas>
        <div>
          <a href="<?php echo base_url() ?>budget/budget_list" class="btn btn-sm btn-primary">Update Anggaran</a>
        </div>
    	</div>
    </div>
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3 shadow">
    		<canvas id="montlycostChart"></canvas>
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
              <label class="col-sm-5 col-form-label font-weight-bold">Alamat Asal</label>
              <label class="col-sm col-form-label" name="Alamat_Asal"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Alamat Tujuan</label>
              <label class="col-sm col-form-label" name="Alamat_Tujuan"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Departemen</label>
              <label class="col-sm col-form-label" name="Departemen"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Nama</label>
              <label class="col-sm col-form-label" name="Nama"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Perjalanan</label>
              <label class="col-sm col-form-label" name="Perjalanan"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Tanggal Berangkat</label>
              <label class="col-sm col-form-label" name="Tanggal_Berangkat"></label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Mulai</label>
              <label class="col-sm col-form-label" name="Mulai"></label>
            </div>
            <div class="form-group row">
              <label class="col-sm-5 col-form-label font-weight-bold">Driver</label>
              <label class="col-sm col-form-label" name="Driver"></label>
            </div>
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
    db.collection("Request")
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
    db.collection("Budget")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.data().month] = doc.data().total
      });
      gabung_data('budget',json_all);
    });
    db.collection("Biaya")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data()
      });
      gabung_data('biaya',json_all);
    });
    db.collection("Service")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        json_all[doc.id] = doc.data()
      });
      gabung_data('service',json_all);
    });
	}

  var json_travel = [];
  var json_request = [];
  var json_users = [];
  var json_car = [];
  var json_biaya = [];
  var json_service = [];
  var json_budget = [];
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
    else if(nama_var == 'biaya'){
      json_biaya = data;
    }
    else if(nama_var == 'service'){
      json_service = data;
    }
    else if(nama_var == 'budget'){
      json_budget = data;
    }
    if((nama_var == 'biaya' || nama_var == 'service' || nama_var == 'budget') && Object.keys(json_request).length > 0 && Object.keys(json_travel).length > 0){
      var total_actual = 0;
      var total_bensin = 0;
      var total_angin = 0;
      var total_parkir = 0;
      var total_lain = 0;
      var total_service = 0;
      var total_actual_all = [];
      var data_table_daily_chart = [];
      var d = new Date();
      var json_biaya_key = Object.keys(json_biaya);
      var no_row = 1;
      json_biaya_key.forEach(function(key) {
        var date_service = json_biaya[key].Tanggal;
        var month_service = date_service.split("-");
        if((parseInt(month_service[1]) - 1) == d.getMonth()){
          var total_biaya_travel = parseInt(json_biaya[key].Angin) + parseInt(json_biaya[key].Bensin) + parseInt(json_biaya[key].Lain) + parseInt(json_biaya[key].Parkir);
          total_actual = total_actual + parseInt(total_biaya_travel);
          total_bensin = total_bensin + parseInt(json_biaya[key].Bensin);
          total_angin = total_angin + parseInt(json_biaya[key].Angin);
          total_parkir = total_parkir + parseInt(json_biaya[key].Parkir);
          total_lain = total_lain + parseInt(json_biaya[key].Lain);
          var nama_dept = json_request[json_travel[json_biaya[key].Travel_Id].Request_id].Departemen;
          if(typeof(total_actual_all[nama_dept]) != 'undefined' && typeof(total_actual_all[nama_dept][parseInt(month_service[0])]) != 'undefined') {
            total_actual_all[nama_dept][parseInt(month_service[0])] = total_actual_all[nama_dept][parseInt(month_service[0])] + parseInt(total_biaya_travel);
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][4] = data_table_daily_chart[nama_dept][parseInt(month_service[0])][4]+ parseInt(total_biaya_travel);
          }
          else {
            total_actual_all[nama_dept] = [];
            total_actual_all[nama_dept][parseInt(month_service[0])] = parseInt(total_biaya_travel);
            data_table_daily_chart[nama_dept] = [];
            data_table_daily_chart[nama_dept][parseInt(month_service[0])] = [];
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][0] = no_row;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][1] = nama_dept;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][2] = "<span class='d-none'>"+ month_service[2] + month_service[1] + month_service[0] +"</span>" + date_service;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][3] = "-";
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][4] = parseInt(total_biaya_travel);
            no_row++;
          }
        }
      });
      
      var json_service_key = Object.keys(json_service);
      json_service_key.forEach(function(key) {
        var nama_dept = "Service";
        var date_service = json_service[key].Service_Month;
        var month_service = date_service.split("-");
        if((parseInt(month_service[1]) - 1) == d.getMonth()){
          total_actual = total_actual + parseInt(json_service[key].Service_Price);
          total_service = total_service + parseInt(json_service[key].Service_Price);
          if(typeof(total_actual_all[nama_dept]) != 'undefined' && typeof(total_actual_all[nama_dept][parseInt(month_service[0])]) != 'undefined') {
            total_actual_all[nama_dept][parseInt(month_service[0])] = total_actual_all[nama_dept][parseInt(month_service[0])] + parseInt(json_service[key].Service_Price);
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][4] = data_table_daily_chart[nama_dept][parseInt(month_service[0])][4]+ parseInt(total_biaya_travel);
          }
          else {
            total_actual_all[nama_dept] = [];
            total_actual_all[nama_dept][parseInt(month_service[0])] = parseInt(json_service[key].Service_Price);
            data_table_daily_chart[nama_dept] = [];
            data_table_daily_chart[nama_dept][parseInt(month_service[0])] = [];
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][0] = no_row;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][1] = nama_dept;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][2] = "<span class='d-none'>"+ month_service[2] + month_service[1] + month_service[0] +"</span>" + date_service;
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][3] = "-";
            data_table_daily_chart[nama_dept][parseInt(month_service[0])][4] = parseInt(total_biaya_travel);
            no_row++;
          }
        }
      });

      var daysinmonth = new Date(2020, d.getMonth()+1, 0).getDate();
      var dataset_chart_daily_dept = [];
      var dataset_table_daily_chart = [];
      var total_actual_key = Object.keys(total_actual_all);
      var coolors = ["rgba(0, 123, 255, 1)", "rgba(40, 167, 69, 1)", "rgba(251, 54, 64, 1)", "rgba(247, 208, 2, 1)"];
      var coolors_tr = ["rgba(0, 123, 255, 0.1)", "rgba(40, 167, 69, 0.1)", "rgba(251, 54, 64, 0.1)", "rgba(247, 208, 2, 0.1)"];
      var no = 0;
      no_row = 1;
      total_actual_key.forEach(function(key) {
        var total_actual_dept = [];
        for (let i = 1; i <= daysinmonth; i++) {
          if(typeof(total_actual_all[key]) != 'undefined' && typeof(total_actual_all[key][i]) != 'undefined') {
            total_actual_dept[i-1] = total_actual_all[key][i];
      
            var temp_data = [no_row, data_table_daily_chart[key][i][1], data_table_daily_chart[key][i][2], data_table_daily_chart[key][i][3], data_table_daily_chart[key][i][4]];
            dataset_table_daily_chart.push(temp_data);
            console.log(dataset_table_daily_chart);
            no_row++;
          }
          else {
            total_actual_dept[i-1] = 0;
          }
        }
        var data_set = {
          label: key,
          borderColor: coolors[no],
          backgroundColor: coolors_tr[no],
          data: total_actual_dept,
          lineTension: 0,
          fill: true
        }
        dataset_chart_daily_dept.push(data_set);
        no++;
      });
      create_dailyreportChart(dataset_chart_daily_dept);

      // console.log(data_table_daily_chart);
      $('.datatables.tbl-daily-chart').DataTable().clear().destroy();
      $('.datatables.tbl-daily-chart').DataTable({
        responsive: true,
        data: dataset_table_daily_chart,
        order:[]
      }).draw();
      $('#loading_daily_table').hide();

      var budget_now = 0;
      if(!(typeof json_budget[(d.getMonth() + 1)] == 'undefined')){
        budget_now = json_budget[(d.getMonth() + 1)];
      }
      create_budgetvsactualChart(budget_now, total_actual);
      var label_monthly = ["Bensin", "Sewa Kendaraan", "Uang Parkir", "Uang Isi Angin", "Service", "Lainnya"];
      var data_monthly = [total_bensin, 0, total_parkir, total_angin, total_service, total_lain];
      data_monthly.forEach(function (value, i) {
        if(parseInt(value) == 0){
          label_monthly.splice(i, 1);
          data_monthly.splice(i, 1);
        }
      });
      create_montlycostChart(label_monthly, data_monthly);
    }
    else{
      if((Object.keys(json_travel).length > 0 || kosong == 1) && Object.keys(json_request).length > 0 && Object.keys(json_users).length > 0 && Object.keys(json_car).length > 0){
        var json_onprogress_order = [];
        var no = 1;
        var json_travel_key = Object.keys(json_travel);
        json_travel_key.forEach(function(key) {
          if(json_travel[key].hasOwnProperty('Berhenti') == false && json_travel[key].hasOwnProperty('Request_id') == true){
            var action = "<button type='button' class='btn btn-sm btn-secondary' onclick='open_detail(this)' data-key='"+key+"'>Detail</button>";
            if(typeof json_request[json_travel[key].Request_id] !== 'undefined'){
      
              var json_arr = [no, json_request[json_travel[key].Request_id].Nama || "", json_users[json_request[json_travel[key].Request_id].driverId].Nama || "", (json_travel[key].hasOwnProperty('CarId') ? json_car[json_travel[key].CarId].no_polisi : "") || "", json_travel[key].Mulai || "", action];
              json_onprogress_order.push(json_arr);
              no++;
            }
          }
        });
        $('.datatables.tbl-in-progress-request').DataTable().clear().destroy();
        $('.datatables.tbl-in-progress-request').DataTable({
          responsive: true,
          data: json_onprogress_order,
          order:[]
        }).draw();
        $('#loading_onprogress_order').hide();
      }
    }
    if(nama_var == 'request'){
      var request_today = 0;
      var request_month = 0;
      var request_year = 0;
      var request_all = 0;
      var json_request_key = Object.keys(json_request);
      json_request_key.forEach(function(key) {
        if(json_request[key].Status != 'Cancel'){
          if(json_request[key].Tanggal_Berangkat == "<?php echo date('d-m-Y'); ?>"){
            request_today++;
          }
          var date_request = json_request[key].Tanggal_Berangkat;
          var date_request_arr = date_request.split("-");
          if(date_request_arr[1]+"-"+date_request_arr[2] == "<?php echo date('m-Y'); ?>"){
            request_month++;
          }
          if(date_request_arr[2] == "<?php echo date('Y'); ?>"){
            request_year++;
          }
          request_all++;
        }
      });
      $(".total-request-today").html(request_today);
      $(".total-request-month").html(request_month);
      $(".total-request-year").html(request_year);
      $(".total-request-all").html(request_all);
    }
  }

  function open_detail(btn) {
    var key = $(btn).attr("data-key");
    $("label[name=Alamat_Asal]").text(json_request[json_travel[key].Request_id].Alamat_Asal);
    $("label[name=Alamat_Tujuan]").text(json_request[json_travel[key].Request_id].Alamat_Tujuan);
    $("label[name=Departemen]").text(json_request[json_travel[key].Request_id].Departemen);
    $("label[name=Nama]").text(json_request[json_travel[key].Request_id].Nama);
    $("label[name=Perjalanan]").text(json_request[json_travel[key].Request_id].Perjalanan);
    $("label[name=Proyek]").text(json_request[json_travel[key].Request_id].Proyek);
    $("label[name=Tanggal_Berangkat]").text(json_request[json_travel[key].Request_id].Tanggal_Berangkat);
    $("label[name=Mulai]").text(json_travel[key].Mulai);
    $("label[name=Driver]").text(json_users[json_request[json_travel[key].Request_id].driverId].Nama);
    $('.modal_detail').modal({
      "show": true
    })
  }
	//https://coolors.co/d33f49-21fa90-0c090d-30bced-303036
	<?php
    // $months = array(
    //   'January',
    //   'February',
    //   'March',
    //   'April',
    //   'May',
    //   'June',
    //   'July ',
    //   'August',
    //   'September',
    //   'October',
    //   'November',
    //   'December',
    // );
    // $this_month = date("n") - 1;

		for ($i=1; $i <= date('t'); $i++) { 
      $date_pretty[] 		= $i;
    }
	?>
  var dailyreportChart;
  function create_dailyreportChart(data_data) {
    if (dailyreportChart != undefined || dailyreportChart !=null) {
      dailyreportChart.destroy();
    }
    dailyreportChart = new Chart(document.getElementById('dailyreportChart').getContext('2d'), {
      // The type of chart we want to create
      type: 'line',

      // The data for our dataset
      data: {
        labels: ['<?php echo join("', '", $date_pretty) ?>'],
        // datasets: [{
        //   label: 'Actual Cost',
        //   borderColor: 'rgba(0, 123, 255, 1)',
        //   backgroundColor: 'rgba(0, 123, 255, 0.1)',
        //   data: data_data,
        //   lineTension: 0,
        //   fill: true
        // },],
        datasets: data_data,
      },

      // Configuration options go here
      options: {
        title: {
          display: true,
          fontSize: 22,
          text: 'Daily Report (<?php echo date("F") ?>)'
        },
        legend: {
          display: true
        },
        tooltips: {
          displayColors: false,
          callbacks: {
              title: function(tooltipItems, data) {
                //Return value for title
                // return tooltipItems.xLabel;
                return data.datasets[tooltipItems[0].datasetIndex].label;
              },
              label: function (tooltipItems, data) {
                  return 'Actual Cost: Rp. ' + tooltipItems.yLabel;
              }
          }
        },
        scales: {
          yAxes: [{ 
            scaleLabel: {
              display: true,
              labelString: "Total Actual Cost (Rp.)",
              fontStyle: "bold"
            },
            gridLines: {
              display: true,
              drawBorder: true,
              drawOnChartArea: false,
            }
          }],
          xAxes: [{ 
            scaleLabel: {
              display: true,
              labelString: "Date",
              fontStyle: "bold"
            },
            gridLines: {
              display: true,
              drawBorder: true,
              drawOnChartArea: false,
            }
          }]
        }
      }
    });
	};


  var budgetvsactualChart;
  function create_budgetvsactualChart(budget, total_actual) {
    if (budgetvsactualChart != undefined || budgetvsactualChart !=null) {
      budgetvsactualChart.destroy();
    }

    var ctx2 = document.getElementById('budgetvsactualChart').getContext('2d');
    var grd2 = ctx2.createLinearGradient(500, 0, 0, 0);
    grd2.addColorStop(0, "rgba(0, 123, 255, 1)");
    grd2.addColorStop(1, "rgba(0, 123, 255, 0.3)");
    budgetvsactualChart = new Chart(document.getElementById('budgetvsactualChart').getContext('2d'), {
      type: 'horizontalBar',
      data: {
        labels: ["Budget", "Actual"],
        datasets: [
          {
            label: "Total",
            backgroundColor: grd2,
            borderColor: "rgba(0, 123, 255, 1)",
            borderWidth: 1,
            data: [budget , total_actual]
          }
        ]
      },
      options: {
        legend: { display: false },
        title: {
          display: true,
          fontSize: 22,
          text: 'Anggaran vs Realisasi'
        },
        tooltips: {
          displayColors: false,
          callbacks: {
              label: function (tooltipItems, data) {
                  return 'Cost: Rp. ' + tooltipItems.xLabel;
              }
          }
        },
        scales: {
          xAxes: [{ 
            display: false,
            scaleLabel: {
              display: true,
              labelString: "Total (Rp.)",
              fontStyle: "bold"
            },
            ticks: {
              beginAtZero: true
            },
            gridLines: {
              display: true,
              drawBorder: false,
              drawOnChartArea: false,
            },
          }],
          yAxes: [{
            gridLines: {
              display: true,
              drawBorder: false,
              drawOnChartArea: false,
            },
            barThickness: 35,
          }]
        }
      }
    });
  }

  var montlycostChart;
  function create_montlycostChart(data_label, data_data) {
    if (montlycostChart != undefined || montlycostChart !=null) {
      montlycostChart.destroy();
    }
    var ctx = document.getElementById('montlycostChart').getContext('2d');
    var grd = ctx.createLinearGradient(0, 0, 0, 200);
    grd.addColorStop(0, "rgba(0, 123, 255, 1)");
    grd.addColorStop(1, "rgba(0, 123, 255, 0.3)");

    montlycostChart = new Chart(document.getElementById('montlycostChart').getContext('2d'), {
      type: 'bar',
      data: {
        labels: data_label,
        minHeight: 2000,
        datasets: [
          {
            backgroundColor: grd,
            borderColor: "rgba(0, 123, 255, 1)",
            borderWidth: 1,
            data: data_data,
          },
        ]
      },
      options: {
        legend: {
          display: false
        },
        tooltips: {
          displayColors: false,
          callbacks: {
              label: function (tooltipItems, data) {
                  return 'Cost: Rp. ' + tooltipItems.yLabel;
              }
          }
        },
        title: {
          display: true,
          fontSize: 22,
          text: 'Monthly Cost Actual'
        },
        scales: {
          yAxes: [{ 
            display: false,
            scaleLabel: {
              display: true,
              labelString: "Total Cost (Rp.)",
              fontStyle: "bold"
            },
            gridLines: {
              display: true,
              drawBorder: true,
              drawOnChartArea: false,
            },
            ticks: {
              beginAtZero: true
            }
          }],
          xAxes: [{ 
            scaleLabel: {
              display: true,
              labelString: "Type",
              fontStyle: "bold"
            },
            barThickness: 35,
            gridLines: {
              display: true,
              drawBorder: false,
              drawOnChartArea: false,
            }
          }]
        }
      }
    });
  }
  

</script>