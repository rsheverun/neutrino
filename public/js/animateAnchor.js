$(document).ready(function(){
                jQuery('.nav-link').click(function(){
                var sel = this.hash;
                jQuery('html, body').animate({
                scrollTop: jQuery(sel).offset().top-100
                    }, 1000);
                    
                return false;
                });
            });
$('#cat').click(function(){
			if($(this).is(":checked")) {
				alert("a");
			}
		})

   jQuery(function($){
   $("#phone").mask("(999) 999-9999");
   });
