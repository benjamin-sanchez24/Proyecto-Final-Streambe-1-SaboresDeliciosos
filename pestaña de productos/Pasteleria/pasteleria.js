
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
        cintaIzquierda.style.top="10%"
        todosProductos.style.top="10%";
    }
    else{
        logo.style.display= "flex"
        barra.classList.add("navBar");
        barra.classList.remove("navBarFix");
        cintaIzquierda.classList.remove("categoriasFix");
        cintaIzquierda.classList.add("categorias");
        todosProductos.style.top="33%";
    }
})
function convertirVhAPixeles(vh) {
    return (window.innerHeight * vh) / 100;
}

const boton = document.querySelector("#boton");
const todosProductos = document.querySelector(".todosProductos");
activo= false;

boton.addEventListener("click", () => {
    

    if (activo==false) {
        todosProductos.style.visibility="visible"
        todosProductos.style.position="fixed";

    } else {
        todosProductos.style.visibility="hidden"

    }
    activo = !activo; 
})
