@extends ('layout.app')
@section('title', 'Welcome')
@section('content')
    <div class="flex flex-col items-center h-full justify-between gap-4 overflow-auto">
        <div class="w-full">
            <h1 class="titre_H1 p-4">@lang('lang.list_students')</h1>
            <form action="{{ route('etudiant.filtre') }}" method="get"
                class="flex items-center justify-center gap-4 rounded-3xl bg-[rgba(255,255,255,0.2)] p-2 text-xs w-full text-Violetfoncer cursor-pointer">
                @csrf
                <select class="bg-transparent" name="filtre" id="filtre">
                    <option value="defaut"selected>@lang('lang.filter')</option>
                    <option value="nom">@lang('lang.name')</option>
                    <option value="prenom">@lang('lang.first_name')</option>
                    <option value="id">ID</option>
                </select>
                <select class="bg-transparent cursor-pointer " name="tri" id="tri">
                    <option value="defaut"selected>@lang('lang.order')</option>
                    <option value="asc">asc</option>
                    <option value="desc">desc</option>
                </select>
                <input class="text-base text_decoration_line cursor-pointer p-1  link-underline link-underline-black"
                    type="submit" value="@lang('lang.validate')">
            </form>
        </div>

        <div class="w-full grid grid-cols-fluid gap-6 overflow-auto p-1">
            @foreach ($etudiants as $etudiant)
                <a class="text-Violetfoncer hover:text-Violetfoncer "
                    href="{{ route('etudiant.show', $etudiant->user_id) }}">
                    <article
                        class="flex flex-col items-center justify-center border-2 border-Violetfoncer rounded-3xl pb-2  ease-in duration-200 shadow transition hover:scale-105 hover:bg-[rgba(255,255,255,0.68)]">
                        <img class="h-28 w-auto" src="{{ asset('images/profil/profil_') }}{{ $etudiant->user_id }}.svg"
                            alt="" />
                        <h2>{{ $etudiant->nom }}</h2>
                        <h2>{{ $etudiant->prenom }}</h2>
                    </article>
                </a>
            @endforeach
        </div>
        {!! $etudiants->links('pagination::semantic-ui') !!}
    </div>


@endsection
