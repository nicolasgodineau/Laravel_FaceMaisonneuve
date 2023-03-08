@extends ('layout.app')
@section('title', 'Profil étudiant')
@section('content')
    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.index') }}">Liste des
        étudiants</a>
    </nav>
    </div>
    <h1 class="titre_H1">Profil étudiant</h1>
    <article class="h-full w-full flex items-center justify-center gap-6 ">
        <div
            class="px-10 py-8 flex flex-col items-center justify-center gap-1 bg-[rgba(255,255,255,0.68)] shadow-xl rounded-3xl">
            <div class="photo-wrapper p-2">
                <img class="w-32 h-32 border-2 border-Violetfoncer rounded-full mx-auto"
                    src="{{ asset('images/profil/profil_') }}{{ ucfirst($etudiant->id) }}.svg"
                    alt="Etudiant {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}">
            </div>
            <div class="w-full">
                <h3 class="text-center text-xl text-black font-medium leading-8">
                    {{ ucfirst($etudiant->nom) }} {{ ucfirst($etudiant->prenom) }}</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <p>étudiant(e)</p>
                </div>
                <table class="text-xs my-3">
                    <tbody>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Date de naissance</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->dateNaissance) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Addresse</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->adresse) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Ville</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($ville->nom) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Téléphone</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->telephone) }}</td>
                        </tr>
                        <tr>
                            <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                            <td class="px-2 py-2 text-black">{{ ucfirst($etudiant->email) }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <a class="call_to_action w-full text-center p-2 px-6 "
                href="{{ route('etudiant.edit', $etudiant->id) }}">Éditer</a>
            <form action="{{ route('etudiant.delete', $etudiant->id) }}" method="POST" class="w-full">
                @csrf
                @method('delete')
                <button type="submit" class="call_to_action_red w-full p-2 px-6">Supprimer</button>
            </form>
        </div>
    </article>
@endsection
