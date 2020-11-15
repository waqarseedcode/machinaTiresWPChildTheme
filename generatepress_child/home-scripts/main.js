// Color Change On Scroll Nav
$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

// Toggle Map
function togglemap(){
    var input = document.getElementsByName("addr");
    // console.log("toggle");
    if(input[0].value != ""){
     addr_search(input[0].value);
     if($("#map-image").css("display") == "none"){
      $("#map-image").show(2000);

      $(".inp-box").animate({ 
        'padding-top' : 0,
      }, 2500);
        // $('.inp-box').css("transition","4s");
        // $('.inp-box').css("padding-top","1%");

        
      $('#map-image').fadeIn(2900, function () { $('#map-image').trigger("hasFadedIn"); });

        
      $('.hero-text-box').css("transition","2s");
      $('.hero-text-box').css("padding-top","10%");

        
        
        // let parent = document.getElementById('hero-container-div');
        // let child = document.getElementById('hero-container-content');
        // var val = parent.offsetHeight; 
        // console.log("parent "+val);
        // console.log("child "+child.offsetHeight);
        // if(val <= child.offsetHeight + 100){
        //   console.log("true");
        //   parent.setAttribute("style","height:"+(child.offsetHeight+3)+"px !important");
        //   console.log("updated parent "+parent.offsetHeight);
        // }
        // val = parent.offsetWidth; 
        // if(val <= child.offsetWidth){
        //   parent.setAttribute("style","width:"+(child.offsetWidth+5)+"px");
        // }
        
        //   $('html,body').animate({
        //       scrollTop: $("#addr").offset().top},
        //       'slow');
     }

    }
}

function tooglemapPhone(){
  if ($(window).width() <= 991) {
    var input = document.getElementsByName("addr");
    if(input[1].value != ""){
      addr_search(input[1].value);
      if($("#map-phone").css("display") == "none"){
          $("#map-phone").toggle();
        //  let parent = document.getElementById('hero-container-div');
        //  let child = document.getElementById('hero-container-content');
        //  var val = parent.offsetHeight; 
        //  console.log(val);
        //  if(val <= child.offsetHeight){
        //    parent.setAttribute("style","height:"+(child.offsetHeight+10)+"px");
        //  }
        //  val = parent.offsetWidth; 
        //  if(val <= child.offsetWidth){
        //    parent.setAttribute("style","width:"+(child.offsetWidth+10+"px"));
        //  }
      }
    }
  }
}

// Search
function addr_search(inputVal)
 {
     var inp = document.getElementById("addr");
     var xmlhttp = new XMLHttpRequest();
     var url = "https://nominatim.openstreetmap.org/search?format=json&limit=1&q=" + inputVal;
     xmlhttp.onreadystatechange = function()
     {
     if (this.readyState == 4 && this.status == 200)
     {
         var myArr = JSON.parse(this.responseText);
         console.log(myArr);
     }
     };
     xmlhttp.open("GET", url, true);
     xmlhttp.send();
 }
 


//  btt
$('#btt').on("click",function(){
  $("html, body").animate({scrollTop: 0}, 500);
})

$('#btt-mob').on("click",function(){
  $("html, body").animate({scrollTop: 0}, 500);
})

// scroll x
$(document).ready(function() {
  $('#row-scroll').mousewheel(function(e, delta) {
    if ( $(window).width() < 1420 ) {
    this.scrollLeft -= (delta * 60);
    e.preventDefault();
    }
  });

});


// row-more

$('#row-more').click(function(){
  $('.row-more').toggle('row-more');

  $(this).text(function(i, text){
    return text === "Read More" ? "Read Less" : "Read More";
})

})


// read more
$(document).ready(function(){
	var maxLength = 200;
	$(".show-read-more").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
			$(this).append('<span class="more-text">' + removedStr + '</span>');
		}
	});
	$(".read-more").click(function(){
		$(this).siblings(".more-text").contents().unwrap();
		$(this).remove();
	});
});
/*added by w-j*/
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


});
