<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<div class="data-tables datatable-primary">
	    		<table class="table table-bordered text-center datatables">
	          <thead class="text-uppercase bg-primary">
	            <tr class="text-white">
	              <th>Name</th>
	              <th>Email</th>
	              <th>Role</th>
	              <th>Departement</th>
	              <th>Password</th>
	              <th>Action</th>
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

	function load_data2() {
		db.collection("Users")
    .onSnapshot(function(querySnapshot) {
    	var json_all = [];
      querySnapshot.forEach(function(doc) {
        console.log(doc.data());
        var data = doc.data();
        var action = "<button type='button' class='btn btn-sm btn-danger' onclick='delete_data(this)' data-key='"+doc.id+"'><i class='fa fa-trash'></i></button>"+
        	"&nbsp;<a href='<?php echo base_url() ?>user/user_edit/"+doc.id+"' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i></a>";
        var json_arr = [data.Nama || "", data.Email || "", data.Role || "", data.Departemen || "", data.Password || "", action];
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

	function load_data() {
		$('#loading_firebase').show();
		db.collection("Users").get().then((querySnapshot) => {
			var json_all = [];
	    querySnapshot.forEach((doc) => {
	        // console.log(`${doc.id} => ${doc.data()}`);
	        // console.log(doc.id);
	        // console.log(doc.data());

	        var data = doc.data();
	        // console.log(myJSON);
	        // console.log(doc.id);
	        var action = "<button type='button' class='btn btn-sm btn-danger' onclick='delete_data(this)' data-key='"+doc.id+"'><i class='fa fa-trash'></i></button>"+
	        	"&nbsp;<a href='<?php echo base_url() ?>user/user_edit/"+doc.id+"' class='btn btn-sm btn-warning'><i class='fa fa-pencil'></i></a>";
	        var json_arr = [data.Nama || "", data.Email || "", data.Role || "", data.Departemen || "", data.Password || "", action];
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
		}).catch(function(error) {
		  console.log("Error getting document:", error);
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
      	db.collection("Users").doc(key).delete().then(function() {
					// load_data();
			    sweetalert('success', 'Document successfully deleted!');
				}).catch(function(error) {
			    sweetalert('error', error);
				});
				
      }
    })
	}
</script>