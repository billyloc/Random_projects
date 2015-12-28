$(function() {

	$("button").on("click", function(){
		$(".lightbox-tint").toggleClass("on");
	});

	$(".lightbox-tint").on("click", function(){
		$(this).removeClass("on");
	});

})