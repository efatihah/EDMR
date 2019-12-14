<?php include 'headerAdmin.php'; ?>
     <title>Report</title>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Report</h1>
			<div class="small mb-1">Enter month and year of publication</div>
                  <div class="dropdown mb-4">
                    
                    <div class="btn-group">
					  <button type="button" class="btn btn-primary">Month</button>
					  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="sr-only"></span>
					  </button>
					  <div class="dropdown-menu">
					      <a class="dropdown-item" href="#">January</a>
	                      <a class="dropdown-item" href="#">February</a>
	                      <a class="dropdown-item" href="#">March</a>
	                      <a class="dropdown-item" href="#">April</a>
	                      <a class="dropdown-item" href="#">May</a>
	                      <a class="dropdown-item" href="#">June</a>
	                      <a class="dropdown-item" href="#">July</a>
	                      <a class="dropdown-item" href="#">August</a>
	                      <a class="dropdown-item" href="#">September</a>
	                      <a class="dropdown-item" href="#">October</a>
	                      <a class="dropdown-item" href="#">November</a>
	                      <a class="dropdown-item" href="#">December</a>
					  </div>
					</div>

					<div class="btn-group">
					  <button type="button" class="btn btn-primary">Year</button>
					  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    <span class="sr-only"></span>
					  </button>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">2017</a>
					    <a class="dropdown-item" href="#">2018</a>
					    <a class="dropdown-item" href="#">2019</a>
					    <a class="dropdown-item" href="#">2020</a>
					  </div>
					</div>
                  </div>

        <center><div class="card position-relative">
                <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Report of Publication Entered</h6>
                </div>
                 <div class="card-body">
                  <div class="mb-3">
                  	<div class="col-xl-4 col-lg-5">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		                  <h6 class="m-0 font-weight-bold text-primary">Publication by Research Group in January 2017</h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body" >
		                  <div class="chart-pie pt-4 pb-2">
		                  <canvas id="myPieChart"></canvas>
		                  </div>
		                  <div class="mt-4 text-center small">
		                    <span class="mr-2">
		                      <i class="fas fa-circle text-primary"></i> SERG
		                    </span>
		                    <span class="mr-2">
		                      <i class="fas fa-circle text-success"></i> SPINT
		                    </span>
		                    <span class="mr-2">
		                      <i class="fas fa-circle text-info"></i> MCVIS
		                    </span>
		                  </div>
		                </div>
		              </div>
		            </div>
		        </div>
		    </div>
		</div></center>
	</div>
</div>
</div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/sb-admin-2.min.js"></script>


<?php include 'footer.php'; ?>