let contenedor1 = document.querySelector(".img1");
let tituloImagen1 = document.querySelector(".CUPCAKES");
let textoImagen1 = document.querySelector(".CUPCAKESTEXTO");

contenedor1.addEventListener("mouseenter", ()=> {
    tituloImagen1.classList.add("CUPCAKESTEXTO");
    tituloImagen1.classList.remove("CUPCAKES");
    tituloImagen1.textContent= "¡Descubre la dulzura perfecta en cada bocado! Nuestros cupcakes, elaborados con ingredientes frescos y un toque de amor, te sorprenderán con su sabor único. Ven y prueba la felicidad en forma de cupcake. ¡Te esperamos!";
})

contenedor1.addEventListener("mouseleave", ()=> {
    tituloImagen1.classList.add("CUPCAKES");
    tituloImagen1.classList.remove("CUPCAKESTEXTO");
    tituloImagen1.textContent = "Cupcakes";
})



let contenedor2 = document.querySelector(".img2");
let tituloImagen2 = document.querySelector(".tortas");
let textoImagen2 = document.querySelector(".textoTortas");

contenedor2.addEventListener("mouseenter", ()=> {
    tituloImagen2.classList.add("textoTortas");
    tituloImagen2.classList.remove("tortas");
    tituloImagen2.textContent= "¡Haz de tus celebraciones algo inolvidable con nuestras tortas artesanales! Cada una está hecha con los mejores ingredientes y un diseño personalizado que refleja tu estilo. Ven y encuentra la torta perfecta para cada ocasión especial. ¡Endulzamos tus momentos!";
})

contenedor2.addEventListener("mouseleave", ()=> {
    tituloImagen2.classList.add("tortas");
    tituloImagen2.classList.remove("textoTortas");
    tituloImagen2.textContent = "Tortas";
})


let contenedor3 = document.querySelector(".img3");
let tituloImagen3 = document.querySelector(".postres");
let textoImagen3 = document.querySelector(".textoPostres");

contenedor3.addEventListener("mouseenter", ()=> {
    tituloImagen3.classList.add("textoPostres");
    tituloImagen3.classList.remove("postres");
    tituloImagen3.textContent= "Endulza tus días con nuestros exquisitos postres de repostería. Desde clásicos irresistibles hasta creaciones innovadoras, cada bocado es un placer para el paladar. ¡Ven y déjate tentar por nuestras delicias! ¡Te esperamos para hacer de cada día una ocasión especial!";
})

contenedor3.addEventListener("mouseleave", ()=> {
    tituloImagen3.classList.add("postres");
    tituloImagen3.classList.remove("textoPostres");
    tituloImagen3.textContent = "Postres";
})






/////////////////////////////////



let logo = document.querySelector(".home");
let barra = document.querySelector(".navBar");
let activar = convertirVhAPixeles(23);
let productos = document.querySelector(".containerNavBar")
window.addEventListener('scroll', function() {
    let scroll = window.scrollY;
    if (scroll>activar){
        logo.style.display= "none"
        barra.classList.add("navBarFix");
        barra.classList.remove("navBar");
        todosProductos.style.top= "10%";
    }
    else{
        logo.style.display= "flex"
        barra.classList.add("navBar");
        barra.classList.remove("navBarFix");
        todosProductos.style.top= "33%";
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