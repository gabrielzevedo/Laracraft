<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Validation\Rule;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $listaBreadcrumbs = json_encode([
        ["texto"=>"Admin","url"=>route('admin')],
        ["texto"=>"Lista de Usuários","url"=>""],
      ]);

    /*  $listaArtigos = json_encode([
        ["id"=>1,"titulo"=>"HTML", "descricao"=>"Curso de HTML+CSS","data"=>"2017-11-20"],
        ["id"=>2,"titulo"=>"Python", "descricao"=>"Curso de Python","data"=>"2007-10-21"],
      ]);*/

      $listaModelo = json_encode(User::select('id','name','email')->get());
      //$listaArtigos = json_encode(Artigo::select('id','titulo','descricao','data')->paginate(2));


      //return view('admin.artigos.index');
      return view('admin.usuarios.index', compact('listaBreadcrumbs','listaModelo'));
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
    {
      $data = $request->all();
      $validacao = \Validator::make($data, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
      ]);

      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }

      $data['password'] = bcrypt($data['password']);

      User::create($data);
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
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

      if(isset($data['password']) && $data['password'] != ""){
        //atualizando senha
        $validacao = \Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($id)],
          //'email' => 'required|string|email|max:255|unique:users',
          'password' => 'string|min:6',
        ]);
        $data['password'] = bcrypt($data['password']);
      }else{
        $validacao = \Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => ['required','string','email','max:255',Rule::unique('users')->ignore($id)]
        ]);
        unset($data['password']);
      }


      if($validacao->fails()){
        return redirect()->back()->withErrors($validacao)->withInput();
      }
      User::find($id)->update($data);
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
      User::find($id)->delete();
      return redirect()->back();
    }
}
