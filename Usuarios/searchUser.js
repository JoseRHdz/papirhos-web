var idF;
get_user();
function get_user(user)
{
	clearInterval(idF);
  $.ajax({
      url: "showUser.php",
      type: "POST",
      datatype: "json",
      data: {user:user},
			success:
							function(response){
								$("#table").trigger("destroy");
      						var output;
      						if (response.length==0){
        						$("tbody").html("No se encontraron resultados <i class='far fa-frown'></i>");
      						}
      						else{
        						$.each(response,function (key,value){
        							output += "<tr>";
        							output += "<td>"+value.nombre+"</td>";
        							output += "<td>"+value.apellidoP+"</td>";
        							output += "<td>"+value.apellidoM+"</td>";
        							output += "<td>"+value.email+"</td>";
        							output += "<td>"+value.tipo+"</td>";
        							output += "<td>"+value.estatus+"</td>";
        							output += "<td>iconos</td>";
        							output += "</tr>";
        						});
      						$("tbody").html(output);
      						}
									$("#table").tablesorter({ 
																sortList: [[0,0],[1,0],[2,0]],
																sortLocaleCompare : true
									}).tablesorterPager({
																				container: $(".ts-pager"),
																				cssGoto  : ".pagenum",
																				removeRows: false,
																				output: '{startRow} - {endRow} / {filteredRows} ({totalRows})'
																			});
									 idF = setInterval(function(){
               					 get_user(user);
            				}, 300000);
							}
 			})
}

$("#search").keyup(function ()
{
  var valSearch=$(this).val();
  if (valSearch!="")
  {
    get_user(valSearch);
  }
  else
  {
    get_user();
  }
});
