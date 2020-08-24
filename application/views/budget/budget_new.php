<div class="main-content-inner">
  <div class="row my-4">
    <div class="col-12">
    	<div class="bg-white p-3">
    		<form>
    			<div id="loading_firebase" style="display: none;">
            <div class="loader my-4"></div>
            <h5 class="text-center">Loading...</h5>
          </div>
          <?php
            $months = array(
              'January',
              'February',
              'March',
              'April',
              'May',
              'June',
              'July ',
              'August',
              'September',
              'October',
              'November',
              'December',
            );
          ?>
    			<div class="form-group">
            <label class="col-form-label">Month Budget</label>
            <select class="form-control" name="month" required>
              <option value="">---</option>
              <?php foreach ($months as $key => $value) : ?>
              <option value="<?php echo ($key + 1) ?>"><?php echo $value ?></option>
              <?php endforeach; ?>
            </select>
          </div>
    			<div class="form-group">
            <label class="col-form-label">Total Budget</label>
            <input class="form-control" type="number" name="total" placeholder="---" required>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
          <a href="<?php echo base_url() ?>budget" class="btn btn-secondary">Back</a>
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

    db.collection("Budget").add({
      month : $("select[name=month]").val(),
      total : $("input[name=total]").val(),
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
    var docRef = db.collection("Budget").doc("<?php echo $id; ?>");
    docRef.get().then(function(doc) {
      if (doc.exists) {
        var data = doc.data();
        $("select[name=month]").val(data.month);
        $("input[name=total]").val(data.total);
        $('#loading_firebase').hide();
      } else {
        window.location = '<?php echo base_url() ?>budget';
      }
    }).catch(function(error) {
      console.log("Error getting document:", error);
    });

    $("form").submit(function(e){
      e.preventDefault();
      sweetalert('loading', 'Please Wait...');
      
      var data = {
        month : $("select[name=month]").val(),
        total : $("input[name=total]").val(),
      }
      docRef = db.collection("Budget").doc("<?php echo $id; ?>");
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