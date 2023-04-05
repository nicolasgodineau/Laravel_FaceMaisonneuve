@extends ('layout.app')
@section('title', 'Profil étudiant')
@section('content')

    <h1 class="titre_H1 p-4">@lang('lang.student_profile')</h1>
    <article class="h-full w-full flex items-center justify-center gap-6 ">
        <div
            class="px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 border-2 border-Violetfoncer rounded-full mx-auto"
                    src="{{ asset('images/profil/profil_') }}{{ ucfirst($etudiant->user_id) }}.svg"
                    alt="Etudiant {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}">
            </div>
            <div class="w-full">
                <h3 class="text-center text-xl text-black font-medium leading-8">
                    {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <p>@lang('lang.student')(e)</p>
                </div>
                <table class="text-xs my-3">
                    <tbody>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">@lang('lang.birthday')</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->dateNaissance) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">@lang('lang.adress')</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->adresse) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">@lang('lang.city')</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->ville) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">@lang('lang.phone')</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->telephone) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">@lang('lang.email')</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->email) }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <a class="call_to_action w-full text-center p-2 px-6 "
                href="{{ route('etudiant.edit', $etudiant->user_id) }}">@lang('lang.edit')</a>
            <form action="{{ route('etudiant.delete', $etudiant->user_id) }}" method="POST" class="w-full">
                @csrf
                @method('delete')
                <button type="submit" class="call_to_action_red w-full p-2 px-6">@lang('lang.delete')</button>
            </form>
        </div>
    </article>
@endsection
