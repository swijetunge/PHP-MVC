<!DOCTYPE html>
<html>

<head>
	
	<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link type="text/css" rel="stylesheet" href="/public/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/public/font-awesome/css/font-awesome.cus.css">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/public/css/admin/sb-admin.css" rel="stylesheet">

</head>

<body>

	<div class="container">
        <div class="row">
        	<?php  
                // check for a successful form post  
                if (isset($this->note)) echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$this->note.'</div>';  
                // check for a form error  
                elseif (isset($this->error)) echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'.$this->error.'</div>';  
			?>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                            	<p class="small">Username or Email</p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username or Email" name="sb-email" type="email" autofocus value="<?php if(isset($_POST['sb-email'])) echo $_POST['sb-email']; ?>">
                                </div>
                                <div class="form-group">
                                	<p class="small">Password <a href="forgotpassword">(forgot password)</a></p>
                                    <input class="form-control" placeholder="Password" name="sb-password" type="password" value="<?php ?>">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                <input type="hidden" name="login" value="admin">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<!-- JavaScript -->
    <script src="/public/js/jquery-1.10.2.js"></script>
    <script src="/public/js/bootstrap.js"></script>
    
    <!-- SB Admin Scripts - Include with every page -->
    <script src="/public/js/admin/sb-admin.js"></script>
</body>

</html>
