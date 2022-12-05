<template>
    <div class="container">
        Listar - Modulo de Ofertas
        <div class="card">
            <div class="card-header">
                Ofertas
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Objeto</th>
                            <th>Descripcion</th>
                            <th>Moneda</th>
                            <th>Presupuesto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="ofertas in ofertas" :key="ofertas.id_ofertas">
                            <td>{{ofertas.Objeto}}</td>
                            <td>{{ofertas.Descripcion}}</td>
                            <td>{{ofertas.Moneda}}</td>
                            <td>{{ofertas.Presupuesto}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="">
                                    <router-link :to="{name:'Editar_oferta',params:{id_ofertas:ofertas.id_ofertas}}" class="btn btn-info">Editar</router-link>

                                    <button type="button" v-on:click="borrarRegistro(ofertas.id_ofertas)" class="btn btn-danger">Borrar</button>
                                    
                                </div>
                            </td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
export default {

        data(){
            return{
                ofertas:[]
            }
            
        },

        created:function(){
        this.consultarOfertas();
    },
    methods:{
        consultarOfertas(){
            fetch('http://localhost/suplos/')
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta)
                this.ofertas=[]
                if (typeof datosRespuesta[0].success==='undefined'){
                    this.ofertas=datosRespuesta;
                } 
            })
            .catch(console.log)
        },
        borrarRegistro(id_ofertas){
            console.log(id_ofertas);

            fetch('http://localhost/suplos/?borrar='+id_ofertas)
            .then(respuesta=>respuesta.json())
            .then((datosRespuesta)=>{
                console.log(datosRespuesta);
                window.location.href="listar_oferta"
            })
            .catch(console.log)
        }
    }
}
</script>