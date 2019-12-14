<?php include 'headerMember.php'; ?>
        
<title>Profile</title>
			
			<div class="p-5">
              <div class="text-center">
                <img src="researcher.png" width="150px" height="150px"><br><br>
                <h1 class="h4 text-gray-900 mb-4">Profile</h1>
                <hr><br>
              </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="First Name">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Last Name">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="University Name">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" placeholder="Faculty Name">
                </div>

                <div class="form-group">
                    <select class="form-control" id="researcherType">
                      <option value="Student">Student</option>
                      <option value="Academician">Academician</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" id="educationLevel">
                      <option value="Undergraduate">Undergraduate</option>
                      <option value="Postgraduate">Postgraduate</option>
                    </select>
                </div>

                <a href="profile.php" style="position: absolute; bottom: 80px; right: 130px;"class="btn btn-primary">
                  Cancel
                </a>
                <a href="profile.php" style="position: absolute; bottom: 80px; right: 50px;"class="btn btn-primary">
                  Submit
                </a>
              </table></center>

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