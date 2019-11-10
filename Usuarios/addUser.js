$("#formNewUser").submit(function() {                                         
 event.preventDefault();                                          
 $("#load").fadeIn();                                             
 $("#load").addClass("spinner-border spinner-border-sm");         
 var nombre = $("#inputName").val();                              
 var apellidoP = $("#inputApellidoP").val();                      
 var apellidoM = $("#inputApellidoM").val();                      
 var mail = $("#inputMail").val();
 var pass = $("#inputPassword").val();
 var type = $("#inputType").val();
 if ($("#inputActive").is(":checked"))
	 var estatus = 1;
 else
	 var estatus = 0;
 
 apellidoP = apellidoP.replace(/ /g,'');
 apellidoM = apellidoM.replace(/ /g,'');
 mail = mail.replace(/ /g,'');


 $.ajax({                                                         
 	type: "POST",                                                
  url: "addUser.php",                                         
  data: {nombre:nombre, apellidoP:apellidoP, apellidoM:apellidoM, mail:mail,
				 pass:pass, type:type, estatus:estatus},
  success: function(response) {                                
    $("#message").addClass("alert alert-success");             
    $("#message").fadeIn("fast");                              
    $("#message").html(response);                              
    $("#formNewUser")[0].reset();                             
    $("#message").fadeOut(3000);
  }                                               
 });
                                                                  
 $("#load").fadeOut(1500);                                        
 $("#inputNombreL").prop('disabled', false);
                                                                  
}); 
