@extends('layouts.app')

@section('content')

<!--<titulo titulo="Lista de Artigos" v-bind:breadcrumbs="[{texto: 'Admin', url: '/admin'}]">-->
<titulo titulo="Lista de Administradores" v-bind:breadcrumbs="{{$listaBreadcrumbs}}">

</titulo>

<div class="container-fluid">

@if($errors->all())

  <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
    <h3 class="text-danger"><i class="fa fa-exclamation-circle"></i> Erro</h3>
    @foreach ($errors->all() as $key => $value)
      {{$value}}<br/>
    @endforeach
  </div>

@endif
<!--<modal-link tipo="circle" titulo="Editar" idmodal="mteste" cor="btn-primary" icone="fa fa-pencil"></modal-link>-->
<!--modal-->
<modal idmodal="modalAdicionar" titulo="Adicionar item">
  <formulario id="formAdicionar" css="form-horizontal form-material" action="{{route('adm.store')}}" method="post" enctype="" token="{{csrf_token()}}">
    <div class="form-group">
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Nome" name="name" id="name" value="{{old('name')}}">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" value="{{old('email')}}">
      </div>
      <div class="col-md-12 m-b-20">
          <label for="admin">Admin</label>
          <select class="form-control" name="admin" id="admin">
            <option value="N" {{(old('admin') && old('admin') == 'N' ? 'selected' : '')}}>Não</option>
            <option value="S" {{(old('admin') && old('admin') == 'S' || !old('admin') ? 'selected' : '')}}>Sim</option>
          </select>
      </div>
      <div class="col-md-12 m-b-20">
        <input type="password" class="form-control" placeholder="Senha" name="password" id="password">
      </div>
    </div>
  </formulario>
  <span slot="botoes">
    <button form="formAdicionar" type="submit" class="btn btn-info waves-effect">Adicionar</button>
  </span>
</modal><!--fim modal-->

<!--modal-->
<modal idmodal="modalEditar" titulo="Editar item">
  <formulario id="formEditar" css="form-horizontal form-material" v-bind:action="'/admin/adm/'+$store.state.item.id" method="put" enctype="" token="{{csrf_token()}}">
    <div class="form-group">
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Nome" name="name" id="name" v-model="$store.state.item.name">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" v-model="$store.state.item.email">
      </div>
      <div class="col-md-12 m-b-20">
          <label for="admin-editar">Admin</label>
          <select class="form-control" name="admin" id="admin-editar" v-model="$store.state.item.admin">
            <option value="N">Não</option>
            <option value="S">Sim</option>
          </select>
      </div>
      <div class="col-md-12 m-b-20">
        <input type="password" class="form-control" placeholder="Senha" name="password" id="password">
      </div>
    </div>
  </formulario>
  <span slot="botoes">
    <button form="formEditar" type="submit" class="btn btn-info waves-effect">Salvar</button>
  </span>
</modal><!--fim modal-->

<!--modal-->
<modal idmodal="modalDetalhe" titulo="Detalhes">
  <formulario css="form-horizontal form-material" action="#" method="post" enctype="" token="{{csrf_token()}}">
    <div class="form-group">
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Nome" name="name" id="name" v-model="$store.state.item.name" readonly>
      </div>
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="E-mail" name="email" id="email" v-model="$store.state.item.email" readonly>
      </div>
    </div>
  </formulario>
</modal><!--fim modal-->


  <div class="row">
    <!-- Row -->
  <tabela-lista
    v-bind:titulos="['#','Nome','E-mail']"
    v-bind:itens="{{$listaModelo}}"
    criar="#criar" detalhe="/admin/adm/" editar="/admin/adm/" modal="sim"
  ></tabela-lista>

  </div>
</div>

@endsection
