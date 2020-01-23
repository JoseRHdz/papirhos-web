var idF;
get_libro();
function get_libro(libro)
{
	clearInterval(idF);
  $.ajax({
      url: "showLibro.php",
      type: "POST",
      datatype: "json",
      data: {libro:libro},
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
        							output += "<td>"+value.titulo+"</td>";
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
               					 get_libro(libro);
            				}, 300000);
							}
 			})
}

$("#search").keyup(function ()
{
  var valSearch=$(this).val();
  if (valSearch!="")
  {
    get_libro(valSearch);
  }
  else
  {
    get_libro();
  }
});
