@extends ('layout.app')
@section('title', 'Welcome')
@section('content')

    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.create') }}">Ajouter un
        étudiant</a>
    </nav>
    </div>
    <div class="flex_col_itemCenter_justifyCenter gap-4 overflow-auto">
        <h1 class="titre_H1 p-4">Liste des étudiants</h1>
        <div class="flex justify-center gap-4 w-full items-start rounded-3xl  bg-[rgba(255,255,255,0.2)] p-2">
            <a class="text-Violetfoncer text-xs font-semibold p-1 link link-underline link-underline-black"
                href="{{ route('etudiant.sortASC') }}">ASC</a>
            <a class="text-Violetfoncer text-xs font-semibold p-1 link link-underline link-underline-black"
                href="{{ route('etudiant.sortDESC') }}">DESC</a>
        </div>
        <div class="w-full grid grid-cols-fluid gap-6 overflow-auto p-1">
            @forelse($etudiants as $etudiant)
                <a class="text-Violetfoncer hover:text-Violetfoncer " href="{{ route('etudiant.show', $etudiant->id) }}">
                    <article
                        class="flex flex-col items-center justify-center border-2 border-Violetfoncer rounded-3xl pb-2  ease-in duration-200 shadow transition hover:scale-105 hover:bg-[rgba(255,255,255,0.68)]">
                        <img class="h-28 w-auto" src="{{ asset('images/profil/profil_') }}{{ $etudiant->id }}.svg"
                            alt="" />
                        <h2>{{ $etudiant->nom }}</h2>
                        <h2>{{ $etudiant->prenom }}</h2>
                    </article>
                </a>
            @empty
            @endforelse
        </div>
    </div>

@endsection
