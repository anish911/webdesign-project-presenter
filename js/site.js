$( document ).ready(function() {
          $('.screen:gt(0)').hide();
          $('.show').first().addClass('active');
			$('.show').click(function () {
    		$('.screen').hide();
			$('.active').removeClass('active');
			$(this).addClass('active');
   			 $($(this).attr('href')).fadeIn('slow');
			});
});
   