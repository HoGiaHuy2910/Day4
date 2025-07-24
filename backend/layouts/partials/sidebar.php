<nav class="col-md-2 d-none d-md-block sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">

      <!-- #################### Menu admin pages #################### -->
      <li class="nav-item sidebar-heading"><span>Admin</span></li>
      <li class="nav-item">
        <a href="/DAY4/backend/pages/dashboard.php" class="nav-link">
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <hr style="border: 1px solid red; width: 80%;" />
      <!-- #################### End Menu admin pages #################### -->

      <!-- #################### Menu product #################### -->
      <li class="nav-item sidebar-heading"><span>Product</span></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Product
        </a>
        <ul class="dropdown-menu" aria-labelledby="productDropdown">
          <li><a class="dropdown-item" href="/DAY4/backend/functions/product/index.php">Product List</a></li>
          <li><a class="dropdown-item" href="/DAY4/backend/functions/product/create.php">Create</a></li>
        </ul>
      </li>

      <!-- #################### Menu user #################### -->
      <li class="nav-item sidebar-heading"><span>User</span></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          User
        </a>
        <ul class="dropdown-menu" aria-labelledby="userDropdown">
          <li><a class="dropdown-item" href="/DAY4/backend/functions/user/index.php">User List</a></li>
          <li><a class="dropdown-item" href="/DAY4/backend/functions/user/create.php">Create</a></li>
        </ul>
      </li>
      <!-- #################### End Menu user #################### -->

    </ul>
  </div>
</nav>
