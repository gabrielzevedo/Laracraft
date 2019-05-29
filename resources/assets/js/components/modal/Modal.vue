<template>
  <!-- The Modal -->
    <div class="modal fade" v-bind:id="idmodal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">{{titulo}}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <slot></slot>
          </div>
          <div class="modal-footer">
            <slot name="botoes"></slot>
            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    export default {
      props:['idmodal','titulo']
    }
</script>
