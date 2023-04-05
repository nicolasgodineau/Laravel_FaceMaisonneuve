@extends ('layout.app')
@section('title', 'Editer un article')
@section('content')

    <h1 class="titre_H1 p-4">@lang('lang.edit_article')</h1>
    <article class="h-full w-full flex items-center justify-center gap-6 ">

        <div
            class="relative px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <div
                class="absolute top-[-130px] left-[50%] -translate-x-1/2 w-40 rounded-full bg-[#F5F4FE] shadow-lg shadow-neutral-300">
                <img class="border-2 border-Violetfoncer rounded-full mx-auto"
                    src="{{ asset('images/profil/profil_') }}{{ ucfirst($etudiant->user_id) }}.svg"
                    alt="Etudiant {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}">
            </div>
            <form method="POST" class=" flex flex-col gap-6 rounded-lg ">
                @csrf
                @method('PUT')
                <div>
                    <input type="hidden" name="user_id" id="user_id" value="{{ $etudiant->user_id }}" />
                </div>
                <div>
                    <input aria-label="Titre" type="text" name="title" id="title"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.title')" value="{{ ucfirst($article->title) }}" />
                </div>
                <div>
                    <textarea class="w-full h-72 rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm" name="body" id="body"
                        cols="20" rows="4" placeholder="@lang('lang.content')">{{ ucfirst($article->body) }}</textarea>
                </div>

                <button aria-label="Valider le formulaire" type="submit" class="call_to_action p-2">
                    @lang('lang.validate')
                </button>
            </form>
        </div>

    </article>
@endsection
