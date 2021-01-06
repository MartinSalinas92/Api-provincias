<template>

<div class="col-md-12 mx-auto bg-white p-4">

            <table class="table">
                <thead class="bg-primary text-ligth">
                    <tr>

                        <th scole="col">Titulo_Noticia </th>
                        <th scole="col">Nombre_provincia </th>
                        <th scole="col">Acciones </th>


                    </tr>

                </thead>
                <tbody>
                    <tr v-for="infos in info" v-bind:key="infos.id" >
                        <td v-text="infos.id"  ></td>
                        <td v-text="infos.nombre"></td>


                        <td>
                            <input type="submit" class="btn btn-success"
                            v-on:click=save(infos)
                            value="Agregar Favoritos">
                        </td>


                    </tr>

                </tbody>









            </table>



        </div>







</template>


<script>
import axios from "axios";
export default {



     data () {
    return {
      info: null,
        proviid:'',
        provinombres:'',

        resul:[]

    }
  },
    mounted () {
        //console.log('hola desde el mounted');

        this.getTodos();
        this.save();
  },
  methods:{

      getTodos(){

          axios.get('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre')
          .then(res=>{

              //console.log(res.data.provincias);

              this.info=res.data.provincias;

          })
          .catch(error=>{
                        console.log(error);
                    })

      },

  save(infos){
      axios.post('/favoritos', infos)
      .then(res=>{



         console.log(res.data);

        this.resul=res.data;


      })
        .catch(error=>{
                        console.log(error);
                    })
  }


  }
}






</script>
