<?php include 'headerMember.php'; ?>
        
<title>Research Publication</title>
			
			<div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">New Research Publication</h1>
                <hr><br>
              </div>
			<form class="user">
                <div class="form-group">
                    <select class="form-control" id="publicationType">
                      <option value="Published Research">Published Research</option>
                      <option value="Conference Paper">Conference Paper</option>
                      <option value="Article">Preprint</option>
                      <option value="Poster">Poster</option>
                      <option value="Presentation">Presentation</option>
                      <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                  <input type="file" class="form-control" id="exampleInputEmail" placeholder="Institutional Email Address">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputAuthor" placeholder="Author's Name">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control"  id="exampleDescription" placeholder="Description">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" class="form-control" id="exampleInputDate" placeholder="Date">
                  </div>

                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="exampleDOI" placeholder="DOI">
                  </div>

                 
                </div>
                <a href="publicationProject.php" style="position: absolute; right: 50px;"class="btn btn-primary">
                  Submit
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