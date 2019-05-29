@extends('layouts.app')

@section('content')

<titulo titulo="Dashboard" v-bind:breadcrumbs="{{$listaBreadcrumbs}}">

</titulo>

<div class="container-fluid">
  <div class="row">
    <!-- Row -->
    @can('eAdmin')
                        <div class="col-lg-3 col-md-6">
                        <!-- card -->
                        <a href="{{route('usuarios.index')}}"><div class="card card-inverse card-success ">
                            <div class="card-body">

                                <div class="d-flex m-t-10">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-people"></i></h1></div>
                                    <div>
                                        <h1 class="card-title">{{$totalUsuarios}}</h1>
                                        <h6 class="card-subtitle">Usuários Cadastrados</h6> </div>
                                </div>

                            </div>
                        </div></a>
                      </div>
                      @endcan
                        <!-- card -->
                        <!-- card -->
                        @can('eAutor')
                      <div class="col-lg-3 col-md-6">
                        <a href="{{route('artigos.index')}}"><div class="card card-inverse card-primary">
                            <div class="card-body">
                                <div class="d-flex m-t-10">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-doc"></i></h1></div>
                                    <div>
                                        <h1 class="card-title">{{$totalArtigos}}</h1>
                                        <h6 class="card-subtitle">Artigos Cadastrados</h6> </div>
                                </div>

                            </div>
                        </div></a>
                        </div>
                        @endcan
                        <!-- card -->
                        <!-- card -->
                        @can('eAdmin')
                      <div class="col-lg-3 col-md-6">
                        <a href="{{route('autores.index')}}"><div class="card card-inverse card-warning">
                            <div class="card-body">
                                <div class="d-flex m-t-10">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-user"></i></h1></div>
                                    <div>
                                        <h1 class="card-title">{{$totalAutores}}</h1>
                                        <h6 class="card-subtitle">Autores Cadastrados</h6> </div>
                                </div>

                            </div>
                        </div></a>
                        </div>
                        @endcan
                        <!-- card -->
                        <!-- card -->
                      @can('eAdmin')
                      <div class="col-lg-3 col-md-6">
                        <a href="{{route('adm.index')}}"><div class="card card-inverse card-danger">
                            <div class="card-body">
                                <div class="d-flex m-t-10">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="fa fa-lock"></i></h1></div>
                                    <div>
                                        <h1 class="card-title">{{$totalAdmin}}</h1>
                                        <h6 class="card-subtitle">Admin Cadastrados</h6> </div>
                                </div>

                            </div>
                        </div></a>
                        </div>
                        @endcan
                        <!-- card -->
                        <!-- card -->
                      <div class="col-lg-3 col-md-6">
                        <div class="card card-inverse" style="background-color: #484848; border-color: #484848;">
                            <div class="card-body">
                                <div class="d-flex m-t-10">
                                    <div class="m-r-20 align-self-center">
                                        <h1 class="text-white"><i class="icon-refresh"></i></h1></div>
                                    <div>
                                        <h1 class="card-title">1.0.1</h1>
                                        <h6 class="card-subtitle">Versão Atual</h6> </div>
                                </div>

                            </div>
                        </div>
                        </div>
                        <!-- card -->

  </div>
</div>


@endsection
