@extends ('layout.app')
@section('title', trans('lang.connexion'))
@section('content')
    <h1 class="titre_H1 p-4">@lang('lang.connexion')</h1>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <article class="h-full w-full flex items-center justify-center gap-6 ">
        <div
            class="px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <form method="POST" class=" flex flex-col gap-6 rounded-lg ">
                @csrf
                @method('PUT')
                <div>
                    <input aria-label="Email de l'etudiant" type="email" name="email" id="email"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.email') (nicolas@nicolas.com)" value="{{ old('email') }}" />
                </div>
                <div>
                    <input aria-label="Mot de passe" type="password" name="password" id="password"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.password')" />
                </div>
                <button aria-label="Valider le formulaire" type="submit" class="call_to_action p-2">
                    @lang('lang.to_connect')
                </button>
                @if (!$errors->isEmpty())
                    <div class=" text-red-700">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
            </form>
        </div>

    </article>

@endsection
