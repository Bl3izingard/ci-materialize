(function($){
  $(function(){
	  $('select').formSelect();
	  
	  $('#login').keyup(function() {
		  var login = $(this).val();
		  $(this).parent().children("span").text("Votre site sera disponible via l'adresse https://mfh.ovh/"+login);
	  });
    
  }); // end of document ready
})(jQuery); // end of jQuery name space