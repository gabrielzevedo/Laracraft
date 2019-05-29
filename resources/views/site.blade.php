@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12 m-t-30">
<div class="card-deck">
  @foreach ($lista as $key => $value)
    <cards img="/assets/images/big/img1.jpg"
            texto="{{str_limit($value->descricao, 70, "...")}}"
            titulo="{{$value->titulo}}"
            data="{{$value->data}}"
            url="{{route('artigo',[$value->id,str_slug($value->titulo)])}}"></cards>
  @endforeach
</div></div>

</div></div>

@endsection
