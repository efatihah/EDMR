<?php include 'headerMember.php'; ?>
        
<title>Research Publication</title>
			
			<div class="p-5">
              <div class="text-center">
                <h3 class="h4 text-gray-900 mb-4">What project does this research publication belong to?</h3>
                <hr><br>
              </div>
			<form class="user">
                <div class="form-group">
                    <select class="form-control" id="publicationType" placeholder="Pick a project">
                      <option value="A">Project A</option>
                      <option value="B">Project B</option>
                    </select>
                </div>
                 
                <a href="researchPublication.php" style="position: absolute; right: 130px;">
                  Not from a project?
                </a><a href="researchPublication.php" style="position: absolute; right: 50px;"class="btn btn-primary">
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