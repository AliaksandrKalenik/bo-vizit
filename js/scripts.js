function footerToBottom() {
    $("body").css("margin-bottom", jQuery(".footer").outerHeight()+40);
}
//Sticky Footer Function
$(document).ready(footerToBottom);
$(window).on("resize", footerToBottom);
$(document).ready(function(){
	$(".js-fred2").carouFredSel({
    height:300,
	items               : 3,
	scroll : {
            items           : 1,                       
            pauseOnHover    : true
        },
	pagination: ".js-pag2"
	});

});