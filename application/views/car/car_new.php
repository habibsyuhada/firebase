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
            <label class="col-form-label">Car's Name</label>
            <input class="form-control" type="text" name="nama_mobil" placeholder="---" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Police Number</label>
            <input class="form-control" type="text" name="no_polisi" placeholder="---" required>
          </div>
          <div class="form-group">
            <label class="col-form-label">Picture</label>
            <input class="form-control" type="file" id="files" name="files[]" multiple placeholder="---" <?php echo ($module == 'new' ? 'required' : '') ?>>
          </div>
          <?php if($module == 'edit'): ?>
          <div class="form-group">
            <label class="col-form-label">Old Picture :</label>
            <div id="old_picture"><div class="loader"></div></div>
          </div>
          <?php endif; ?>
          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
          <a href="<?php echo base_url() ?>car" class="btn btn-secondary">Back</a>
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
    var file = document.getElementById("files").files[0];
    var data = {
    	nama_mobil : $("input[name=nama_mobil]").val(),
    	no_polisi : $("input[name=no_polisi]").val(),
    	src_gambar : file.name,
    }

    //dynamically set reference to the file name
    var thisRef = storageRef.child("mobil/"+file.name);

    //put request upload file to firebase storage
    thisRef.put(file).then(function(snapshot) {
      db.collection("Car").add({
        nama_mobil : $("input[name=nama_mobil]").val(),
        no_polisi : $("input[name=no_polisi]").val(),
        src_gambar : file.name,
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
    });

		return  false;
  });

  <?php elseif($module == 'edit'): ?>
    $('#loading_firebase').show();
    var docRef = db.collection("Car").doc("<?php echo $id; ?>");
    docRef.get().then(function(doc) {
      if (doc.exists) {
        var data = doc.data();
        $("input[name=nama_mobil]").val(data.nama_mobil);
        $("input[name=no_polisi]").val(data.no_polisi);
        storageRef.child('mobil/'+data.src_gambar).getDownloadURL().then(function(url) {
					$("#old_picture").html("<img style='max-height: 400px; max-width: 400px;' src='"+url+"'/>");
				}).catch(function(error) {
          $("#old_picture").html("<i class='text-danger'>Picture Not Found</i>");
					console.log(error);
				});
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
      var file = document.getElementById("files").files[0];
      
      var data;
      if(typeof file === "undefined"){
        data = {
          nama_mobil : $("input[name=nama_mobil]").val(),
          no_polisi : $("input[name=no_polisi]").val(),
        }
        docRef = db.collection("Car").doc("<?php echo $id; ?>");
        docRef.update(data)
        .then(function() {
          sweetalert("success", "Document successfully updated!");
        })
        .catch(function(error) {
          sweetalert("error", "Error updating document: "+error);
        });
      }
      else{
        data = {
          nama_mobil : $("input[name=nama_mobil]").val(),
          no_polisi : $("input[name=no_polisi]").val(),
          src_gambar : file.name,
        }
        //dynamically set reference to the file name
        var thisRef = storageRef.child("mobil/"+file.name);

        // //put request upload file to firebase storage
        thisRef.put(file).then(function(snapshot) {
          docRef = db.collection("Car").doc("<?php echo $id; ?>");
          docRef.update(data)
          .then(function() {
            $("#old_picture").html('<div class="loader"></div>');
            sweetalert("success", "Document successfully updated!");
            storageRef.child('mobil/'+data.src_gambar).getDownloadURL().then(function(url) {
              $("#old_picture").html("<img style='max-height: 400px; max-width: 400px;' src='"+url+"'/>");
            }).catch(function(error) {
              $("#old_picture").html("<i class='text-danger'>Picture Not Found</i>");
              console.log(error);
            });
          })
          .catch(function(error) {
            sweetalert("error", "Error updating document: "+error);
          });
        });
      }
    });

  <?php endif; ?>
</script>