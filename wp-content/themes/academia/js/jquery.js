jQuery(document).ready(function($){
	top_header();
	$('footer figure').appendTo('footer .mapa');
	$("footer iframe").css("height",'300px');
	clases_desc();
	$(document).on("click", ".clases-y-costos .enl_clases",function(e){
		e.preventDefault();
	});
	$(document).on("click", ".clases-y-costos .div_costos",function(e){
		e.preventDefault();
	});
	jQuery(".clases-y-costos .enl_clases").mouseenter(function() {
        jQuery(this).find(".desc_clases").css({
            "margin-bottom":"0px",
            "opacity":"1"
		});  
	});
	jQuery(".clases-y-costos .enl_clases").mouseleave(function() {
		jQuery(this).find(".desc_clases").css({
			"margin-bottom":"-"+(jQuery(this).find(".desc_clases").height()+5)+"px",
			"opacity":"0"
		});
	});
});
jQuery(window).on("resize", function(){ 
	top_header();
	clases_desc();
});
function top_header(){
	height_header = $("header").height();
	$(".body").css("margin-top",height_header+'px');
	$("#main-content").css("margin-top",(height_header+30)+'px');
}
function clases_desc(){
	jQuery('.desc_clases').animate({  textIndent: 0 }, {
		step: function(now,fx) {
			jQuery(this).css({
				"margin-bottom":"-"+(jQuery(this).height()+5)+"px",
				"opacity":"0"
			});
		},
		duration: 1000
	});
}