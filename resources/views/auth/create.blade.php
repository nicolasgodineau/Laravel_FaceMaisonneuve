@extends ('layout.app')
@section('title', 'Création')
@section('content')
    <h1 class="titre_H1 p-4">@lang('lang.student_create')</h1>
    <article class="h-full w-full flex items-center justify-center gap-6 ">
        <div
            class="px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <form action="{{ route('user.store') }}" method="POST" class=" flex flex-col gap-6 rounded-lg ">
                @csrf
                <div>
                    <input aria-label="Nom de l'étudiant" type="text" name="nom" id="nom"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.name')" />
                </div>
                <div>
                    <input aria-label="Prénom de l'étudiant" type="text" name="prenom" id="prenom"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.first_name')" />
                </div>
                <div>
                    <input aria-label="Date de naissance de l'etudiant" type="date" name="dateNaissance"
                        id="dateNaissance" class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.birthday')" />
                </div>
                <div>
                    <input aria-label="Addresse de l'etudiant" type="text" name="adresse" id="adresse"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.adress')" />
                </div>
                <select name="ville_id" id="ville"
                    class="bg-[rgba(255,255,255,0.68)] w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm">
                    @foreach ($villes as $ville)
                        <option value="{{ $ville->id }}">
                            {{ $ville->nom }} </option>
                    @endforeach
                </select>
                <div>
                    <input aria-label="Telephone de l'etudiant" type="text" name="telephone" id="telephone"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.phone')" />
                </div>
                <div>
                    <input aria-label="Email de l'etudiant" type="email" name="email" id="email"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.email')" />
                </div>
                <div>
                    <input aria-label="Mot de passe" type="password" name="password" id="password"
                        class="w-full rounded-3xl border-gray-200 p-2 pr-12 text-sm shadow-sm"
                        placeholder="@lang('lang.password')" />
                </div>
                <button aria-label="Valider le formulaire" type="submit" class="call_to_action p-2">
                    @lang('lang.validate')
                </button>
            </form>
        </div>

    </article>

@endsection
