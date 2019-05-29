@extends('layouts.app')

@section('content')

<!--<titulo titulo="Lista de Artigos" v-bind:breadcrumbs="[{texto: 'Admin', url: '/admin'}]">-->
<titulo titulo="Lista de Artigos" v-bind:breadcrumbs="{{$listaBreadcrumbs}}">

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
  <formulario id="formAdicionar" css="form-horizontal form-material" action="{{route('artigos.store')}}" method="post" enctype="" token="{{csrf_token()}}">
    <div class="form-group">
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" value="{{old('titulo')}}">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao" value="{{old('descricao')}}">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="date" class="form-control" placeholder="Data" name="data" id="data" value="{{old('data')}}">
      </div>
      <div class="col-md-12 m-b-20">
        <textarea class="form-control" rows="5" placeholder="Conteúdo" name="conteudo" id="conteudoAdd">{{old('conteudo')}}</textarea>
      </div>
    </div>
  </formulario>
  <span slot="botoes">
    <button form="formAdicionar" type="submit" class="btn btn-info waves-effect">Adicionar</button>
  </span>
</modal><!--fim modal-->

<!--modal-->
<modal idmodal="modalEditar" titulo="Editar item">
  <formulario id="formEditar" css="form-horizontal form-material" v-bind:action="'/admin/artigos/'+$store.state.item.id" method="put" enctype="" token="{{csrf_token()}}">
    <div class="form-group">
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" v-model="$store.state.item.titulo">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao" v-model="$store.state.item.descricao">
      </div>
      <div class="col-md-12 m-b-20">
        <input type="date" class="form-control" placeholder="Data" name="data" id="data" v-model="$store.state.item.data">
      </div>
      <div class="col-md-12 m-b-20">


        <textarea class="form-control" rows="5" placeholder="Conteúdo" name="conteudo" id="conteudoEditar" v-model="$store.state.item.conteudo"></textarea>
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
        <input type="text" class="form-control" placeholder="Título" name="titulo" id="titulo" v-model="$store.state.item.titulo" readonly>
      </div>
      <div class="col-md-12 m-b-20">
        <input type="text" class="form-control" placeholder="Descrição" name="descricao" id="descricao" v-model="$store.state.item.descricao" readonly>
      </div>
      <div class="col-md-12 m-b-20">
        <input type="date" class="form-control" placeholder="Data" name="data" id="data" v-model="$store.state.item.data" readonly>
      </div>
      <div class="col-md-12 m-b-20">
        <textarea class="form-control" rows="5" placeholder="Conteúdo" name="conteudo" id="conteudoDetalhes" readonly>@{{$store.state.item.conteudo}}</textarea>
      </div>
    </div>
  </formulario>
</modal><!--fim modal-->


  <div class="row">
    <!-- Row -->

  <tabela-lista
    v-bind:titulos="['#','Título','Autor','Data']"
    v-bind:itens="{{$listaArtigos}}"
    criar="#criar" detalhe="/admin/artigos/" editar="/admin/artigos/" deletar="/admin/artigos/" token="{{csrf_token()}}" modal="sim"
  ></tabela-lista>

  </div>
</div>

@endsection
