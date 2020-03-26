$(".alertSession").fadeTo(2000, 2000).slideUp(800, function(){
    $(".alertSession").slideUp(800);
});

window.onload=function(){
	 $('textarea').summernote({
            tabsize: 2,
            height: 300
		});
	};