@extends ('layout.app')
@section('title', 'Lire un article')
@section('content')
    <h1 class="titre_H1 p-4">@lang('lang.article')</h1>
    <article class=" h-full w-full flex flex-col items-center justify-center gap-6 ">
        <div
            class="relative h-96 w-96 px-10 py-8 flex flex-col items-left justify-between gap-1 bg-[#F5F4FE] shadow-xl rounded-3xl text-Violetfoncer">
            <div
                class="absolute top-[-108px] left-[50%] -translate-x-1/2 w-32 rounded-full bg-[#F5F4FE] shadow-lg shadow-neutral-300">
                <img class="border-2 border-Violetfoncer rounded-full mx-auto"
                    src="{{ asset('images/profil/profil_') }}{{ ucfirst($article->user_id) }}.svg"
                    alt="Etudiant {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}">
            </div>
            <div>
                <h1><small class="text-gray-400 text-xs font-semibold">@lang('lang.title'): <br>
                    </small>{{ ucfirst($article->title) }}</h1>
            </div>
            <div>
                <p><small class="text-gray-400 text-xs font-semibold">@lang('lang.content'): <br>
                    </small>{{ ucfirst($article->body) }}</p>
            </div>
            <p><small class="text-gray-400 text-xs font-semibold">@lang('lang.written_by'): <br> </small> {{ $article->nom }}
                {{ $article->prenom }}</p>
            {{-- Permet de controler si l'étudiant qui est connecter et le créateur de l'article, si OUI, il peut l'éditer --}}
            @if ($etudiant->user_id == $article->user_id)
                <a class="text-Violetfoncer hover:text-Violetfoncer call_to_action w-full p-2 px-6 text-center"
                    href="{{ route('article.edit', $article->id) }}">@lang('lang.edit')</a>
                <form action="{{ route('article.delete', $article->id) }}" method="POST" class="w-full">
                    @csrf
                    @method('delete')
                    <button type="submit" class="call_to_action_red w-full p-2 px-6">@lang('lang.delete')</button>
                </form>
            @endif
        </div>

    </article>
@endsection
