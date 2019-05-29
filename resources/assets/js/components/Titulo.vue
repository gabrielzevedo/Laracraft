<template>
  <div class="row page-titles m-b-0">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">{{titulo}}</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" v-for="breadcrumb in breadcrumbs"><a v-if="breadcrumb.url" v-bind:class="defineClass" v-bind:href="breadcrumb.url">{{breadcrumb.texto}}</a><span v-if="!breadcrumb.url">{{breadcrumb.texto}}</span></li>
                </ol>
            </div>
        </div>
</template>
<script>
    export default {
      props:['titulo', 'breadcrumbs'],
      computed:{
        defineClass: function(){
          if(this.url){
            return "active";
          }else{
            return "";
          }
        }
      }
    }
</script>
