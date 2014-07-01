<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/includes/header.php'); ?>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144716315690681";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>	

    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Blog
                    <small>Blog Homepage</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a>
                    </li>
                    <li class="active">Blog</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8">

                <h1><a href="blog-post.html">A Blog Home Template for Bootstrap 3</a>
                </h1>
                <p class="lead">by <a href="#">Start Bootstrap</a>
                </p>
                <hr>
                <p>
                	<i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:00 PM
                	<i class="icon-user"></i> <a href="#"> John</a>
                    <i class="icon-folder-close"></i> <a href="#"> Bootstrap</a>
                    <i class="icon-comment"></i> <a href="blogpost#comments"> 3 Comment</a>
                </p>
                <hr>
                <a href="blog-post.html">
                	<img class="img-responsive img-blog" src="/public/images/blog/blog1.jpg" width="100%" alt="" />
                </a>
                <hr>
                <p>This is a very basic starter template for a blog homepage. It makes use of Font Awesome icons that are built into the 'Modern Business' template, and it makes use of the Bootstrap 3 pager at the bottom of the page.</p>
                <a class="btn btn-primary" href="blogpost">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <h1><a href="blog-post.html">Another Blog Post</a>
                </h1>
                <p class="lead">by <a href="#">Start Bootstrap</a>
                </p>
                <hr>
                <p>
                	<i class="fa fa-clock-o"></i> Posted on August 28, 2013 at 10:45 PM
                	<i class="icon-user"></i> <a href="#"> John</a>
                    <i class="icon-folder-close"></i> <a href="#"> Bootstrap</a>
                    <i class="icon-comment"></i> <a href="blogpost#comments"> 3 Comment</a>
                </p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-blog" src="/public/images/blog/blog2.jpg" width="100%" alt="" />
                </a>
                <hr>
                <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science...</p>
                <a class="btn btn-primary" href="blogpost">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>

            </div>

            <div class="col-lg-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Popular Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="arrow">
                                <li><a href="#dinosaurs">Dinosaurs</a>
                                </li>
                                <li><a href="#spaceships">Spaceships</a>
                                </li>
                                <li><a href="#fried-foods">Fried Foods</a>
                                </li>
                                <li><a href="#wild-animals">Wild Animals</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="arrow">
                                <li><a href="#alien-abductions">Alien Abductions</a>
                                </li>
                                <li><a href="#business-casual">Business Casual</a>
                                </li>
                                <li><a href="#robots">Robots</a>
                                </li>
                                <li><a href="#fireworks">Fireworks</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
                </div>
                
                <!--.tags-->
                <div class="well widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-primary" href="#">CSS3</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">HTML5</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">WordPress</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Joomla</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Drupal</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Bootstrap</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">jQuery</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Tutorial</a></li>
                        <li><a class="btn btn-xs btn-primary" href="#">Update</a></li>
                    </ul>
                </div><!--/.tags-->
                
                <div class="well widget facebook-fanpage">
                    <h3>Facebook Fanpage</h3>
                    <div class="widget-content">
                        <div class="fb-like-box" data-href="https://www.facebook.com/shapebootstrap" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                    </div>
                </div>
                
                
                <!-- /well -->
            </div>
        </div>

    </div>
    <!-- /.container -->
    

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/includes/footer.php'); ?>
