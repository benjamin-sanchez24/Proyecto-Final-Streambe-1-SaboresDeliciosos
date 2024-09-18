
let logo = document.querySelector(".home");
let barra = document.querySelector(".navBar");
let activar = convertirVhAPixeles(23);
let cintaIzquierda = document.querySelector(".categorias");

window.addEventListener('scroll', function() {
    let scroll = window.scrollY;
    if (scroll>activar){
        logo.style.display= "none"
        barra.classList.add("navBarFix");
        barra.classList.remove("navBar");
        cintaIzquierda.classList.remove("categorias");
        cintaIzquierda.classList.add("categoriasFix");

    }
    else{
        logo.style.display= "flex"
        barra.classList.add("navBar");
        barra.classList.remove("navBarFix");
        todosProductos.style.top= "33%";;     
        cintaIzquierda.classList.remove("categoriasFix");
        cintaIzquierda.classList.add("categorias");

    }
})
function convertirVhAPixeles(vh) {
    return (window.innerHeight * vh) / 100;
}
