<template>
  <div class="col-12">
    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <h6 class="card-subtitle"></h6>
                                <a v-if="criar && !modal" v-bind:href="criar">Criar</a>
                                <modal-link v-if="criar && modal" tipo="button" titulo="Adicionar" idmodal="modalAdicionar" cor="btn-primary" icone="fa fa-plus"></modal-link>

                                <div class="table-responsive m-t-40">
                                  <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                      <thead>
                                          <tr>
                                              <th v-for="titulo in titulos">{{titulo}}</th>
                                              <th v-if="detalhe || editar || deletar">Ações</th>
                                          </tr>
                                      </thead>
                                      <tfoot>
                                          <tr>
                                              <th v-for="titulo in titulos">{{titulo}}</th>
                                              <th v-if="detalhe || editar || deletar">Ações</th>
                                          </tr>
                                      </tfoot>
                                      <tbody>
                                          <tr v-for="(item,index) in itens">
                                              <td v-for="i in item">{{i | formataData}}</td>

                                              <td v-if="detalhe || editar || deletar">
                                                <form v-bind:id="index" v-bind:action="deletar + item.id" method="post">
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <input type="hidden" name="_token" v-bind:value="token">

                                                  <modal-link v-if="detalhe" onclick="javascript:loadText('detalhes')" v-bind:item="item" v-bind:url="detalhe" tipo="circle" titulo="Detalhes" idmodal="modalDetalhe" cor="btn-warning" icone="fa fa-eye"></modal-link>
                                                  <modal-link v-if="editar" v-bind:item="item" v-bind:url="editar" tipo="circle" titulo="Editar" idmodal="modalEditar" cor="btn-success" icone="fa fa-pencil" onclick="javascript:loadText('editar')"></modal-link>
                                                  <modal-link v-if="deletar && token" v-bind:item="item" tipo="circle" titulo="deletar" v-bind:index="index" cor="btn-danger" icone="fa fa-trash-o"></modal-link>
                                                </form>

                                              </td>
                                          </tr>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                        </div></div>
</template>
<script>


    export default {
      props:['titulos', 'itens', 'criar', 'detalhe', 'editar', 'deletar', 'token','modal'],
      methods:{
        executaForm: function(index){
          document.getElementById(index).submit();
        }
      },
      filters:{
        formataData: function(valor){
          if(!valor) return '';
          valor = valor.toString();
          if(valor.split('-').length == 3){
            valor = valor.split('-');
            return valor[2] + '/' + valor[1] + '/' + valor[0];
          }

          return valor;
        }
      },
      /*computed:{
        lista:function(){
          let lista = this.itens.data;
        }
      }*/
    }
</script>
