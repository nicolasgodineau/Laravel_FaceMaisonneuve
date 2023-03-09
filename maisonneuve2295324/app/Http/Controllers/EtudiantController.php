<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use DB;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all(); 

        return view('etudiant.index', ['etudiants' => $etudiants]); 
    }

    public function create()
    {
        $villes = Ville::all();
        return view('etudiant.create',['villes'=> $villes]);
    }

    public function store(Request $request)
    {

        $etudiant = Etudiant::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'adresse'=>$request->adresse,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
                'dateNaissance'=>$request->dateNaissance,
                'ville_id'=>$request->ville_id
        ]);

        return redirect(route('etudiant.index'));
        }


    
        public function show(Etudiant $etudiant)
    {
        // Trouve la ville de l'étudiant
        $ville = Ville::find($etudiant['ville_id']);

        return view('etudiant.show', ['etudiant' => $etudiant, 'ville' => $ville]);
    }

    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();

        return view('etudiant.edit', ['villes'=> $villes, 'etudiant' => $etudiant]);
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'dateNaissance'=>$request->dateNaissance,
            'ville_id'=>$request->ville_id
        ]);
        return redirect(route('etudiant.index'));

    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect(route('etudiant.index'));

    }
    
    public function filtre(Request $request)
    {
        $filtres = $request->all();

        // si jamais l'utilisateur ne change pas le sélect (que le select reste sur l'option 'Filtrer par') alors on défini le filtre par 'ID'
        if ($filtres["filtre"] == "defaut") {
            $filtres["filtre"] = 'id';
        }

        $etudiants = Etudiant::orderBy($filtres["filtre"],$filtres["tri"])
        ->get();

        return view('etudiant.index', ['etudiants' => $etudiants, 'filtres' => $filtres]); //renvoie les messages récupérés

    }

}
