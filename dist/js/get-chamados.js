$(document).ready(function() {
    let array = [];
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "http://167.99.230.10/api/chamados", true);
    xhttp.setRequestHeader('Content-type','application/json; charset=utf-8');

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            array = JSON.parse(this.response);
            console.log(array);
            ListarChamados(array);
        }
    };
    
    xhttp.send();
    
});

function ListarChamados(array) {
    $('#table-chamados-tino').empty();
    for(var i = 0; i < Object.keys(array.data).length; i++) {
        $('#table-chamados-tino').append(
            '<tr><td><a href="" onClick="setDadosModal('+array.data[i].qt_upvotes+','+array.data[i].nr_protocolo+',\''
            + array.data[i].ds_obs_chamado + '\',\'' +array.data[i].motivo.ds_motivo+ '\', \'' + array.data[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
            + array.data[i].nr_protocolo+'</a></td><td>'+array.data[i].motivo.ds_motivo+
            '</td><td>'+array.data[i].local.ds_local+
            '</td><td>'+array.data[i].ds_situacao+'</td></tr>');   
    } 
}

function setDadosModal(upvotes, protocolo, desc, motivo, status) {

    var s = "";

    if (status == "Em andamento") {
        s = '<span class="label label-info">Em andamento</span>';
    } else if (status == "Aberto") {
        s = '<span class="label label-warning">Aberto</span>';
    } else if (status == "Cancelado") {
        s = '<span class="label label-danger">Cancelado</span>';
    }

    $('#descChamado').append().empty();
    $('#descChamado').append(protocolo);

    $('#upvotesChamado').append().empty();
    $('#upvotesChamado').append(upvotes);

    $('#tituloChamado').append().empty();
    $('#tituloChamado').append(motivo);

    $('#descChamado').append().empty();
    $('#descChamado').append(desc);

    $('#statusChamado').append().empty();
    $('#statusChamado').append(s);
    
}