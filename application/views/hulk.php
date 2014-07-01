<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/includes/header.php'); ?>
	
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Full Width Page
                    <small>Hulk</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a>
                    </li>
                    <li class="active">Hulk</li>
                </ol>
            </div>

        </div>
		
		<div class="row">
			<iframe src="<?php $_SERVER['DOCUMENT_ROOT']?>/application/views/includes/hulk.php" width="100%" height="550px" frameborder="0" scrolling="no"></iframe>
		</div>

    </div>
    <!-- /.container -->
    

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/includes/footer.php'); ?>
