$("#formNewAutor").submit(function() {                                         
 event.preventDefault();                                          
 $("#load").fadeIn();                                             
 $("#load").addClass("spinner-border spinner-border-sm");         
 var nombre = $("#inputName").val();                              
 var apellidoP = $("#inputApellidoP").val();                      
 var apellidoM = $("#inputApellidoM").val();                      
 var nLegal = $("#inputNombreL").val();
 
 apellidoP = apellidoP.replace(/ /g,'');
 apellidoM = apellidoM.replace(/ /g,'');


 $.ajax({                                                         
 	type: "POST",                                                
  url: "addAutor.php",                                         
  data: {nombre:nombre, apellidoP:apellidoP, apellidoM:apellidoM, nLegal:nLegal},
  success: function(response) {                                
    $("#message").addClass("alert alert-success");             
    $("#message").fadeIn("fast");                              
    $("#message").html(response);                              
    $("#formNewAutor")[0].reset();                             
    $("#message").fadeOut(3000);                               
  }                                                            
 });                                                              
                                                                  
 $("#load").fadeOut(1500);                                        
 $("#inputNombreL").prop('disabled', false);                      
                                                                  
});                                                                  
                                                                     
$("#same").click(function(){                                                 
	if($(this).prop("checked")){                                               
    $("#inputNombreL").prop('disabled', true);                               
    $("#inputNombreL").val("");                                              
  }                                                                          
  else{                                                                      
    $("#inputNombreL").prop('disabled', false);                              
  }                                                                          
})                                                                           
