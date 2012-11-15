site = {
	init: function(){
	    window.$site = { 
	            body	: $('body'),
	            pnav	: $('#personal-nav'),
				navcell	: $('.nav')
	        };
	    
	    $site.pnav.click(function(){
		  if($('#sound').html().length === 0)
		  {
			//_playSound('src/music/abc.mp3');
		  }
		});
	},

	showTab: function(divclass){
		$('.page-body').each(function(){
			$(this).slideUp('slow');
		});
		$('.nav').each(function(){
			$(this).removeClass('on');
		});
		$('.'+divclass+'-page').slideDown('slow');
		$('#'+divclass+'-nav').addClass('on');
	}
}

    $(document).ready(function(){
		$('.nav').click(function(){
			id = $(this).attr('id');
			
			var pageTracker = _gat._getTracker("UA-17371220-1");
			pageTracker._trackPageview();
			
			switch(id){
				case 'home-nav':					
					pageTracker._trackPageview('/home');
					;break
				case 'resume-nav':					
					pageTracker._trackPageview('/resume');
					;break;
				case 'developments-nav':					
					pageTracker._trackPageview('/developments');
					;break;
				case 'personal-nav':					
					pageTracker._trackPageview('/personal');
					;break;
				case 'video-nav':					
					pageTracker._trackPageview('/video');
					;break;					
			}
		});
	});

function _playSound( url ){   
  document.getElementById("sound").innerHTML="<embed src='"+url+"' hidden=true autostart=true loop=false>";
}