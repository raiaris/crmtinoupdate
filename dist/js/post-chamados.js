$('#statusButton').click(function() {
    postStatus();
});

function postStatus() {
    let array = [];

    var json = JSON.stringify(array);

    var xhttp = new XMLHttpRequest();

    xhttp.open("POST", "http://167.99.230.10/api/chamado", true);
    xhttp.setRequestHeader('Content-type','application/json; charset=utf-8');

    xhttp.onreadystatechange = function () {
        
        if (this.readyState == 4 && this.status == 200) {
            array = JSON.parse(this.response);
            console.log(array);
        } else {
            console.error(array);
        }
    }
    
    xhttp.send(json);
}