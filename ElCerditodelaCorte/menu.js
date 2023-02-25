class menu extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = 
        `
        <nav class="navegacion">
        <input type="checkbox" id="check">
        <label for="check" class="btn-check">
            <span class="material-symbols-outlined">menu</span>
        </label>
        <ul class="menu-style">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="productos.html">Productos</a>
                <ul class="submenu-style">
                    <li><a href="cortes-frescos.html">Cortes Frescos</a></li>
                    <li><a href="carnes-frias.html">Carnes Fr&iacute;as</a></li>
                    <li><a href="chorizos.html">Chorizos de la Corte</a></li>
                    <li><a href="especialidades.html">Especialidades</a></li>
                    <li><a href="navidad.html">Navidad</a></li>
                </ul>
            </li>
            <li><a href="institucionales.html">Institucionales</a>
                <ul class="submenu-style">
                    <li><a href="facturacion.html">Facturaci&oacute;n</a></li>
                </ul>
            </li>
            <li><a href="recetas.html">Recetas</a></li>
            <li><a href="donde-estamos.html">&iquest;D&oacute;nde Estamos?</a></li>
            <li><a href="cerdisimos.html">Cerd&iacute;simos</a></li>
            <li><a href="nuestros-clientes.html">Nuestros Clientes</a></li>    
            <img class="logo" src="img/Logo.png" alt="Logo">
        </ul>
        <span class="indicador" id="indicador"></span>
    </nav>`;
    }
}

window.customElements.define("menu-cerdito",menu)