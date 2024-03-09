<?php
echo '

<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/php_tutorial/forum">Anything</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/php_tutorial/forum">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contact-up.php">Contact-Us</a>
        </li>
      </ul>
      <div class="row">
      <form class="d-flex " role="search">

<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-success me-4" type="submit">Search</button>

<div class="btn btn-outline-success mx-2 " data-bs-toggle="modal" data-bs-target="#loginmodal">Login</div>
<div class="btn btn-outline-success me-4" data-bs-toggle="modal" data-bs-target="#signupmodal">SignUp</div>

</form>
      </div>

    </div>
  </div>
</nav>

';
include '_login.php';
include '_signup.php';
?>
