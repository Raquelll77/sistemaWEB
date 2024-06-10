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

function redirectTo(url) {
    window.location.href = url;
}

function loadUsers() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        const users = JSON.parse(this.responseText);
        let tableContent = '';

        users.forEach(user => {
            tableContent += `
                <tr>
                    <td>${user.IDUSUARIO}</td>
                    <td>${user.USUARIO}</td>
                    <td>${user.NOMBRE}</td>
                    <td>${user.CORREO}</td>
                    <td>${user.TIENDA}</td>
                    <td>${user.ROLL}</td>
                </tr>
            `;
        });

        document.getElementById("user-table-body").innerHTML = tableContent;
    }
    xhttp.open("GET", "gestionUsuario", true);
    xhttp.send();
}

// Cargar la lista de usuarios cuando se carga la página
document.addEventListener("DOMContentLoaded", function() {
    loadUsers();
});
