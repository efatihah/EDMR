<?php include 'headerMember.php'; ?>
        
<title>Add Project</title>
			
			<div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Research Project</h1>
                <hr><br>
              </div>
			<form class="user">
                
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail" placeholder="Project Title">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputAuthor" placeholder="Project Goal">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control"  id="exampleDescription" placeholder="Collaborator">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control" id="exampleInputDate" placeholder="Hypothesis">
                  </div>

                  <div class="form-group">
                    <select class="form-control" id="publicationType">
                      <option value="Published Research">Active</option>
                      <option value="Conference Paper">Non-Active</option>
                    </select>
                </div>

                 
                </div>
                <a href="project.php" style="position: absolute; right: 50px;"class="btn btn-primary">
                  Submit
                </a>
                <a href="project.php" style="position: absolute; right: 130px;"class="btn btn-primary">
                  Cancel
                </a>
              </form>
            </div>

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