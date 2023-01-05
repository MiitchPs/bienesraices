document.addEventListener('DOMContentLoaded', function () {
    eventListeners();

    darkmode();
});

function darkmode() {
    //comando para preferencia de modos segun S.O
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarkMode.matches);
    //if para detectar el mode que tiene actualmente el usuario
    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
    //Metodo para cambiar el sitio web automaticamente entre modo dark y white segun el S.O del usuario
    prefiereDarkMode.addEventListener('change', function () {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });



    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');
    });
}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegcionResponsive);

}

function navegcionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    //Primera forma mas simple para añadir y remover 
    //navegacion.classList.toggle('mostrar')

    //Segunda forma para añadir y remover 
    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}