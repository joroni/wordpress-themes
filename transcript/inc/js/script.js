// http://www.malsup.com/jquery/cycle/options.html
(function($) {
    $(document).ready(function() { 
 		
		$('a[href=#top]').click(function(){
			$('html, body').animate({scrollTop:0}, 'slow');
			return false;
		});
		
    });
})(jQuery);	