<?php 
// Insert Code here for the HEADER

?>
<!-- // You can add Navbar Code here -->
<?php systemfunctions::sessionStart(); ?>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-code"></i> Employees MIS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <!-- <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Ball Bearings</a>
      <a class="nav-item nav-link" href="#">TNT Boxes</a>
    </div> -->
    <ul class="nav navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link " href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user-plus"></i> New Employee</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Employee's Profile</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-briefcase"></i> Job Positions</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> Employee Management</a>
      </li>
      <!-- <li class="nav-item active">
        <a href="#clickbutton" class="btn btn-light">Job Positions</a>
      </li> -->

      
      <li>
        <hr>
      </li>
      
      <li class="nav-item">
        <div class="btn-group">
          <button type="button" class="btn btn-outline-light"><?php echo $_SESSION['txtusername']; ?></button>
          <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" data-toggle="modal" data-target="#editProfile">Edit Profile</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#changePass" data-backdrop="static">Change Password</a>
            <a class="dropdown-item">
              <form method="post" class="form-inline my-2 my-lg-0">
                <button class="btn btn-danger btn-block my-2 my-sm-0" name="btnlogout">Logout <span class="fa fa-sign-out"></span></button>
              </form>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>  
 </nav>
<br>

