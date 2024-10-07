let logo = document.querySelector(".home");
let barra = document.querySelector(".navBar");
let activar = convertirVhAPixeles(23);
let cintaIzquierda = document.querySelector(".categorias");
let contenido = document.querySelector(".ejemplares");

window.addEventListener('scroll', ()=> {
    let scroll = window.scrollY;
    if (scroll>activar){
        logo.style.display= "none"
        barra.classList.add("navBarFix");
        barra.classList.remove("navBar");
        cintaIzquierda.classList.remove("categorias");
        cintaIzquierda.classList.add("categoriasFix");
        cintaIzquierda.style.top="10%"
        contenido.style.marginTop="38vh"
    }
    else{
        logo.style.display= "flex"
        barra.classList.add("navBar");
        barra.classList.remove("navBarFix");
        cintaIzquierda.classList.remove("categoriasFix");
        cintaIzquierda.classList.add("categorias");
        contenido.style.marginTop="5vh"
    }
})
function convertirVhAPixeles(vh) {
    return (window.innerHeight * vh) / 100;
}


botonInfo = document.querySelector(".ejemplar button")
productoFoto = document.querySelector('.ejemplarImagen img').src;
productoTitulo = document.querySelector('.ejemplarInfo h4').textContent;
imagen = document.querySelector(".ponerImagen");
titulo = document.getElementById('exampleModalLabel');
botonInfo.addEventListener("click", ()=>{
    imagen.src = productoFoto;
    titulo.textContent = productoTitulo;
})