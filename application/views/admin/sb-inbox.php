<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/admin/sb-header.php'); ?>
<div id="page-wrapper">
   <div class="row">
   	<div class="col-lg-12">
        
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-inbox">
        	<ul class="nav navbar-nav navbar-left">
				<li>
					<a href="#" class="inbox-load">Inbox <i class="fa fa-check"></i></a>
				</li>
				<li>
					<a href="#">Sent</a>
				</li>
				<li>
					<a href="#">Trash</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">Spam</a>
				</li>
			</ul>
        </div>
        
		<div class="inbox-nav-bar no-content-padding">
			
			<div class="btn-group inbox-navbar-toggle">
				<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
					Inbox <i class="fa fa-caret-down"></i>
		        </button>
		        <ul class="dropdown-menu" role="menu">
					<li>
						<a href="#" class="inbox-load">Inbox <i class="fa fa-check"></i></a>
					</li>
					<li>
						<a href="#">Sent</a>
					</li>
					<li>
						<a href="#">Trash</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#">Spam</a>
					</li>
				</ul>
			</div>
					
			<div class="inbox-nav">
	   			<h3 class="page-title txt-color-blueDark"><i class="fa fa-fw fa-inbox"></i> Inbox &nbsp;
					<div class="btn-group">
						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i><span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Mark as Unread</a></li>
							<li><a href="#">Mark as Important</a></li>
							<li><a href="#">Add to Tasks</a></li>
							<li class="divider"></li>
							<li><a href="#">Delete</a></li>
						</ul>
					</div>
				</h3>
			</div>
				
			<div class="inbox-checkbox-triggered">
	
				<div class="btn-group">
					<a href="#" rel="tooltip" title="" data-placement="bottom" data-original-title="Mark Important" class="btn btn-default">
						<strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong>
					</a>
					<a href="#" rel="tooltip" title="" data-placement="bottom" data-original-title="Move to folder" class="btn btn-default">
						<strong><i class="fa fa-folder-open fa-lg"></i></strong>
					</a>
					<a href="#" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete" class="deletebutton btn btn-default">
						<strong><i class="fa fa-trash-o fa-lg"></i></strong>
					</a>
				</div>
		
			</div>
		
			<a href="javascript:void(0);" id="compose-mail-mini" class="btn btn-primary pull-right hidden-desktop visible-tablet"> <strong><i class="fa fa-file fa-lg"></i></strong> </a>
		
			<div class="btn-group pull-right inbox-paging">
				<a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-left"></i></strong></a>
				<a href="javascript:void(0);" class="btn btn-default btn-sm"><strong><i class="fa fa-chevron-right"></i></strong></a>
			</div>
			<span class="pull-right"><strong>1-30</strong> of <strong>3,452</strong></span>
		</div>
		
		<!-- Mail Panel -->
		<div class="row inbox">
			<!-- Left Side bar -->
			<div class="col-md-2 mail-left-box">
				<a href="javascript:void(0);" id="compose-mail" class="btn btn-block btn-primary btn-sm" ><i class="fa fa-" ></i> Compose Mail </a> <br />

				<div class="list-group inbox-options hidden-tablet">
					<a  class="list-group-item" ><i class="fa fa-inbox" ></i> Inbox <span class="badge  bg-primary">1,234</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-bolt" ></i> Unread <span class="badge  bg-primary">58</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-magic" ></i> Important <span class="badge  bg-primary">65</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-bookmark-o" ></i> Starred <span class="badge  bg-primary">56</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-check-square-o" ></i> Sent <span class="badge  bg-primary">658</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-ban" ></i> Spam <span class="badge  bg-primary">20</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-trash-o" ></i> Trash <span class="badge  bg-primary">620</span> </a> 
					<a  class="list-group-item" ><i class="fa fa-archive" ></i> Archived <span class="badge  bg-primary">30</span> </a> 
				</div>

				<h5 class="text-primary hidden-tablet"> Labels</h5>
				<div class="list-group inbox-labels hidden-tablet">
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-purple">&nbsp;</span>Work</a>
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-primary">&nbsp;</span>Shopping</a>
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-success">&nbsp;</span>Promotions</a>
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-warning">&nbsp;</span>Finance</a>
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-info">&nbsp;</span>Games</a>
					<a class="list-group-item"  href="#"><span class="badge pull-right bg-danger">&nbsp;</span>Family</a>
				</div>			

				<div class="input-group hidden-tablet">
					<input type="text" name="createLabel" class="form-control" id="write-label" placeholder="Create Label Here"> 
					<span class="input-group-btn">
						<button class="btn bg-primary text-white" type="button" id="create-label">Go!</button>
					</span>
				</div><!-- /input-group -->


			</div><!-- /Mail Left Side bar -->

			<!-- Mail Right Sidebar -->
			<div class="col-md-10  mail-right-box">
				<div class="table-wrap custom-scroll animated fast fadeInRight" style="height: 350px; opacity: 1;">
				<table id="inbox-table" class="table table-striped table-hover">
					<tbody>
				
						<tr id="msg1" class="unread">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Alex Jones
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span><span class="label bg-color-orange">WORK</span> Karjua Marou</span> New server for datacenter needed
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									<a href="javascript:void(0);" rel="tooltip" data-placement="left" data-original-title="FILES: rocketlaunch.jpg, timelogs.xsl" class="txt-color-darken"><i class="fa fa-paperclip fa-lg"></i></a>
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg2" class="unread">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Sadi Orlaf
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span><span class="label bg-color-teal">HOME</span> SmartAdmin.com</span> Sed ut perspiciatis unde....
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									<a href="javascript:void(0);" rel="tooltip" data-placement="left" data-original-title="rocketlaunch.jpg, timelogs.xsl" class="txt-color-darken"><i class="fa fa-paperclip fa-lg"></i></a>
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg3">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Arik Lamora
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Facebook.com</span> Sed ut perspiciatis unde omnis iste natus error...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg4">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Robin Hood
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>10 Jobs</span> Sed ut perspiciatis unde omnis iste natus error...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg5">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									John Limar
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Project Date</span> Sed ut perspiciatis unde omnis iste natus...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									<a href="javascript:void(0);" rel="tooltip" data-placement="left" data-original-title="payscale-changes.pdf" class="txt-color-darken"><i class="fa fa-paperclip fa-lg"></i></a>
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg6">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Jeff Hopkin <span class="text-danger">Draft</span>
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Hey John!</span> Sed ut perspiciatis unde omnis...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg7">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Toronto News
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Mayor Rod Fierd!</span> Sed ut perspiciatis unde sit...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg8">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Michael Bleigh
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Past due</span> Sed ut perspiciatis unde omnis iste na
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg9">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Me, Navin
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span><span class="label bg-color-teal">HOME</span> John!</span> Sed ut perspiciatis...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg10">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Trello Laka
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Project development</span> @Sed ut perspiciatis unde omnis...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg11">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Doug Baird 
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Pora korta casta ricka?</span> Sed ut perspiciatis unde omnis iste...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg12">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Michael Ray, P. Eng
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>John, please add me to your linkedin</span> Linked in request pending.
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg13">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Doug Baird 
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Pora korta casta ricka?</span> Sed ut perspiciatis unde omnis iste...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg14">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Doug Baird 
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Pora korta casta ricka?</span> Sed ut perspiciatis unde omnis iste...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg15" class="unread">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									<i class="fa fa-warning text-warning"></i> System Email
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span><span class="label bg-color-orange">WORK</span> Sustem Update</span> 2:00PM to 2PM
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg16">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Amazon.ca
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Baby deal of the week!</span> Two new items on your cart...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg17">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									New server for datacenter needed New server for datacenter ne...
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Header blha blah</span> New server for datacenter needed
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg18">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									New server for datacenter needed New server for datacenter ne...
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Header blha blah</span> New server for datacenter needed
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg19">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg20">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg21">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg22">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg23">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Sunny
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Important question!</span> Hey John, I hope you are okay...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg24">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg25">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									Dogue Biryrd
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>Hey whats up?</span> Just checking up on ya...
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
				
						<tr id="msg26">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg27">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg28">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg29">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
						<tr id="msg30">
							<td class="inbox-table-icon">
								<div class="checkbox">
									<label>
										<input type="checkbox" class="checkbox style-2">
										<span></span> </label>
								</div>
							</td>
							<td class="inbox-data-from hidden-xs hidden-sm">
								<div>
									System
								</div>
							</td>
							<td class="inbox-data-message">
								<div>
									<span>SmartAdmin</span> You have a new friend request!
								</div>
							</td>
							<td class="inbox-data-attachment hidden-xs">
								<div>
									
								</div>
							</td>
							<td class="inbox-data-date hidden-xs">
								<div>
									10:23 am
								</div>
							</td>
						</tr>
				
					</tbody>
				</table>
				
				<script>
					
					//Gets tooltips activated
					$("#inbox-table [rel=tooltip]").tooltip();
				
					$("#inbox-table input[type='checkbox']").change(function() {
						$(this).closest('tr').toggleClass("highlight", this.checked);
					});
				
					$("#inbox-table .inbox-data-message").click(function() {
						$this = $(this);
						getMail($this);
					})
					$("#inbox-table .inbox-data-from").click(function() {
						$this = $(this);
						getMail($this);
					})
					function getMail($this) {
						//console.log($this.closest("tr").attr("id"));
						loadURL("ajax/email-opened.html", $('#inbox-content > .table-wrap'));
					}
				
				
					$('.inbox-table-icon input:checkbox').click(function() {
						enableDeleteButton();
					})
				
					$(".deletebutton").click(function() {
						$('#inbox-table td input:checkbox:checked').parents("tr").rowslide();
						//$(".inbox-checkbox-triggered").removeClass('visible');
						//$("#compose-mail").show();
					});
				
					function enableDeleteButton() {
						var isChecked = $('.inbox-table-icon input:checkbox').is(':checked');
				
						if (isChecked) {
							$(".inbox-checkbox-triggered").addClass('visible');
							//$("#compose-mail").hide();
						} else {
							$(".inbox-checkbox-triggered").removeClass('visible');
							//$("#compose-mail").show();
						}
					}
					
				</script>
				</div>
				
				

			</div><!-- /Right Side mail bar -->
				
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-primary text-white">
								<button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title">Subject</h3>
							</div>
							<div class="modal-body">
								<div class="icon-show">

								</div>
							</div>
							<div class="modal-footer">
								<textarea class="form-control" rows="4"></textarea>
								<br />
								<button type="button" class="btn bg-primary text-white">Send Reply! </button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->

			</div>

		</div> <!-- /.content -->
		
		
		
	</div>
	</div>
</div>

</div>
<!-- /#wrapper -->

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/application/views/admin/sb-footer.php'); ?>
