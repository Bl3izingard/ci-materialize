(function ($)
{
	$(function ()
	{
		$('#input_prooffile').change(sendForm);
		$("#form_prooffile").submit(handlerSendForm);

		function sendForm ()
		{
			$("#form_prooffile").submit();
		}

		function handlerSendForm (e)
		{
			$.ajax({
				type : $(this).attr('method'),
				url : $(this).attr('action'),
				data : new FormData(this),
				processData : false,
				contentType : false,
				cache : false,
				dataType : 'json',
				success : function (response)
				{

					if (response.error)
					{
						alert(response.message);
					}
					else
					{
						toastSuccess();
						location.reload();
						
											
					}

				},
				error : function (response)
				{
					toastError();
				}
			});
			e.preventDefault();
		}

		function toastSuccess ()
		{
			M
					.toast({
						html : '<span>Successfull ! Your document is uploaded. :)</span><button class="btn-flat toast-action">Undo</button>',
						classes : 'green'
					});
		}
		function toastError ()
		{
			M
					.toast({
						html : '<span>Oups ! Something went wrong. :(</span><button class="btn-flat toast-action">Undo</button>',
						classes : 'red'
					});
		}
	}); // end of document ready
})(jQuery); // end of jQuery name space

