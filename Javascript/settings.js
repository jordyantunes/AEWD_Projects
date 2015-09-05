/*
$("document").ready( function() {
	$(".settings-button").click(
		function(){
			
		if ( $(this).data("status") === "closed" )
		{
			$(this).data("status", "open");
			$(this).children().each(function()
				{
					$(this).removeClass("reverse").addClass("dropdown");
				})
		}
		else
		{
			$(this).data("status", "closed");
			$(this).children().each(function()
				{
					$(this).addClass("reverse").removeClass("dropdown");
				})
		}	
	});
})
*/