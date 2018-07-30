function refresh(){
	$('#load').show(function(){
		$("#start").fadeOut('slow', function(){
			$("#start").empty().load("refresh.php",function(){
				$('#load').hide(function(){
					$("#start").fadeIn('slow', function(){
					});
				});
			});
		});
	});
	
}

function club(){		
	$("#start").fadeOut(function(){
		$("#start").empty().load("club.php",function(){
			
			$("#start").fadeIn(function(){
			});
		});
	});
	
}

function player(){
	$("#start").fadeOut(function(){
		$("#start").empty().load("player.php",function(){
			
			$("#start").fadeIn(function(){
			});
		});
	});
	
}
function news(){					
	$("#start").fadeOut(function(){
		$("#start").empty().load("news.php",function(){
			
			$("#start").fadeIn(function(){
			});
		});
	});
	
}
function alpha1(){				
	$("#start").fadeOut(function(){
		$("#start").empty().load("alpha1.php",function(){
			
			$("#start").fadeIn(function(){
			});
		});
		
	});
}
function alpha2(){			
	$("#start").fadeOut(function(){
		$("#start").empty().load("alpha2.php",function(){
			
			$("#start").fadeIn(function(){
			});
		});
	});
	
}		