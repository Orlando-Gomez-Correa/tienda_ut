$(document).ready(function() {
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
        mostrarDato();
    }); //end #btnGuardar

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('registrar'));

        await fetch('assets/data/register.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json()) //mandar llamar y enviar los datos
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "./index.html";
                } else {
                    location.href = "./index.html";
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDato
});