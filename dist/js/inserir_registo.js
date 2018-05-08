$(document).ready(function(){
	$('#table-chamados-tino').empty();
	$.ajax({
		type:'post', //define o tipo de chamada
		dataType: 'json', //define o tipo de dado
		url: 'dist/php/getDadosTableChamados.php', //chama o arquivo de consulta com o bd
		success: function(dados){
            j = dados.length;
			for(var i = 0; i < dados.length; i++){
                //define o status na lista
                if(dados[i].status_chamado == 1)
                    var status = '<span class="label label-warning">Pendente</span>';
                else if (dados[i].status_chamado == 2)
                    var status = '<span class="label label-info">Em andamento</span>';
                else if (dados[i].status_chamado == 3)
                    var status = '<span class="label label-info">Em andamento (tercerizado)</span>';
                else if (dados[i].status_chamado == 4)
                    var status = '<span class="label label-success">Concluido</span>';
                else if (dados[i].status_chamado == 5)
                    var status = '<span class="label label-danger">Cancelado</span>';
                else
                    var status = '<span class="label">Não disponivel</span>';
                //.append para preencher a tabela
				$('#table-chamados-tino').append(
                    '<tr><td><a href="" onClick="setDadosModal('+dados[i].status_chamado+','+dados[i].nr_protocolo+',\''
                    + dados[i].ds_obs_chamado + '\', \'' + dados[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
                    + dados[i].nr_protocolo+'</a></td><td>'+dados[i].ds_obs_chamado+
                    '</td><td>'+dados[i].ds_local+
                    '</td><td>'+status+'</td></tr>');   
            }
    }});
});

//função para preenchimento do modal
function setDadosModal(status, protocolo,titulo,observacao){
    //clean da área a ser preenchida
    $('#statusModal').empty();
    $('#descChamado').empty();
    $("#tituloChamado").empty();
    $("#protocoloChamado").empty();
    //preenchimento da área no html
    $("#descChamado").append(observacao);
    $("#tituloChamado").append(titulo);
    $("#protocoloChamado").append(protocolo);

    //define o status exibido no modal
    if(status == 1)
        $("#statusModal").append('<span class="label label-warning">Pendente</span>');
    else if (status == 2)
        $("#statusModal").append('<span class="label label-info">Em andamento</span>');
    else if (status == 3)
        $("#statusModal").append('<span class="label label-info">Em andamento (tercerizado)</span>');
    else if (status == 4)
        $("#statusModal").append('<span class="label label-success">Concluido</span>');
    else if (status == 5)
        $("#statusModal").append('<span class="label label-danger">Cancelado</span>');
    else
        $("#statusModal").append('<span class="label">Não disponivel</span>');    
}