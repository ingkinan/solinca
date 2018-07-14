function valida() {
    var usuario = document.getElementById('usuario');
    var pass = document.getElementById("password");

    if ((usuario.value == "") || (pass.value == "")) {
        window.alert("Los campos usuario y contraseña no pueden estar vacios");
    } else {
        envia('login');
    }
}