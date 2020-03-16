<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<form>
    			<div id="alert_form">
    			</div>
    			<div class="form-group">
            <label class="col-form-label">Name</label>
            <input class="form-control" type="text" name="name" placeholder="---" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Email</label>
            <input class="form-control" type="email" name="email" placeholder="---" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Role</label>
            <input class="form-control" type="text" name="role" placeholder="---" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Department</label>
            <input class="form-control" type="text" name="department" placeholder="---" required>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
    		</form>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$("form").submit(function(e){
    e.preventDefault();
    var data = {
    	Name : $("input[name=name]").val(),
    	Email : $("input[name=email]").val(),
    	Role : $("input[name=role]").val(),
    	Department : $("input[name=department]").val(),
    }
    console.log(data);
    send_data(data)
		return  false;
  });

	async function send_data(data) {
		var alert;
		db.collection("Users").add({
	    Nama: data.Name,
	    Email: data.Email,
	    Role: data.Role,
	    Departemen: data.Department,
	    Password: "12345",
		})
		.then(function(docRef) {
		  console.log("Document written with ID: ", docRef.id);
		  alert = '<div class="alert alert-success">'+
              	'<strong>Well done!</strong> You successfully insert new user.'+
            	'</div>';
      $("#alert_form").html(alert);
      $('form').trigger("reset");
		})
		.catch(function(error) {
		  console.error("Error adding document: ", error);
		  alert = '<div class="alert alert-danger">'+
      	'<strong>Error!</strong> '+error+'.'+
    	'</div>';
      $("#alert_form").html(alert);
      $('form').trigger("reset");
		});
	}
</script>