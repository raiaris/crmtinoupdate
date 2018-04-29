$(document).ready(function(){
    var modalProtocolo = 0;
    var j = 0;
	$('#table-chamados-tino').empty(); //Limpando a tabela
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'dist/php/getDadosTableChamados.php',//Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            j = dados.length;
			for(var i = 0; dados.length > i; i++){
                j++;
                if(dados[i].vr_nivel_prioridade == 1) {
                    var status = '<span class="label label-warning">Pendente</span>';
                } else if (dados[i].vr_nivel_prioridade == 2) {
                    var status = '<span class="label label-info">Em andamento</span>';
                } else if (dados[i].vr_nivel_prioridade == 3) {
                    var status = '<span class="label label-success">Concluido</span>';
                } else if (dados[i].vr_nivel_prioridade == 4) {
                    var status = '<span class="label label-danger">Cancelado</span>';
                } else {
                    var status = '<span class="label">Não disponivel</span>';
                }
				//Adicionando registros retornados na tabela
				$('#table-chamados-tino').append(
                    '<tr><td><a href="" data-toggle="modal" data-target="#modal-detalhes">'+dados[i].nr_protocolo+
                    '</a></td><td>'+dados[i].ds_obs_chamado+
                    '</td><td>'+dados[i].ds_local+
                    '</td><td>'+status+'</td></tr>');
            }
            $('#descChamado').append(dados[4].ds_situacao);
            $('#tituloChamado').append("Detalhes - " + dados[4].ds_obs_chamado + " #" + dados[4])
            $('#novosChamados').append(j);
        }
    });
});

