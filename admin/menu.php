

<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="add_country.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Country Mgmt.</span>
        </a>
      </li>
	  <li>
        <a href="add_state.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>State Mgmt.</span>
        </a>
      </li>
	  
	  	  <li>
        <a href="city.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>City Mgmt.</span>
        </a>
      </li>

	  <li>
        <a href="home.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
	  

      <li>
        <a href="inquiry.php">
          <i class="zmdi zmdi-assignment"></i> <span>Inquiry</span>
        </a>
      </li>
<?php if(isset($_SESSION['admin'])!="") { ?>
      <li>
        <a href="trustee_data.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Trustee</span>
        </a>
      </li>
	  <?php } ?>
	<?php if(isset($_SESSION['admin'])!="") { ?>
      <li>
        <a href="staff_mgmt.php">
          <i class="zmdi zmdi-grid"></i> <span>Staff</span>
        </a>
      </li>
<?php } ?>
      <li>
        <a href="p_gallery.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Photo Gallery</span>
         
        </a>
      </li>
	  <li>
        <a href="v_gallery.php" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Video Gallery</span>
        </a>
      </li>
<?php if(isset($_SESSION['admin'])!="") { ?>

      <li>
        <a href="profile.php">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>
<?php } ?>
      

       <li>
        <a href="document_file.php" >
          <i class="zmdi zmdi-account-circle"></i> <span>Document</span>
        </a>
      </li>
	  
	<li>
        <a href="past_events.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Past Events</span>
        </a>
      </li>
	  
	<li>
        <a href="future_event.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Future Events</span>
        </a>
      </li>
	  
	  <li>
        <a href="f_project.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Future Project</span>
         
        </a>
      </li>
	  
	  <li>
        <a href="past_project.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Past Project</span>
         
        </a>
      </li>
	  
	   <li>
        <a href="donor.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Donor</span>
         
        </a>
      </li>
	  <li>
        <a href="pages.php">
          <i class="zmdi zmdi-calendar-check"></i> <span>Pages</span>
         
        </a>
      </li>
	 <li>
        <a href="guest_gallery.php">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Guest Gallery</span>
        </a>
      </li>

    </ul>
   
   </div>