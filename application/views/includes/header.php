<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>SBW Techs : Home </title>
	<!-- <link rel="shortcut icon" href="/public/images/favicon.ico" type="image/ico" /> -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/images/favicon.gif" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/public/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="/public/css/main.css">
	<link type="text/css" rel="stylesheet" href="/public/css/header.css">
	<link type="text/css" rel="stylesheet" href="/public/css/footer.css">
	<link type="text/css" rel="stylesheet" href="/public/css/signin.css">
	<link type="text/css" rel="stylesheet" href="/public/css/animate.css">
	<link type="text/css" rel="stylesheet" href="/public/css/price-range.css">
	<link type="text/css" rel="stylesheet" href="/public/css/prettyPhoto.css">
	<link type="text/css" rel="stylesheet" href="/public/font-awesome/css/font-awesome.cus.css">
</head>

<body>
	
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="home"><img src="/public/images/salex_logo.jpg" alt="Salary Exchange" /> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav navbar-right">
                	<li class="nav-home">
                		<a href="home">Home</a>
                    </li>
                    <li>
                    	<a href="aboutus">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio">Portfolio</a>
                            </li>
                            <li><a href="blog">Blog</a>
                            </li>
                            <li><a href="fullwidth">Full Width Page</a>
                            </li>
                            <li><a href="sidebar">Sidebar Page</a>
                            </li>
                            <li><a href="faq">FAQ</a>
                            </li>
                            <li><a href="error">404</a>
                            </li>
                            <li><a href="pricingtable">Pricing Table</a>
                            </li>
                            <li><a href="hulk">Hulk</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="contactus">Contact Us</a>
                    </li>
                    <li>
                    	<a href="#" data-toggle="modal" data-target="#myModal">login</a>
                    </li>
                    <li>
                        <a class="navbar-search">
                        <div class="nav-search minimized" id="nav-search">
                            <form action="" method="get" class="form-search">
                                <span class="input-icon">
                                    <input type="text" name="s" id="search" placeholder="Search Our Site" class="nav-search-input" autocomplete="off" value="Have a question? Start your search here." onfocus="this.value=(this.value=='Have a question? Start your search here.') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'Have a question? Start your search here.' : this.value;">
                                    <i class="icon-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Modal Markup kept out of all the div elements -->
      <div class="modal fade" id="myModal">
          <div class="modal-dialog">
              <div class="modal-content">
              	<div class="login-panel panel">
	                  <!-- Modal Header -->
	                  <div class="modal-header">
	                      <button type="button" class="close" data-dismiss="modal">&times;</button>
	                      <h3 class="form-signin-heading">Please sign in</h3>
	                  </div>
	                  <!-- Modal Body -->
	                   <form class="form-signin" role="form">
				        <input type="email" class="form-control" placeholder="Email address" required autofocus>
				        <br />
				        <input type="password" class="form-control" placeholder="Password" required>
				        <label class="checkbox">
				          <input type="checkbox" value="remember-me"> Remember me
				        </label>
				        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				        <!-- Modal Footer -->
		                <div class="modal-footer">
				            <p>Copyright &copy; Salary Exchange 2014</p>
		                </div>
				      </form>
				</div>
              </div>
          </div>
      </div>
      
	<!-- Page Content -->
