<style>
  .bg-gradient-primary {
    background-color: #4e73df;
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(10%,#4e73df),to(#224abe));
    background-image: linear-gradient(180deg,#bd2a31 10%,#224abe 100%);
    background-size: cover;
}
  </style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
	   <?php
if($_SESSION)
{
	?>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="ticket.php">
<?php
} else {
	?>
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
<?php 
}
?>
	  <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-smile"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN <sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!--<!-- Heading 
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.php">Buttons</a>
            <a class="collapse-item" href="cards.php">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.php">Colors</a>
            <a class="collapse-item" href="utilities-border.php">Borders</a>
            <a class="collapse-item" href="utilities-animation.php">Animations</a>
            <a class="collapse-item" href="utilities-other.php">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider 
      <hr class="sidebar-divider">

      <!-- Heading 
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.php">Register</a>
            <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.php">404 Page</a>
            <a class="collapse-item" href="blank.php">Blank Page</a>
          </div>
        </div>
      </li>

       Nav Item - Charts 
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-play"></i>
          <span>Charts</span></a>
      </li>-->
	 <?php
if($_SESSION)
{
	?>
	 <li class="nav-item">
        <a class="nav-link" href="ticket.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">GENERATE TENDER</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">VIEW TENDER</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="allot_tender.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">VIEW ALLOTED TENDER</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="biddings.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">BIDDINGS</span></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="confirm_tenders.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">CONFIRM BIDDINGS</span></a>
      </li>
	   
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-play"></i>
          <span style="font-wight:bold">LOGOUT</span></a>
      </li>
	  <?php
}
else
{
	?>
	  <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-play"></i>
          <span>ADMIN LOGIN</span></a>
      </li>
	  <?php
}

?>
	   
	 

      <!-- Nav Item - Tables -->
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>