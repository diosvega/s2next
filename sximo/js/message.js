/**
 * @autor JuanVega
 * @created Sep 17, 2013
 * 
 */
$(document).ready(function() {
//	$(document).on("click", "#alertMessages", function(){
//		$(this).slideUp(500,function(){
//		});
//	});
});

/**
 * type = 1 Success
 * type = 2 Error
 * type = 3 Info
 * type = 4 Warning
 * 
 * @param {Number} type
 * @param {String} message
 * @returns
 */
function Messages(type, message)
{
	this.type = Number(type);
	this.message = message;
	this.style = '';
	
	this.getStyle = function(){
		switch(this.type)
		{
			case 1:
				this.style = "alert alert-success test";
				break;
			case 2:
				this.style = "alert alert-danger test";
				break;
			case 3:
				this.style = "alert alert-info test";
				break;
			case 4:
				this.style = "alert alert-warning test";
				break;
		}
	};
	this.setMessage = function(){
		this.getStyle();
		$("#alertMessages").removeClass();
		$("#alertMessages").addClass(this.style);
		$("#alertMessages p").hide().html(this.message);
		$("#alertMessages").css("top", 36);
		
		if($( "#alertMessages" ).is(":visible")){
            
            $("#alertMessages").slideUp(500, function(){
                $("#alertMessages").slideDown(500, function (){
                    $("#alertMessages p").fadeIn(500);
                });
            });
            
            window.setTimeout(function() {
                $("#alertMessages").slideUp(500);
            }, 10000);
            
        }else{
            
            $("#alertMessages").slideDown(250, function () {
                $("#alertMessages p").fadeIn(500);
            });
            
            window.setTimeout(function() {
                $("#alertMessages").slideUp(500);
            }, 10000);
        }
	};
	this.setMessage();
};
