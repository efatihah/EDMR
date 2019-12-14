<?php include 'headerMember.php'; ?>
        
<title>Add Equipment</title>
			
			<div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Add Equipment</h1>
                <hr><br>
              </div>
			<form class="user">
                
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Equipment Name">
                </div>

                <div class="form-group">
                  <input type="number" class="form-control" id="exampleInputEmail" placeholder="Equipment Quantity">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputAuthor" placeholder="Equipment Desription">
                </div>

                <div class="form-group">
                  <input type="file" class="form-control"  id="exampleDescription" placeholder="images">
                </div>
            
                </div>
                <a href="manageEquipment.php" style="position: absolute; right: 50px;"class="btn btn-primary">
                  Submit
                </a>
              </form>
            </div>

<?php include 'footer.php'; ?>

</body>

</html>

<script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/sb-admin-2.min.js"></script>