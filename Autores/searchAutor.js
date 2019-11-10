var idF;
get_autor();
function get_autor(autor)
{
	clearInterval(idF);
  $.ajax({
      url: "showAutor.php",
      type: "POST",
      datatype: "json",
      data: {autor:autor},
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
               					 get_autor(autor);
            				}, 300000);
							}
 			})
}

$("#search").keyup(function ()
{
  var valSearch=$(this).val();
  if (valSearch!="")
  {
    get_autor(valSearch);
  }
  else
  {
    get_autor();
  }
});
