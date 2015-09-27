<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Input;
use Auth;
use Redirect;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{

    protected $rules = [
    'name' => ['required', 'min:3'],
    'email' => ['required'],
    'password' => ['sometimes', 'required', 'min:6']
    ];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(User $user, $id)
    {
        $user = User::whereId($id)->firstOrFail();
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, User $user, $id)
    {
        $profile = $user->findOrFail($id);

        if (!$profile) {
            return Redirect::back()->withErrors('Erro usuário não enconrtado!');
        }
        $this->validate($request, $this->rules);

        $input = $request->all();
        $profile->update($input);

        return Redirect::back()->with('message',  'Atualizado!');

    }

    /**
     * Atualizar senha
     *
     * @param  int  $id
     * @return Response
     */
    public function getPassword()
    {
        $user = Auth::user();
        return view('profile.password', compact('user'));
    }

    /**
     * Atualizar senha
     *
     * @param  Request  $request
     * @return Response
     */
    public function postPassword(Request $request)
    {
        $this->validate($request, [
            'old_password'=>'required',
            'password'=>'required|confirmed|different:old_password',
            'password_confirmation'=>' required|different:old_password|same:password|min:6'
            ]);

        $input = $request->all();

        $user = Auth::user();

        // verificar no banco se senha antiga e igual a do banco
        if(!Hash::check($input['old_password'], $user->getAuthPassword())){
            return Redirect::back()->with('ErrorMessage',  'Senha atual não confere, tente novamente!');
        }

        // se passar então hash a senha nova e gravar no banco
        $user->password = Hash::make($input['password']);
        if(!$user->save()){
            return Redirect::back()->with('ErrorMessage',  'Senha não pode ser alterar, tente novamente mais tarde.');
        }

        return Redirect::back()->with('message',  'Senha alterada com sucesso!');


    }
}
