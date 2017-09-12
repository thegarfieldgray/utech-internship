<?php require 'header.php'; ?>

<!-- Begin Navigation Menu -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SCIT-Internship</a>
    </div>


    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Log out</a></li>
        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2">
      <div style="width: 100%; height:800px; background-color: steelblue;">
      </div>
    </div>

    <div class="col-md-10">
      <div style="width: 100%; height:800px; background-color: firebrick;">
      </div>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>