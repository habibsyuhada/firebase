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
            <label class="col-form-label">Year Budget</label>
            <input class="form-control" type="number" name="year" placeholder="---" required>
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

    var validRef = db.collection("Budget").where("year", "==", $("input[name=year]").val()).where("month", "==", $("select[name=month]").val());
    validRef.get().then(snap => {
      size = snap.size;
      if(size < 1){
        db.collection("Budget").add({
          year : $("input[name=year]").val(),
          month : $("select[name=month]").val(),
          total : $("input[name=total]").val(),
        })
        .then(function() {
          sweetalert('success', 'You successfully insert new budget.');
          $('form').trigger("reset");
        })
        .catch(function(error) {
          console.error("Error adding document: ", error);
          sweetalert('error', error.message);
        });
      }
      else{
        sweetalert("error", "Duplicate Data");
      }
    }).catch(function(error) {
      console.log("Error getting document:", error);
    });

		return  false;
  });

  <?php elseif($module == 'edit'): ?>
    var def_year;
    var def_month;
    $('#loading_firebase').show();
    var docRef = db.collection("Budget").doc("<?php echo $id; ?>");
    docRef.get().then(function(doc) {
      if (doc.exists) {
        var data = doc.data();
        $("input[name=year]").val(data.year);
        $("select[name=month]").val(data.month);
        $("input[name=total]").val(data.total);
        $('#loading_firebase').hide();
        def_year = data.year;
        def_month = data.month;
      } else {
        window.location = '<?php echo base_url() ?>budget';
      }
    }).catch(function(error) {
      console.log("Error getting document:", error);
    });

    $("form").submit(function(e){
      e.preventDefault();
      sweetalert('loading', 'Please Wait...');
      if(def_year == $("input[name=year]").val() && def_month == $("select[name=month]").val()){
        sweetalert("success", "Document successfully updated!");
      }
      else{
        var validRef = db.collection("Budget").where("year", "==", $("input[name=year]").val()).where("month", "==", $("select[name=month]").val());
        validRef.get().then(snap => {
          size = snap.size;
          if(size < 1){
            var data = {
              year : $("input[name=year]").val(),
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
          }
          else{
            sweetalert("error", "Duplicate Data");
          }
        }).catch(function(error) {
          console.log("Error getting document:", error);
        });
      }
    });

  <?php endif; ?>
</script>