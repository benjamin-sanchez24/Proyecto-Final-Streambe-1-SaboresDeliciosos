
let logo = document.querySelector(".home");
let barra = document.querySelector(".navBar");
let activar = convertirVhAPixeles(23);
let productos = document.querySelector(".containerNavBar");
let containers = document.querySelector(".containerContacto")
window.addEventListener('scroll', function() {
    let scroll = window.scrollY;
    if (scroll>activar){
        logo.style.display= "none"
        barra.classList.add("navBarFix");
        barra.classList.remove("navBar");
        todosProductos.style.top= "10%";
        containers.style.marginTop=("40vh")
    }
    else{
        logo.style.display= "flex"
        barra.classList.add("navBar");
        barra.classList.remove("navBarFix");
        todosProductos.style.top= "33%";
        containers.style.marginTop=("10vh")        
    }
})
function convertirVhAPixeles(vh) {
    return (window.innerHeight * vh) / 100;
}



///////////////////////////

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
