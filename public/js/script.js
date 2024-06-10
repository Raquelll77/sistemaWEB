function loadContent(page) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("main-content").innerHTML = this.responseText;
    }
    xhttp.open("GET", page, true);
    xhttp.send();
}

// Cargar la página de inicio por defecto
document.addEventListener("DOMContentLoaded", function() {
    loadContent('home.html');
});
