$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
$(function() {
    $(window).bind("load resize", function() {
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.sidebar-collapse').addClass('collapse')
        } else {
            $('div.sidebar-collapse').removeClass('collapse')
        }
    })
})


 /** Default editor configuration **/
$('#simple-editor').trumbowyg();

/************* navigation bar notify ***************************/
$(function(){ 
    var thetitle = $('title').text();
		$('.notif').click(function(){
			var countNotif = parseInt($('.counter').text());	
			var newcountNotif = ++countNotif;
			$('#msg-icon').removeClass('msg-icon').addClass('msg-iconh');
			$('.counter').text(newcountNotif).show();
			$('title').text('('+newcountNotif+') '+thetitle);

         jQuery('<div/>', {
            id: 'notif-bot',
            class : 'notif-bot alert alert-info',
            text: 'You just got a notification!'
            }).appendTo('.notif-bot-cnt')
                .delay(5000)
                .fadeOut();

		});

    $('#msg-icon').click(function(){
        $( this ).removeClass('msg-iconh').addClass('msg-icon');
        $('.counter').text('0').hide();
        $('.notif-bot').hide();
        $('title').text(thetitle);
    })
});

//Administrator SideMenu Active Items
$(window).load(function(){
	
    $(function(){
	
	  var url = window.location.pathname;  
	  var activePage = url.substring(1, url.length);
	  
	  var loc = window.location;
	  var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
	  var hostName = loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
	  var pageName = loc.href.substring(hostName.length, loc.href.length);
//	   confirm(pageName);
		
		  $('#side-menu li a').each(function(){  
		    var currentPage = $(this).attr('href');
			
			    if (activePage == currentPage) {
			      $(this).parent().addClass('active'); 
			    } else if (activePage == '') {
			    	$('.nav .nav-admin').addClass('active'); 
			    }
		    
		  });
		  
		  $('.nav-second-level li a').each(function(){  
		    var currentPage = $(this).attr('href');
			
			    if (pageName == currentPage) {
			      $(this).addClass('active');
			      $(this).parent().addClass('active'); 
			      $(this).parents('.nav-second-level').addClass('in'); 
			      $(this).parents('.nav-second-level').closest('li').addClass('active');
			    } else if (pageName == '') {
			    	$('.nav .nav-admin').addClass('active'); 
			    }
		    
		  });
	  
	  
	});

}); 


