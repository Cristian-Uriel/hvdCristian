const menu = document.getElementById('menu');
const indicador = document.getElementById('indicador');
const secciones = document.querySelectorAll('.seccion');

let tamIndicador = menu.querySelector('a').offsetWidth;
indicador.style.width = tamIndicador + 'px';
let indexSeccionActiva;

//observer
const observer = new IntersectionObserver((entradas, observer)=> {
    entradas.forEach(entrada => {
        if(entrada.isIntersecting){
            indexSeccionActiva = [...secciones].indexOf(entrada.target);
            indicador.style.transform = `translateX(${tamIndicador * indexSeccionActiva}px)`;
        }
    });
}, {
    rootMargin: '-80px 0px 0px 0px',
    threshold: 0.2
});

//Asignación de un observer para el hero
observer.observe(document.getElementById('hero'));

//Asignación de un observer para cada seccion
secciones.forEach (seccion => observer.observe(seccion));

//Evento para cuando la pantalla cambie de tamaño
const onResize= () => {
    //Calculamos el tamaño que debería tener el indicador
    tamIndicador = menu.querySelector('a').offsetWidth
    //Se cambia l tamaño de indicador
    indicador.style.width = `${tamIndicador}px`;
    //Se vuelve a posicionar el indicador
    indicador.style.transform = `translateX(${tamIndicador * indexSeccionActiva}px)`;
}

window.addEventListener('resize', onResize);