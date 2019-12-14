<?php include 'headerAdmin.php'; ?>
     <title>List of Research Group</title>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <a href="requestResearchGroup.php" style="position: absolute; right: 30px" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
          Requested <br> Research Group</a>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">List of Research Group</h1>
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
                      <th width="20%">Research Group Name</th>
                      <th width="20%">Member Name</th>
                      <th width="40%">Description</th>
                      <th width="20%">Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Research Group Name</th>
                      <th>Member Name</th>
                      <th>Description</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Software Engineering Research Group (SERG)</td>
                      <td>Associate Professor Dr. Mazlina Abdul Majid</td>
                      <td>This RG focused on research, consultation within the area of software engineering including SQA and RAD (Requirement, Analysis, Design). In particular, the group focuses on Requirement, Analysis, Design, Testing, Quality, Configuration and any related sub areas in SE.</td>
                      <td>Approved</td>
                    </tr>
                    <tr>
                      <td>Soft COmputing & Intelligent System (SPINT)</td>
                      <td>Dr. Noorhuzaimi@Karimah Mohd Noor</td>
                      <td>FSKKP Soft Computing Research & Intelligent System Group (SPINT) is a research group that focusing on intelligent system, decision support system and soft computing. These researches are closely related in broad areas of chemical engineering, biotechnology, automotive, manufacturing etc..</td>
                      <td>Approved</td>
                    </tr>
                    <tr>
                      <td>Multimedia Computing & Computer Vision (MCVIS)</td>
                      <td>Dr. Luhur Bayuaji</td>
                      <td>The Multimedia Computing & Computer Vision (MCVIS) was formed in 2013 to conduct research in the field of multimedia computing, computer vision, image processing and visualization. The vision of this group is to discover new understanding, developing new techniques as well as the applications of the above subjects and spreading excellence through teaching and implementation. This group takes integration approach since there are no clear boundaries with other sub area.</td>
                      <td>Approved</td>
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
