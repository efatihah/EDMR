<?php include 'headerMember.php'; ?>
        
<title>List of Equipment</title>
<!-- Begin Page Content -->
  <div class="container-fluid">

  <!-- Page Heading -->
          <h1 class="h3 mb-0 text-gray-800">List of Equipment</h1>
          <a href="manageEquipment.php" style="position: absolute; right:10px; top:90px; width:180px" class="btn btn-primary btn-user btn-block">Manage Equipment</a>
            <div style="margin: auto; width: 90%; padding: 10px;" class="col-xl-10 col-lg-9">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Equipment A</h6>
                </div>
                <div class="card-body">
                  <img src="lab.jpg" width="250px" height="120px"></img><br><br>
                  <table  width="100%">
                    <tr>
                      <td width="50%"><b>Equipment Information</b></td>
                      <td width="10%"></td>
                      <td width="40%"><b>Reserve Equipment</b></td>
                    </tr>
                    <tr>
                      <td><p>Nurul Fatihah</p></td>
                      <td style="text-align: right">Date:</td>
                      <td>
                          <input type="date" class="form-control" id="exampleInput" placeholder="Date">
                      </td>
                    </tr>
                    <tr>
                      <td>Library UMP provides 2 computer laboratories which  accommodates 60 PCs and 30 PCs respectively.  Both laboratories are equipped with  internet , self-service printing , Microsoft Office etc.</td>
                      <td style="text-align: right">Start Time: <br> End Time:</td>
                      <td>
                          <input type="time" class="form-control" id="exampleInput" placeholder="Date">
                          <input type="time" class="form-control" id="exampleInput" placeholder="Date">
                          
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        
                      </td>
                      <td style="text-align: right">Quantity: <br> Description:</td>
                      <td>
                          <input type="number" class="form-control" placeholder="Quantity">
                          <input type="text" class="form-control" id="exampleInput" placeholder="Description">
                          <br></br>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><a href="" style="position: absolute; right: 20px; bottom:10px"class="btn btn-primary">Reserve</a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div style="margin: auto; width: 90%; padding: 10px;" class="col-xl-10 col-lg-9">
              <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Equipment B</h6>
                </div>
                <div class="card-body">
            <img src="lab.jpg" width="250px" height="120px"></img><br><br>
                  <table  width="100%">
                    <tr>
                      <td width="50%"><b>Equipment Information</b></td>
                      <td width="10%"></td>
                      <td width="40%"><b>Reserve Equipment</b></td>
                    </tr>
                    <tr>
                      <td><p>Nurul Fatihah</p></td>
                      <td style="text-align: right">Date:</td>
                      <td>
                          <input type="date" class="form-control" id="exampleInput" placeholder="Date">
                      </td>
                    </tr>
                    <tr>
                      <td>Library UMP provides 2 computer laboratories which  accommodates 60 PCs and 30 PCs respectively.  Both laboratories are equipped with  internet , self-service printing , Microsoft Office etc.</td>
                      <td style="text-align: right">Start Time: <br> End Time:</td>
                      <td>
                          <input type="time" class="form-control" id="exampleInput" placeholder="Date">
                          <input type="time" class="form-control" id="exampleInput" placeholder="Date">
                          
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                        
                      </td>
                      <td style="text-align: right">Quantity: <br> Description:</td>
                      <td>
                          <input type="number" class="form-control" placeholder="Quantity">
                          <input type="text" class="form-control" id="exampleInput" placeholder="Description">
                          <br></br>
                      </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><a href="" style="position: absolute; right: 20px; bottom:10px"class="btn btn-primary">Reserve</a></td>
                    </tr>
                  </table>
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
