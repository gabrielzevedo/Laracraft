<template>
  <div class="card"><a v-bind:href="url">
                                <img class="card-img-top img-responsive" v-bind:src="img" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">{{titulo}}</h4>
                                    <p class="card-text">{{texto}}</p>
                                    <p class="card-text"><small class="text-muted">{{data | formataData}}</small></p>
                                </div>
                          </a>  </div>

</template>
<script>
    export default {
        props:['img','url','titulo','texto','data'],
        filters:{
          formataData: function(valor){
            if(!valor) return '';
            valor = valor.toString();
              valor = valor.split('-');
              return valor[2] + '/' + valor[1] + '/' + valor[0];
            return valor;
          }
        }
    }
</script>
