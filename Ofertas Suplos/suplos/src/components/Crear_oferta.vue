<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Ofertas <br>
                Información Basica
            </div>
            <div class="card-body">
                <form v-on:submit.prevent="agregarRegistro">
                    <div class="form-group">
                      <label for="Objeto">Objeto</label>
                      <input type="text"
                        class="form-control" required name="Objeto" id="Objeto" v-model="ofertas.Objeto" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Ingrese el Codigo del Objeto</small>
                    </div>
                    <div class="form-group">
                        <label for="Descripcion">Descripcion</label>
                        <textarea class="form-control" required name="Descripcion" v-model="ofertas.Descripcion" id="Descripcion" rows="3">Describa la oferta a solicitar</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="Moneda">Tipo de Moneda</label>
                        <select class="custom-select" required name="Moneda" v-model="ofertas.Moneda" id="Moneda">
                            <option selected>Selecciona el tipo de moneda</option>
                            <option value="COP">COP</option>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="Presupuesto">Presupuesto</label>
                      <input type="number"
                        class="form-control" required name="Presupuesto" v-model="ofertas.Presupuesto" id="Presupuesto" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Escriba el valor del presupuesto</small>
                    </div>

                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" class="btn btn-dark">Agregar</button>
                        <router-link :to="{name:'Listar_oferta'}" class="btn btn-dark">Cancelar</router-link>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>
<script>
export default {
    data(){
        return{
            ofertas:{}
        }
    },
    methods:{
        agregarRegistro(){
            console.log(this.ofertas);

            var datosEnviar = {objeto:this.ofertas.Objeto,descripcion:this.ofertas.Descripcion,moneda:this.ofertas.Moneda,presupuesto:this.ofertas.Presupuesto};

            fetch('http://localhost/suplos/?insertar=1',{
                method:"POST",
                body:JSON.stringify(datosEnviar)

            })
            .then(respuesta=>respuesta.json())
            .then(datosRespuesta=>{
                console.log(datosRespuesta);
                window.location.href='Crear_oferta'
            })
        }
    }


}
</script>