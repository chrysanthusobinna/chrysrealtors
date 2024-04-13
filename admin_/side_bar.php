  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="https://admin-lte3-resource.chrys-online.com/_source/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $company_name; ?> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>Homepage</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>

 

         <li class="nav-item has-treeview">
            <a href="manage_properties.php" class="nav-link">
			  <i class="nav-icon fas fa-home"></i>
              <p>
                Manage Properties
               </p>
            </a>
          </li>






         <li class="nav-item has-treeview">
            <a href="manage_agents.php" class="nav-link">
			  <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Agents
               </p>
            </a>
          </li>
 

         <li class="nav-item has-treeview">
            <a href="exit.php" class="nav-link">
			  <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
               </p>
            </a>
          </li>



        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
