/*
	Função que recarrega o corpo da página após um banco de dados ser selecionado
	para vizualização
*/
function vizualizar_database(nm_database){

	//Procura o corpo da página
	var corpo = document.getElementById("corpo");

	//Zera o conteúdo do corpo
	corpo.innerHTML = '';

	//Coloca o novo conteúdo
	jQuery.ajax({
		url: "actions/vizualizar_database.php?nm_database="+nm_database,
		dataType: "html",
		 
		success: function(response){
			jQuery("#corpo").html(response);
		},
		// quando houver erro
		error: function(){
			//alert("Ocorreu um erro durante a requisição");
		}
	});

}