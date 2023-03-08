@extends ('layout.app')
@section('title', 'Edition')
@section('content')
    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.index') }}">Liste des
        étudiants</a>
    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.create') }}">Ajouter un
        étudiant</a>
    </nav>
    </div>
    <h1 class="titre_H1 p-4">Éditer le profil</h1>
    <article class="h-full w-full flex items-center justify-center gap-6 ">
        <div
            class="px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <form method="post" class=" flex flex-col gap-6 rounded-lg ">
                @csrf
                @method('PUT')
                <div>
                    <input aria-label="Nom de l'étudiant" type="text" name="nom" id="nom"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Nom de l'étudiant" value="{{ ucfirst($etudiant->nom) }}" required />
                </div>
                <div>
                    <input aria-label="Prénom de l'étudiant" type="text" name="prenom" id="prenom"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Prénom de l'étudiant" value="{{ ucfirst($etudiant->prenom) }}" required />
                </div>
                <div>
                    <input aria-label="Addresse de l'etudiant" type="text" name="adresse" id="adresse"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Adresse de l'étudiant" value="{{ ucfirst($etudiant->adresse) }}" required />
                </div>
                <select name="ville_id" id="ville"
                    class="bg-[rgba(255,255,255,0.68)] w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm">
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->nom }} </option>
                        @if ($ville->id == $etudiant->ville_id)
                            <option value="{{ $ville->id }}" selected>
                                {{ $ville->nom }} </option>
                        @endif
                    @endforeach
                </select>
                <div>
                    <input aria-label="Telephone de l'etudiant" type="text" name="telephone" id="telephone"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Téléphone de l'étudiant" value="1234567890" />
                </div>
                <div>
                    <input aria-label="Email de l'etudiant" type="email" name="email" id="email"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Email de l'étudiant" value="{{ ucfirst($etudiant->email) }}" required />
                </div>
                <div>
                    <input aria-label="Date de naissance de l'etudiant" type="date" name="dateNaissance"
                        id="dateNaissance" class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="Date de naissance de l'étudiant" value="{{ ucfirst($etudiant->dateNaissance) }}"
                        required />
                </div>
                <button aria-label="Valider le formulaire" type="submit" class="call_to_action p-2 ">
                    Valider
                </button>
            </form>

        </div>
    </article>

@endsection
