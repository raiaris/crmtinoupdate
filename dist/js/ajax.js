var motivo = null;
var local = null;

$.getJSON("http://167.99.230.10/api/locais", function(a){
    motivo = a;
    console.log("success");
});

$.getJSON("http://167.99.230.10/api/motivos", function(o){
    local = o;
    console.log("success");
});

$.getJSON("http://167.99.230.10/api/chamados", function(e){
    for(var i = 0; i < e.data.length; i++){
        //define o status na lista
        if(e.data[i].ds_situacao == "Aberto")
            var status = '<span class="label label-warning">Aberto</span>';
        else if (e.data[i].ds_situacao == "Em andamento")
            var status = '<span class="label label-info">Em andamento</span>';
        else if (e.data[i].ds_situacao == "Em andamento (tercerizado)")
            var status = '<span class="label label-info">Em andamento (tercerizado)</span>';
        else if (e.data[i].ds_situacao == "Concluido")
            var status = '<span class="label label-success">Concluido</span>';
        else if (e.data[i].ds_situacao == "Cancelado")
            var vr_nivel_prioridade = '<span class="label label-danger">Cancelado</span>';
        else
            var status = '<span class="label">Não disponivel</span>';

        //.append para preencher a tabela
        $('#table-chamados-tino').append(
            '<tr><td><a href="" onClick="setDadosModal('+e.data[i].qt_upvotes+','+e.data[i].nr_protocolo+',\''
            + e.data[i].ds_obs_chamado + '\',\'' +motivo.data[e.data[i].id_motivo-1].ds_motivo+ '\', \'' + e.data[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
            + e.data[i].nr_protocolo+'</a></td><td>'+motivo.data[e.data[i].id_motivo-1].ds_motivo+
            '</td><td>'+local[4].ds_local+
            '</td><td>'+status+'</td></tr>');   
    }
});