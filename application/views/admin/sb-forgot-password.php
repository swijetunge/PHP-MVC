<!DOCTYPE html>
<html>

<head>

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
                        <h3 class="panel-title">Forgot Password</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                            	<p class="small">Email</p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="sb-email" type="email" autofocus value="<?php if(isset($_POST['sb-email'])) echo $_POST['sb-email']; ?>">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
                                <input type="hidden" name="forgotpassword" value="admin">
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
