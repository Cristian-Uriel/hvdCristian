class footer extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback(){
        this.innerHTML = 
        `
        <footer>
            <h3>POWERED BY</h3>
            <p><a href="index.html">El Cerdito de la Corte L.T.D.A.</a></p>
            <p><a href="donde-estamos.html">Contactenos</a></p>
            &#128081
        </footer>
       `;
    }
}

window.customElements.define("footer-cerdito",footer)