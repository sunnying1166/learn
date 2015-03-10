(function(){
		
	var body = $('body');
	$(".menu-toggle").bind("click",function(e){
		body.toggleClass('menu-open');
		e.preventDefault();
	});
			
	$(".dropdown-toggle").bind("click",function(e){
				
		$(this).focus();
		if($(this).attr('href')=="#"){
					e.preventDefault();
		}
	});
	$('.drop').click(function(){
		$(this).parent().find('.dropdown-toggle').focus();
	})
	// $('.drop').mouseout(function(){
	// 	$(this).parent().find('.dropdown-toggle').blur();
	// })
})();
