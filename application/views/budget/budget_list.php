<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<div class="data-tables datatable-primary">
	    		<table class="table table-bordered text-center datatables">
	          <thead class="text-uppercase bg-primary">
	            <tr class="text-white">
	              <th>Month Budget</th>
	              <th>Total Budget</th>
	              <th>Action</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php //for ($i=1; $i < 5; $i++): ?>
	            <!-- <tr>
	              <th><?php //echo $i ?></th>
	              <td>Habib Syuhada</td>
	              <td>Driver <?php //echo $i ?></td>
	              <td>BP 1234 QA</td>
	              <td>10:05</td>
	              <td><a href="#" class="btn btn-sm btn-secondary">Detail</a></td>
	            </tr> -->
	          	<?php //endfor; ?>
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
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December',];
	function load_data2() {
		db.collection("Budget")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        console.log(doc.data());
        var data = doc.data();
        var action = "<button type='button' class='btn btn-sm btn-danger' onclick='delete_data(this)' data-key='"+doc.id+"'><i class='fa fa-trash'></i></button>"+
					"&nbsp;<a href='<?php echo base_url() ?>budget/budget_edit/"+doc.id+"' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i></a>";
        var json_arr = [months[(data.month - 1)] || "", data.total || "", action];
        json_all.push(json_arr);
      });

      // console.log(JSON.stringify(json_all));
	    $('.datatables').DataTable().clear().destroy();
	    $('.datatables').DataTable({
	    	responsive: true,
	    	data: json_all,
	    	order:[]
	    }).draw();
	    $('#loading_firebase').hide();
    });
	}

	async function delete_data(btn) {
		Swal.fire({
      title: 'Are you sure to <b class="text-danger">&nbsp;Delete&nbsp;</b> this?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
      if (result.value) {
      	sweetalert('loading', 'Please Wait...');
        var key = $(btn).attr("data-key");
      	db.collection("Budget").doc(key).delete().then(function() {
					// load_data();
			    sweetalert('success', 'Document successfully deleted!');
				}).catch(function(error) {
			    sweetalert('error', error);
				});
				
      }
    })
	}
</script>