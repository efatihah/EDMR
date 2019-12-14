<?php include 'headerMember.php'; ?>
     <title>List of Applicant</title>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">List of Applicant</h1>
          <br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="20%">Date</th>
                      <th width="20%">Applicant Name</th>
                      <th width="40%">Job Description</th>
                      <th width="20%">Resume</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Date</th>
                      <th>Applicant Name</th>
                      <th>Job Name</th>
                      <th>Resume</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>10 December 2019</td>
                      <td>Halimah Binti Hamid</td>
                      <td>Research Assistance A</td>
                      <td>
                        <img src="file.png" width="50px" height="50px">
                        <a href="">Resume Halimah</a>
                      </td>
                    </tr>
                    <tr>
                      <td>12 December 2019</td>
                      <td>A Samad Bin Abdul Rahman</td>
                      <td>Research Assistance A</td>
                      <td>
                        <img src="file.png" width="50px" height="50px">
                        <a href="">Resume A Samad</a>
                      </td>
                    </tr>
                    <tr>
                      <td>20 November 2019</td>
                      <td>Nur Haziqah Binti Zainal Abidin</td>
                      <td>Research Assistance B</td>
                      <td>
                        <img src="file.png" width="50px" height="50px">
                        <a href="">Resume Haziqah</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<?php include 'footer.php'; ?>

<script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/sb-admin-2.min.js"></script>

</body>

</html>
