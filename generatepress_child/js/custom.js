/**custom js code*/
 AOS.init();
$(function() {
	/*-----sticky-header-------*/
$(function () {
    $(document).scroll(function () {
      var $nav = $(".main-header.fixed-enabled");
      $nav.toggleClass('fixed-header', $(this).scrollTop() > $nav.height());
    });
  });
 $('.click-to-show-nav').on('click', function(e) {
		 $('.main-menu').toggleClass("animated fadeIn delay-1");
		 $('.click-to-show-nav').toggleClass("active");
		  e.preventDefault();
	});


	/*-----sticky-header-------*/

	/*----page-go-to-top-button-----------------*/

    $('.arrow .a').click(function () {

        $("html, body").animate({

            scrollTop: 0

        }, 900);

        return false;

    });

	/*-----page-go-to-top-button----------------*/


});

$( window ).bind("load", function() {
		var $grid = $('.grid');
		$grid.isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer'
		}
		});
	
});


