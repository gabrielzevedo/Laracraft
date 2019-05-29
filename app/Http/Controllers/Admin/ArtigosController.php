<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artigo;
use Illuminate\Support\Facades\DB;

class ArtigosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listaBreadcrumbs = json_encode([
          ["texto"=>"Admin","url"=>route('admin')],
          ["texto"=>"Lista de Artigos","url"=>""],
        ]);

      /*  $listaArtigos = json_encode([
          ["id"=>1,"titulo"=>"HTML", "descricao"=>"Curso de HTML+CSS","data"=>"2017-11-20"],
          ["id"=>2,"titulo"=>"Python", "descricao"=>"Curso de Python","data"=>"2007-10-21"],
        ]);*/


/*        //$listaArtigos = json_encode(Artigo::select('id','titulo','descricao','data')->paginate(2));

        $listaArtigos = Artigo::select('id','titulo','descricao','user_id','data')->get();

        foreach ($listaArtigos as $key => $value) {
          //opcao1
          $value->user_id = \App\User::find($value->user_id)->name;
          unset($value->user);

          //opcao2
          //$value->user_id = $value->user->name;
          //unset($value->user);
        }*/

        /*$listaArtigos = DB::table('artigos')
                      ->join('users','users.id','=','artigos.user_id')
                      ->select('artigos.id','artigos.titulo','artigos.descricao','users.name','artigos.data')
                      ->whereNull('deleted_at')->get();*/


        $listaArtigos = Artigo::listaArtigos();

        //return view('admin.artigos.index');
        return view('admin.artigos.index', compact('listaBreadcrumbs','listaArtigos'));
        //disponibiliza a variavel na view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   //vardump
        //dd($request->all());
        $data = $request->all();

        //validacao
        $validacao = \Validator::make($data, [
          "titulo" => "required",
          "descricao" => "required",
          "data" => "required",
          "conteudo" => "required",

        ]);

        if($validacao->fails()){
          return redirect()->back()->withErrors($validacao)->withInput();
        }

        $user = auth()->user();
        $user->artigos()->create($data);

        //Artigo::create($data);
        return redirect()->back();

        ///Se não tivesse declarado $fillables na classe Artigo
        //$artigo = new Artigo;
        //$artigo->titulo = $data['titulo'];
        //$artigo->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Artigo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $data = $request->all();

      //validacao
      $validacao = \Validator::make($data, [
        "titulo" => "required",
        "descricao" => "required",
        "data" => "required",
        "conteudo" => "required",

      ]);

      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }


      ///Se não tivesse declarado $fillables na classe Artigo
      //$artigo = new Artigo;
      //$artigo->titulo = $data['titulo'];
      //$artigo->save();,
      $user = auth()->user();
      $user->artigos()->find($id)->update($data);
      //Artigo::find($id)->update($data);
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artigo::find($id)->delete();
        return redirect()->back();
    }
}
