
<!-- [header.php] -->

<body>

	<div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <?php include('includes/nav-brand.php'); ?>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="about.php">About Us</a></li>
                <li class="dropdown">
                  <a href="prop-search.php" class="dropdown-toggle" data-toggle="dropdown">Property Search <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                  	<li class="nav-header">Residential</li>
                    <li><a href="results.php">Residential Property: To Buy</a></li>
                    <li><a href="results.php">Residential Property: To Rent</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Commercial</li>
                    <li><a href="results.php">Commercial Property: To Buy</a></li>
                    <li><a href="results.php">Commercial Property: To Rent</a></li>
                  </ul>
                </li>
              	<li><a href="finance.php">Finance</a></li>
                <li><a href="links.php">Links</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->
        
        <ul class="breadcrumb span11">
          <li><a href="index.php">Home</a> <span class="divider">/</span></li>
          <li class="active">About Us</li>
          <li class="google-search">
          <?php include('includes/search.php'); ?>
          </li>
        </ul>
  		</div> <!-- /.container -->
    </div>
    
<!-- [/header.php] -->    
    