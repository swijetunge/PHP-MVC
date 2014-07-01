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
                <h1 class="page-header">Blog Post
                    <small>A Sample Blog Post</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <hr>
                <p>
                	<i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM by <a href="#">Start Boostrap</a>
                	<i class="icon-user"></i> <a href="#"> John</a>
                    <i class="icon-folder-close"></i> <a href="#"> Bootstrap</a>
                    <i class="icon-comment"></i> <a href="blogpost#comments"> 3 Comment</a>
                </p>
                <hr>
                <img class="img-responsive img-blog" src="/public/images/blog/blog1.jpg" width="100%" alt="" />
                <hr>
                <p>&nbsp;</p>
                <div class="tags">
	                <i class="icon-tags"></i> Tags <a class="btn btn-xs btn-primary" href="#">CSS3</a> <a class="btn btn-xs btn-primary" href="#">HTML5</a> <a class="btn btn-xs btn-primary" href="#">WordPress</a> <a class="btn btn-xs btn-primary" href="#">Joomla</a>
	            </div>
                <p class="lead">Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
                <p>You know, being a test pilot isn't always the healthiest business in the world.</p>
                <p>Cookie jelly beans soufflé icing. Gummi bears tootsie roll powder chupa chups cheesecake chocolate jelly-o lollipop lollipop. Halvah applicake chupa chups. Marshmallow chocolate jujubes icing lollipop gummi bears chupa chups pudding bonbon. Jelly beans jelly soufflé jujubes. Sesame snaps lollipop icing donut lemon drops soufflé.</p>
                <p>Donut caramels gingerbread. Sweet roll macaroon pastry cotton candy oat cake sesame snaps biscuit lemon drops dessert. Candy canes carrot cake danish carrot cake soufflé jelly chocolate cake muffin. Topping brownie donut. Oat cake marzipan dragée cheesecake. Donut chocolate cake jujubes tart dragée toffee.</p>
                <p>Tilefish electric knifefish salmon shark southern Dolly Varden. Pacific argentine tope golden shiner ilisha barreleye loosejaw catla, dogteeth tetra catfish tenpounder nase scup Ragfish brotula." Codlet brook lamprey pleco, Japanese eel convict cichlid titan triggerfish, plownose chimaera topminnow Black scalyfin. Walleye pollock, blue shark Sacramento blackfish prickleback airbreathing catfish yellowfin cutthroat trout, goby southern sandfish. North Pacific daggertooth dorab cepalin weever flying gurnard.</p>
                <p><strong>Placeholder text by:</strong>
                </p>
                <ul>
                    <li><a href="http://spaceipsum.com/">Space Ipsum</a>
                    </li>
                    <li><a href="http://cupcakeipsum.com/">Cupcake Ipsum</a>
                    </li>
                    <li><a href="http://tunaipsum.com/">Tuna Ipsum</a>
                    </li>
                </ul>

                <hr>
				
				<div class="author">
                    <div class="media">
                        <div class="pull-left">
                            <img class="avatar img-thumbnail" src="/public/images/blog/avatar.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <strong>John Doe</strong>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                        </div>
                    </div>
                </div><!--/.author-->
                
                <hr />
                
                <!-- the comment box -->
                 <div id="comment-form">
                    <h3>Leave a comment</h3>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea rows="4" class="form-control" placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger btn-lg">Submit Comment</button>
                    </form>
                </div><!--/#comment-form-->
                    

                <hr>

                <!-- the comments -->
                <div id="comments">
                    <div id="comments-list">
                        <h3>3 Comments</h3>
                        <div class="media">
                            <div class="pull-left">
                                <img class="avatar img-circle" src="/public/images/blog/avatar1.png" alt="">
                            </div>
                            <div class="media-body">
                                <div class="">
                                    <div class="media-heading">
                                        <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                        <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar img-circle" src="/public/images/blog/avatar3.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <div class="media-heading">
                                                <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                        </div>
                                    </div>
                                </div><!--/.media-->
                            </div>
                        </div><!--/.media-->
                        <div class="media">
                            <div class="pull-left">
                                <img class="avatar img-circle" src="/public/images/blog/avatar2.png" alt="">
                            </div>
                            <div class="media-body">
                                <div class="">
                                    <div class="media-heading">
                                        <strong>John Doe</strong>&nbsp; <small>27 Aug 2013</small>
                                        <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                </div>
                            </div>
                        </div><!--/.media-->
                    </div><!--/#comments-list-->  
                </div><!--/#comments-->

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
