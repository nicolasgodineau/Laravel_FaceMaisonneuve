<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class CustomAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
    return view('auth.login');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return view('welcome');
    }

    public function authentication(Request $request)
{
    $request->validate([
    'email' => 'required|email|exists:users',
    'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    if (!Auth::validate($credentials)):
    return redirect()->back()->withErrors(trans('auth.password'))->withInput();
    endif;

    $user = Auth::getProvider()->retrieveByCredentials($credentials);

    Auth::login($user);

    // permet de récupére et d'ajout dans la variable $user le nom et prénom de l'étudiant qui se connecte
    $etudiant = Etudiant::find($user['id']);

    $user["nom"] = $etudiant['nom'];
    $user["prenom"] = $etudiant['prenom'];


    return view('welcome', ['user' => $user]);
    //return redirect()->view('welcome', ['user' => $user]);

  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::select()->get();
        return view('auth.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
