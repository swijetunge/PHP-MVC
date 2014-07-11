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
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                	<?php  
		                // check for a successful form post  
		                if (isset($this->note)) echo "<div class=\"alert alert-success\">".$this->note."</div>";  
		                // check for a form error  
		                elseif (isset($this->error)) echo "<div class=\"alert alert-danger\">".$this->error."</div>";  
					?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="sb-email" type="email" autofocus value="<?php if(isset($_POST['sb-email'])) echo $_POST['sb-email']; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="sb-password" type="password" value="<?php ?>">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
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


</body>

</html>
