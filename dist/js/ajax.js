$(document).ready(function() {
    let array = [];
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            array = JSON.parse(this.response);
            console.log(array);
            ListarChamados(array);
        }
    };

    xhttp.open("GET", "http://167.99.230.10/api/chamados", true);
    xhttp.send();
    
});

function ListarChamados(array) {
    for(let i = 0; i < Object.keys(array).length; i++) {
        $('#table-chamados-tino').append(
            '<tr><td><a href="" onClick="setDadosModal('+array.data[i].qt_upvotes+','+array.data[i].nr_protocolo+',\''
            + array.data[i].ds_obs_chamado + '\',\'' +array.data[i].id_motivo_chamado+ '\', \'' + array.data[i].ds_situacao + '\');" data-toggle="modal" data-target="#modal-detalhes">'
            + array.data[i].nr_protocolo+'</a></td><td>'+array.data[i].id_motivo_chamado+
            '</td><td>'+array.data[i].id_local+
            '</td><td>'+array.data[i].ds_situacao+'</td></tr>');   
    } 
}

function setDadosModal(upvotes, protocolo, desc, motivo, status) {
    $('#descChamado').append().empty();
    $('#descChamado').append(motivo);
}