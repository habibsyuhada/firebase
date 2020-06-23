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
            <label class="col-form-label">Department Name</label>
            <input class="form-control" type="text" name="nama" placeholder="---" required>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
          <a href="<?php echo base_url() ?>department" class="btn btn-secondary">Back</a>
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
    	nama : $("input[name=nama]").val(),
    }

    db.collection("Bidang").add({
      nama : $("input[name=nama]").val(),
    })
    .then(function() {
      sweetalert('success', 'You successfully insert new user.');
      $('form').trigger("reset");
    })
    .catch(function(error) {
      console.error("Error adding document: ", error);
      sweetalert('error', error.message);
    });

		return  false;
  });

  <?php elseif($module == 'edit'): ?>
    $('#loading_firebase').show();
    var docRef = db.collection("Bidang").doc("<?php echo $id; ?>");
    docRef.get().then(function(doc) {
      if (doc.exists) {
        var data = doc.data();
        $("input[name=nama]").val(data.nama);
        $('#loading_firebase').hide();
      } else {
        window.location = '<?php echo base_url() ?>department';
      }
    }).catch(function(error) {
      console.log("Error getting document:", error);
    });

    $("form").submit(function(e){
      e.preventDefault();
      sweetalert('loading', 'Please Wait...');
      
      var data = {
        nama : $("input[name=nama]").val(),
      }
      docRef = db.collection("Bidang").doc("<?php echo $id; ?>");
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