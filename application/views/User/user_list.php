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
	      </div>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	db.collection("Users").get().then((querySnapshot) => {
		var json_all = [];
    querySnapshot.forEach((doc) => {
        // console.log(`${doc.id} => ${doc.data()}`);
        // console.log(doc.id);
        // console.log(doc.data());

        var data = doc.data();
        // console.log(myJSON);
        // console.log(doc.id);
        var json_arr = [data.Nama || "", data.Email || "", data.Role || "", data.Departemen || "", data.Password || "", "<button type='button' class='btn btn-sm btn-danger' onclick='delete_data(this)' data-key='"+doc.id+"'><i class='fa fa-trash'></i></button>"];
        json_all.push(json_arr);
    });
    console.log(JSON.stringify(json_all));
    $('.datatables').DataTable({
    	responsive: true,
    	data: json_all,
    	order:[]
    })
	});

	function delete_data(btn) {
		var key = $(btn).attr("data-key");
		db.collection("Users").doc(key).delete().then(function() {
	    alert("Document successfully deleted!");
		}).catch(function(error) {
	    alert("Error removing document: ", error);
		});
	}
</script>