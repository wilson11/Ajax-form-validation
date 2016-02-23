$('#formulario').on('submit', function(){
	
	$('#formulario .warn').remove();
	$('form input').removeClass("warning");
	
	var thisForm = $(this),
		url = thisForm.attr('action'),
		type = thisForm.attr('method'),
		data = thisForm.serializeArray();
		
	$.ajax({
		
		url: url,
		type: type,
		data: data,
		dataType: 'json',
		success: function(response){
			
			
			if(response.error){
				
				$.each(response.fields, function(index, value){
					
					$('.' + index).hide().html('<span class="warn">' + value + '</span>').fadeIn(700);
					$('#' + index).addClass("warning");
					
				});
				
			}
			
			else if(response.errors){
				
				$('#response').hide().html(response.messages).fadeIn(700);
				
				
			}
			
			
			else{
				
				$('#formulario').fadeOut(700, function(){
					
					$('#response').hide().html(response.message).fadeIn(700);
					
				});
				
			}
			
			
			
			
		},
		error: function(){
			
			$('#response').hide().html('<div class="alert alert-danger">Ocurrió un error</div>').fadeIn(700);
			
		}
		
		
	});
	
	return false;
	
});