const iconoMenuHamburguesa = document.querySelector('.topbar__menu-icon');

const menu = document.querySelector('.topbar__menu--unfolded'); 

const imagen = document.querySelector('.hero-section__image');

const topbar = document.querySelector('.topbar');

const moreEntriesLink = document.querySelector('.more-entries-link__text')

const credits = document.querySelector('#footer__credits')



iconoMenuHamburguesa.addEventListener('click', function(){
    menu.classList.toggle('show-menu');
    imagen.classList.toggle('hide-image');
    topbar.classList.toggle('hide-topbar-margin');
    moreEntriesLink.classList.toggle('hide'); 
    credits.classList.toggle('hide'); 


});


function retocarTipografia() {
    var anchoViewport = window.innerWidth;
    var tituloSectionColabora = document.querySelector(".shop-section__titles"); 
    var tituloSectionIdeas = document.querySelector(".last-entries-section__titulos")
    if (anchoViewport < 1194) {
      tituloSectionColabora.innerHTML = "<h2>Colabora con <br>el proyecto</h2><h5>Prendas exclusivas <br>diseñadas por artistas</h5>";
      tituloSectionIdeas.innerHTML ="<h2>Ideas para <br>el cambio</h2>";


    } else {
      tituloSectionColabora.innerHTML = "<h2>Colabora con el proyecto</h2><h5>Prendas exclusivas diseñadas por artistas</h5>"; 
      tituloSectionIdeas.innerHTML ="<h2>Ideas para el cambio</h2>";

    }
  }
  
  retocarTipografia();
  
  window.addEventListener("resize", retocarTipografia);

 
  


    

  





  
  
  
