@extends ('layout.app')
@section('title', 'Liste des articles')
@section('content')

    <div class="flex flex-col items-center h-full justify-between gap-4 overflow-auto">
        <div class="w-full">
            <h1 class="titre_H1 p-4">@lang('lang.articles')</h1>
            <div
                class="flex items-center justify-center gap-4 rounded-3xl bg-[rgba(255,255,255,0.2)] p-2 text-xs w-full text-Violetfoncer cursor-pointer">
                <a class="text-Violetfoncer p-1 link-underline link-underline-black"
                    href="{{ route('article.create') }}">@lang('lang.create_article')</a>
            </div>
        </div>

        <div class="w-full grid grid-cols-2 gap-10 overflow-auto px-2 py-8">
            @foreach ($articles as $article)
                <div
                    class="pl-5 pr-0 flex flex-col flex-wrap items-start justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
                    @foreach ($etudiants as $etudiant)
                        @if ($etudiant->user_id == $article->user_id)
                            <div class="chat chat-start w-full">
                                <div class="chat-image avatar">
                                    <div class="w-10 rounded-full">
                                        <img class="border-2 border-Violetfoncer rounded-full mx-auto"
                                            src="{{ asset('images/profil/profil_') }}{{ ucfirst($etudiant->user_id) }}.svg"
                                            alt="Etudiant {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}">
                                    </div>
                                </div>
                                <div class="chat-header text-Violetfoncer">
                                    {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}
                                </div>
                                <div class="chat-bubble w-full">
                                    <p class="truncate w-80">{{ $article->body }}</p>
                                </div>
                                <div class="chat-footer">
                                    <a class="text-Violetfoncer hover:text-Violetfoncer text-xs link-underline link-underline-black"
                                        href="{{ route('article.show', $article->id) }}">@lang('lang.read')</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
        {!! $articles->links('pagination::semantic-ui') !!}
    </div>

@endsection
