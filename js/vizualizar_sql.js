/*
	Função que recarrega o corpo da página após um banco de dados ser selecionado
	para vizualização
*/
function vizualizar_sql(){

	//Procura o corpo da página
	var corpo = document.getElementById("corpo");

	//Zera o conteúdo do corpo
	corpo.innerHTML = '';

	//Coloca o novo conteúdo
	jQuery.ajax({
		url: "ajax/vizualizar_sql.php",
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