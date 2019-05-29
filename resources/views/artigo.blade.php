@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12 m-t-30">
      <div class="card">
        <div class="card-body">
          <h1>{{$artigo->titulo}}</h1>
          <h3>{{$artigo->descricao}}</h3>
          <p><small>Por {{$artigo->user->name}} - em {{date('d/m/Y',strtotime($artigo->data))}}</small></p>
          {!!$artigo->conteudo!!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
