function getexpos(anio) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("exposiciones").innerHTML =
        this.responseText;
    }
    xhttp.open("GET", "http://localhost/gjmv/public/exposicion/listado/"+anio);
    xhttp.send();
}