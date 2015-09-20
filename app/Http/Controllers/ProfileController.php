<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Input;
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
