<?php include 'headerMember.php'; ?>
     <title>Reservation Status</title>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <a href="reservationRequest.php" style="position: absolute; right: 30px" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
          Reservation <br> Request</a>
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">List of Reservation Status</h1>
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
                      <th width="20%">Type</th>
                      <th width="20%">Lab & Equipment Name</th>
                      <th width="10%">Date</th>
                      <th width="10%">Start Time</th>
                      <th width="10%">End Time</th>
                      <th width="10%">Quantity</th>
                      <th width="20%">Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Type</th>
                      <th>Lab & Equipment Name</th>
                      <th>Date</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Quantity</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Lab</td>
                      <td>Lab C</td>
                      <td>10-11-2019</td>
                      <td>10:00AM</td>
                      <td>17:00PM</td>
                      <td>0</td>
                      <td>Requested</td>
                    </tr>
                    <tr>
                      <td>Equipment</td>
                      <td>VR Head-Mounted</td>
                      <td>12-12-2019</td>
                      <td>09:00AM</td>
                      <td>13:00PM</td>
                      <td>2</td>
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
