var motivo = null;
var local = null;

$(document).ready(function(){
	$('#table-chamados-tino').empty();
	$.ajax({
		type:'get', //define o tipo de chamada
		dataType: 'json', //define o tipo de dado
        url: 'http://167.99.230.10/api/motivos',
		success: function(m) {
            console.log("success");
            console.log(m);
            motivo = m;
    }});
});

$(document).ready(function(){
	$('#table-chamados-tino').empty();
	$.ajax({
		type:'get', //define o tipo de chamada
		dataType: 'json', //define o tipo de dado
        url: 'http://167.99.230.10/api/locais',
		success: function(n) {
            console.log("success");
            console.log(n);
            local = n;
    }});
});

$(document).ready(function(){
	$('#table-chamados-tino').empty();
	$.ajax({
		type:'get', //define o tipo de chamada
		dataType: 'json', //define o tipo de dado
        url: 'http://167.99.230.10/api/chamados',
		success: function(e) {
            console.log("success");
            console.log(e);
            console.log(e);
            // getListaChamados(e);
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
                console.log(local[4].ds_local);
                //.append para preencher a tabela
                $('#table-chamados-tino').append(
                    '<tr><td><a href="" onClick="setDadosModal('+e.data[i].qt_upvotes+','+e.data[i].nr_protocolo+',\''
                    + e.data[i].ds_obs_chamado + '\',\'' +motivo.data[e.data[i].id_motivo-1].ds_motivo+ '\', \'' + e.data[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
                    + e.data[i].nr_protocolo+'</a></td><td>'+motivo.data[e.data[i].id_motivo-1].ds_motivo+
                    '</td><td>'+local[4].ds_local+
                    '</td><td>'+status+'</td></tr>');   
            }
    }});
});

// function getListaChamados(e) {
//     for(var i = 0; i < e.data.length; i++){
//         //define o status na lista
//         if(e.data[i].ds_situacao == "Aberto")
//             var status = '<span class="label label-warning">Aberto</span>';
//         else if (e.data[i].ds_situacao == "Em andamento")
//             var status = '<span class="label label-info">Em andamento</span>';
//         else if (e.data[i].ds_situacao == "Em andamento (tercerizado)")
//             var status = '<span class="label label-info">Em andamento (tercerizado)</span>';
//         else if (e.data[i].ds_situacao == "Concluido")
//             var status = '<span class="label label-success">Concluido</span>';
//         else if (e.data[i].ds_situacao == "Cancelado")
//             var vr_nivel_prioridade = '<span class="label label-danger">Cancelado</span>';
//         else
//             var status = '<span class="label">Não disponivel</span>';
//         console.log(local[4].ds_local);
//         //.append para preencher a tabela
//         $('#table-chamados-tino').append(
//             '<tr><td><a href="" onClick="setDadosModal('+e.data[i].qt_upvotes+','+e.data[i].nr_protocolo+',\''
//             + e.data[i].ds_obs_chamado + '\',\'' +motivo.data[e.data[i].id_motivo-1].ds_motivo+ '\', \'' + e.data[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
//             + e.data[i].nr_protocolo+'</a></td><td>'+motivo.data[e.data[i].id_motivo-1].ds_motivo+
//             '</td><td>'+local[4].ds_local+
//             '</td><td>'+status+'</td></tr>');   
//     }
// }

//função para preenchimento do modal
function setDadosModal(upvotes,protocolo,desc,motivo,status){
    //clean da área a ser preenchida
    $('#statusModal').empty();
    $('#descChamado').empty();
    $("#tituloChamado").empty();
    $("#protocoloChamado").empty();
    $("#upvotes").empty();
    //preenchimento da área no html

    if(status == "Aberto")
        var sts = '<span class="label label-warning">Aberto</span>';
    else if (status == "Em andamento")
        var sts = '<span class="label label-info">Em andamento</span>';
    else if (status == "Em andamento (tercerizado)")
        var sts = '<span class="label label-info">Em andamento (tercerizado)</span>';
    else if (status == "Concluido")
        var sts = '<span class="label label-success">Concluido</span>';
    else if (status == "Cancelado")
        var sts = '<span class="label label-danger">Cancelado</span>';
    else
        var sts = '<span class="label">Não disponivel</span>';   

    $('#statusModal').append(sts);
    $("#descChamado").append(desc);
    $("#tituloChamado").append(motivo);
    $("#protocoloChamado").append(protocolo);
    $("#upvotes").append(upvotes);

    //define o status exibido no modal
     
}