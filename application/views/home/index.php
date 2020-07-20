<div class="main-content-inner mt-4">
  <div class="row my-4">
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>Today's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(1,9) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>This Month's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(10,30) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>This Year's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(60,110) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3 shadow">
    		<h4 class="header-title mb-0"><b>Summary All Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(111,200) ?></h1>
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
    		<h3 class="font-weight-bold mb-2 text-center">In Progress Order</h3>
    		<table class="table table-bordered text-center">
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
          	<?php for ($i=1; $i < 5; $i++): ?>
            <tr>
              <th><?php echo $i ?></th>
              <td>Habib Syuhada</td>
              <td>Driver <?php echo $i ?></td>
              <td>BP 1234 QA</td>
              <td>10:05</td>
              <td><a href="#" class="btn btn-xs btn-secondary">Detail</a></td>
            </tr>
          	<?php endfor; ?>
          </tbody>
        </table>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3 shadow">
    		<canvas id="budgetvsactualChart"></canvas>
    	</div>
    </div>
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3 shadow">
    		<canvas id="montlycostChart"></canvas>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	//https://coolors.co/d33f49-21fa90-0c090d-30bced-303036
	<?php
		for ($i=7; $i >= 0; $i--) { 
			$date_tmp = date('Y-m-d', strtotime('-'.$i.' day'));
			$date[] 	= $date_tmp;
			$date_tmp_pretty = date('d-m-Y', strtotime('-'.$i.' day'));
			$date_pretty[] 		= $date_tmp_pretty;
			// $d 				= new \DateTime($date_tmp);
			$d 				= new \DateTime($date_tmp);
			$mst_tmp 	=$d->getTimestamp().substr($d->format('u'),0,3); // millisecond timestamp
			$mts[] 		= $mst_tmp; // millisecond timestamp
		}
	?>
	var dailyreportChart = new Chart(document.getElementById('dailyreportChart').getContext('2d'), {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['<?php echo join("', '", $date_pretty) ?>'],
      datasets: [{
        label: 'Actual Cost',
        borderColor: 'rgba(0, 123, 255, 1)',
        backgroundColor: 'rgba(0, 123, 255, 0.1)',
        data: [235000, 435000, 366000, 444000, 765000, 266000, 448000, 569000],
        lineTension: 0,
    		fill: true
      },],
    },

    // Configuration options go here
    options: {
    	title: {
        display: true,
        fontSize: 22,
        text: 'Daily Report'
      },
      legend: {
        display: false
      },
      tooltips: {
        displayColors: false,
        callbacks: {
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

  var ctx2 = document.getElementById('montlycostChart').getContext('2d');
  var grd2 = ctx2.createLinearGradient(500, 0, 0, 0);
  grd2.addColorStop(0, "rgba(0, 123, 255, 1)");
  grd2.addColorStop(1, "rgba(0, 123, 255, 0.3)");

	var budgetvsactualChart = new Chart(document.getElementById('budgetvsactualChart').getContext('2d'), {
		type: 'horizontalBar',
    data: {
      labels: ["Budget", "Actual"],
      datasets: [
        {
          label: "Total",
          backgroundColor: grd2,
          borderColor: "rgba(0, 123, 255, 1)",
          borderWidth: 1,
          data: [526700 , 400000]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        fontSize: 22,
        text: 'Budget vs Actual'
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

  var ctx = document.getElementById('montlycostChart').getContext('2d');
  var grd = ctx.createLinearGradient(0, 0, 0, 200);
  grd.addColorStop(0, "rgba(0, 123, 255, 1)");
  grd.addColorStop(1, "rgba(0, 123, 255, 0.3)");

	var montlycostChart = new Chart(document.getElementById('montlycostChart').getContext('2d'), {
		type: 'bar',
    data: {
      labels: ["Bensin", "Sewa Kendaraan", "Service", "Lainnya"],
      datasets: [
        {
          backgroundColor: grd,
          borderColor: "rgba(0, 123, 255, 1)",
          borderWidth: 1,
          data: [453000,400000,635000,543000]
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

</script>