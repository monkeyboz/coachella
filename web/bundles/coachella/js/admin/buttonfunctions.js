
		$.fn.edit = function(){
			$(this).click(function(){
				var link = $(this).attr('href');
				$('body').find('#overlay').remove();
				$('body').append('<div id="overlay" style="position: fixed; top: 0px; width: 600px; margin: auto 0px;"></div>');
				$.ajax({
					url: $(this).attr('href'),
					success: function(html){
						$('#overlay').html(html);
						$('#overlay form').submit(function(){
							var variables = 'ajax=1&';
							$(this).find('input').each(function(){
								variables += $(this).attr('name')+'='+$(this).val()+'&';
							});
							$(this).find('select').each(function(){
								variables += $(this).attr('name')+'='+$(this).val()+'&';
							});
							$(this).find('textarea').each(function(){
								variables += $(this).attr('name')+'='+$(this).html()+'&';
							});
							$.ajax({
								url: link,
								data: variables,
								type: 'POST',
								dataType: 'html',
								success: function(html){
									window.location.reload();
								}
							})
							return false;
						})
					}
				})
				return false;
			});
		}
		
		$.fn.delete = function(){
			var link = $(this).attr('href');
			$(this).click(function(){
				$confirm = confirm('Do you want to delete this item?');
				if($confirm==true){
					$.ajax({
						url: link,
						success: function(){
							window.location.reload();
						}
					})
				}
				return false;
			})
		}
		
		//$('.edit').edit();
		$('.delete').delete();
