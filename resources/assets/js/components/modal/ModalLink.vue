<template>
  <span class="">
    <span v-if="item">
      <button v-on:click="preencheFormulario()" v-if="tipo == 'button' || !tipo" type="button" v-bind:class="'btn ' + cor || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + idmodal"><span class="btn-label"><i v-bind:class="icone"></i></span>{{titulo}}</button>
      <button v-on:click="preencheFormulario()" v-if="tipo == 'circle' && titulo != 'deletar'" type="button" v-bind:class="'btn ' + cor + ' btn-circle'" data-toggle="modal" v-bind:data-target="'#' + idmodal"><i v-bind:class="icone"></i></button>
      <a v-on:click="preencheFormulario()" v-if="tipo == 'link'" href="$" data-toggle="modal" v-bind:data-target="'#' + idmodal">{{titulo}}</a>
      <span v-if="titulo ==  'deletar'">
        <button v-if="tipo == 'circle'" type="submit" v-bind:form="index" v-bind:class="'btn ' + cor + ' btn-circle'"><i v-bind:class="icone"></i></button>
      </span>
    </span>
    <span v-if="!item">
      <button v-if="tipo == 'button' || !tipo" type="button" v-bind:class="'btn ' + cor || 'btn btn-primary'" data-toggle="modal" v-bind:data-target="'#' + idmodal"><span class="btn-label"><i v-bind:class="icone"></i></span>{{titulo}}</button>
      <button v-if="tipo == 'circle' && titulo != 'deletar'" type="button" v-bind:class="'btn ' + cor + ' btn-circle'" data-toggle="modal" v-bind:data-target="'#' + idmodal"><i v-bind:class="icone"></i></button>
      <a v-if="tipo == 'link'" href="$" data-toggle="modal" v-bind:data-target="'#' + idmodal">{{titulo}}</a>
      <span v-if="titulo ==  'deletar'">
        <button v-if="tipo == 'circle'" type="button" v-bind:class="'btn ' + cor + ' btn-circle'"><i v-bind:class="icone"></i></button>
      </span>
    </span>
  </span>
</template>

<script>
    export default {
      props:['tipo','cor','icone','idmodal','titulo','item','url','index'],
      methods:{
        preencheFormulario:function(){
          axios.get(this.url + this.item.id).then(res => {
              this.$store.commit('setItem',res.data);
          });
          //this.$store.commit('setItem',this.item);


        }
      }
    }
</script>
