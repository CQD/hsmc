$(function(){
	$('nav>ul>li').on({
		mouseover: function(){
			$('nav .active').removeClass('active');
		},
		touchstart: function(){
			var $me = $(this);
			if ($me.hasClass('active')) {
				$me.removeClass('active');
			} else {
				$('nav .active').removeClass('active');
				$(this).addClass('active');
			}
		}
	});
	$('html').on('click', function(){
		$('nav .active').removeClass('active');
	})
});
