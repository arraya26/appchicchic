<nav class="navbar navbar-expand-lg " style="background-color: #ff99ff; ">
  <div class="container">
    <a class="navbar-brand" href="#">My Service</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        <li class="nav-item">
          <a class="nav-link" href="sh_product.php">Home</a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="show_product.php">Product</a>
        </li>
     

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Admin</a>
        </li>
      </ul>




      <form class="d-flex" method="POST" action ="sh_product.php">
        <input class="form-control me-2" type="search" name ="keyword" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


    </div>
  </div>
</nav>