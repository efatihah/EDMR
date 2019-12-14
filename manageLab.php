<?php include 'headerMember.php'; ?>
        
<title>Manage Lab</title>
<!-- Begin Page Content -->
  <div class="container-fluid">

  <!-- Page Heading -->
          <h1 class="h3 mb-0 text-gray-800">Manage Lab</h1>
          <a href="addLab.php" style="position: absolute; right:10px; top:88px; width:80px" class="btn btn-primary btn-user btn-block">Add</a>
            <div style="margin: auto; width: 90%; padding: 10px;" class="col-xl-10 col-lg-9">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Lab A</h6>
                  
                </div>
                <div class="card-body">
                  <p>Library UMP provides 2 computer laboratories which  accommodates 60 PCs and 30 PCs respectively.  Both laboratories are equipped with  internet , self-service printing , Microsoft Office etc.</p>
                  <img src="lab.jpg" width="220px" height="190px"></img>
                  <br><br>
                  <div class="btn-group" style="position: absolute; right:30px; bottom:10px; width:80px">
                    <button type="button" class="btn btn-primary">Action</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="editLab.php">Edit</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                </div>
                </div>
              </div>

  </div>

<!-- End of Page Wrapper -->

  </div>
<!-- End of Page Wrapper -->

<?php include 'footer.php'; ?>

</body>

</html>

<script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/sb-admin-2.min.js"></script>
