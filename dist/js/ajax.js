$(document).ready(function(){
    var modalProtocolo = 0;
    var j = 0;
	$('#table-chamados-tino').empty();
	$.ajax({
		type:'post',
		dataType: 'json',
		url: 'dist/php/getDadosTableChamados.php',
		success: function(dados){
            j = dados.length;
			for(var i = 0; i < dados.length; i++){
                j++;
                if(dados[i].status_chamado == 1)
                    var status = '<span class="label label-warning">Pendente</span>';
                else if (dados[i].status_chamado == 2)
                    var status = '<span class="label label-info">Em andamento</span>';
                else if (dados[i].status_chamado == 3)
                    var status = '<span class="label label-success">Concluido</span>';
                else if (dados[i].status_chamado == 4)
                    var status = '<span class="label label-danger">Cancelado</span>';
                else
                    var status = '<span class="label">Não disponivel</span>';
				$('#table-chamados-tino').append(
                    '<tr><td><a href="" id="abrirModal" data-toggle="modal" data-target="#modal-detalhes">'
                    + dados[i].nr_protocolo+
                    '</a></td><td>'+dados[i].ds_obs_chamado+
                    '</td><td>'+dados[i].ds_local+
                    '</td><td>'+status+'</td></tr>');    
            }
            $('#novosChamados').append(j/2);
        }
    });
});