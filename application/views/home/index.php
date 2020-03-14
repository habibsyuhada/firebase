<div class="main-content-inner mt-4">
  <div class="row my-4">
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3">
    		<h4 class="header-title mb-0"><b>Today's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(1,9) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3">
    		<h4 class="header-title mb-0"><b>This Month's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(10,30) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3">
    		<h4 class="header-title mb-0"><b>This Year's Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(60,110) ?></h1>
    	</div>
    </div>
    <div class="col-xl-3 col-md-3">
    	<div class="bg-white text-center p-3">
    		<h4 class="header-title mb-0"><b>Summary All Order</b></h4>
    		<h1 class="my-2 font-weight-bold"><?php echo rand(111,200) ?></h1>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3">
    		<canvas id="dailyreportChart"></canvas>
    	</div>
    </div>
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white p-3">
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
              <td><a href="#" class="btn btn-sm btn-secondary">Detail</a></td>
            </tr>
          	<?php endfor; ?>
          </tbody>
      </table>
    	</div>
    </div>
  </div>
  <div class="row my-4">
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3">
    		<canvas id="budgetvsactualChart"></canvas>
    	</div>
    </div>
    <div class="col-xl-6 col-md-6">
    	<div class="bg-white text-center p-3">
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
        label: 'Late',
        borderColor: '#D33F49',
        backgroundColor: '#D33F49',
        data: [0, 10, 5, 2, 4, 8, 6, 1],
        lineTension: 0,
    		fill: false
      },{
        label: 'Perfect',
        borderColor: '#21FA90',
        backgroundColor: '#21FA90',
        data: [11, 15, 12, 19, 20, 16, 11, 12],
        lineTension: 0,
    		fill: false
      },{
        label: 'Outstanding',
        borderColor: '#30BCED',
        backgroundColor: '#30BCED',
        data: [1, 2, 3, 2, 4, 6, 8, 0],
        lineTension: 0,
    		fill: false
      },{
        label: 'Total',
        borderColor: '#0C090D',
        backgroundColor: '#0C090D',
        data: [26, 25, 21, 27, 26, 22, 21, 20],
        lineTension: 0,
    		fill: false
      },],
    },

    // Configuration options go here
    options: {
    	title: {
        display: true,
        fontSize: 22,
        text: 'Daily Report'
      },
      scales: {
        yAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Total Order",
            fontStyle: "bold"
          }
        }],
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Date",
            fontStyle: "bold"
          }
        }]
      }
    }
	});

	var budgetvsactualChart = new Chart(document.getElementById('budgetvsactualChart').getContext('2d'), {
		type: 'horizontalBar',
    data: {
      labels: ["Budget", "Actual"],
      datasets: [
        {
          label: "Total",
          backgroundColor: ["#21FA90", "#d33f49"],
          data: [5267,2478]
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
      scales: {
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Total (Rp.)",
            fontStyle: "bold"
          }
        }]
      }
    }
	});

	var montlycostChart = new Chart(document.getElementById('montlycostChart').getContext('2d'), {
		type: 'bar',
    data: {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
        {
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [133,221,783,2478,500]
        },
      ]
    },
    options: {
    	legend: { display: false },
      title: {
        display: true,
        fontSize: 22,
        text: 'Monthly Cost Actual'
      },
      scales: {
        yAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Total Cost (Rp.)",
            fontStyle: "bold"
          }
        }],
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Month",
            fontStyle: "bold"
          }
        }]
      }
    }
	});

</script>