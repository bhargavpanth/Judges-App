<?php require 'partials/navbar.php' ?>        
      <div class="container-fluid">  
        <ul class="nav navbar-default">
            <li class="text-center"><h4 style="text-color:#353535;">TEAMS</h4></li>
        </ul>
        
        <div>  
          
          <div class="row" style="background-color:#30A292; margin-top: 10px; margin-bottom:10px;">
            <div class="col-md-4">
              <h5 class="text-center">Team Name</h5>
            </div>
            <div class="col-md-4">
              <h5 class="text-center">Team ID</h5>
            </div>
            <div class="col-md-4 text-center">    
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-search" aria-hidden="true"> Location</span>
              </button>
            </div>
          </div>

          <div class="row" style="background-color:#30A292; margin-top: 10px; margin-bottom:10px;">
            <div class="col-md-4">
              <h5 class="text-center">Team Name</h5>
            </div>
            <div class="col-md-4">
              <h5 class="text-center">Team ID</h5>
            </div>
            <div class="col-md-4 text-center">    
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-search" aria-hidden="true"> Location</span>
              </button>
            </div>
          </div><br>

          <div class="modal fade" role="dialog" aria-labelledby="gridSystemModalLabel"id="myModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="gridSystemModalLabel">LOCATION</h4>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>