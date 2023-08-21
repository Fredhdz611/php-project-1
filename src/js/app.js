document.addEventListener('DOMContentLoaded', function () {
  eventListeners();
  darkMode();
});

function darkMode() {
  const darkModePrefer = window.matchMedia('(prefers-color-scheme: dark)');

  if(darkModePrefer.matches) {
    document.body.classList.add('dark-mode');
  } else {
    document.body.classList.remove('dark-mode');
  }

  darkModePrefer.addEventListener('change', function(){
    if(darkModePrefer.matches) {
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
  mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
  const navegacion = document.querySelector('.navigation');

  /* if(navegacion.classList.contains('mostrar')) {
    navegacion.classList.remove('mostrar');
  } else {
    navegacion.classList.add('mostrar');
  }  */

  navegacion.classList.toggle('mostrar');
}