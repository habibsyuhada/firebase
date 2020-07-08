<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<form>
    			<div id="loading_firebase" style="display: none;">
            <div class="loader my-4"></div>
            <h5 class="text-center">Loading...</h5>
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
            <select class="form-control" name="role" required>
              <option value="">---</option>
              <option value="User">User</option>
              <option value="Kepala_Bidang">Verificator</option>
              <option value="Driver">Driver</option>
              <option value="Cost Manager">Cost Manager</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Department</label>
            <input class="form-control" type="text" name="department" placeholder="---" required>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
          <a href="<?php echo base_url() ?>user" class="btn btn-secondary">Back</a>
    		</form>
    	</div>
    </div>
  </div>
</div>
<script type="text/javascript">
  <?php if($module == 'new'): ?>
	$("form").submit(function(e){
    e.preventDefault();
    sweetalert('loading', 'Please Wait...');
    var data = {
    	Name : $("input[name=name]").val(),
    	Email : $("input[name=email]").val(),
    	Role : $("select[name=role]").val(),
    	Department : $("input[name=department]").val(),
      Password : '123456',
    }
    // console.log(data);
    firebase.auth().createUserWithEmailAndPassword(data.Email, data.Password)
    .then(function(res){
      // console.log(res);
      send_data(data, res.user)
    }).catch(function(error) {
      console.log(error.message);
      sweetalert('error', error.message);
    });
    
		return  false;
  });

	async function send_data(data, user) {
    console.log(user);
    console.log(user.uid);
		var alert;
		db.collection("Users").doc(user.uid).set({
	    Nama: data.Name,
	    Email: data.Email,
	    Role: data.Role,
	    Departemen: data.Department,
	    Password: data.Password,
		})
		.then(function() {
		  // console.log(docRef);
      // console.log("Document written with ID: ", docRef.id);
      sweetalert('success', 'You successfully insert new user.');
      $('form').trigger("reset");
		})
		.catch(function(error) {
		  console.error("Error adding document: ", error);
      sweetalert('error', error.message);
		});
	}
  <?php elseif($module == 'edit'): ?>
    $('#loading_firebase').show();
    var docRef = db.collection("Users").doc("<?php echo $id; ?>");
    docRef.get().then(function(doc) {
      if (doc.exists) {
        var data = doc.data();
        $("input[name=name]").val(data.Nama);
        $("input[name=email]").val(data.Email);
        $("select[name=role]").val(data.Role);
        $("input[name=department]").val(data.Departemen);
        $('#loading_firebase').hide();

        $("input[name=email]").attr('disabled', true);
      } else {
        window.location = '<?php echo base_url() ?>user';
      }
    }).catch(function(error) {
      console.log("Error getting document:", error);
    });

    $("form").submit(function(e){
      e.preventDefault();
      sweetalert('loading', 'Please Wait...');
      var data = {
        Nama : $("input[name=name]").val(),
        // Email : $("input[name=email]").val(),
        Role : $("select[name=role]").val(),
        Departemen : $("input[name=department]").val(),
      }
      docRef = db.collection("Users").doc("<?php echo $id; ?>");
      docRef.update(data)
      .then(function() {
        sweetalert("success", "Document successfully updated!");
      })
      .catch(function(error) {
        sweetalert("error", "Error updating document: "+error);
      });
    });

  <?php endif; ?>
</script>