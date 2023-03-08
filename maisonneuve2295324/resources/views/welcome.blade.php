@extends ('layout.app')
@section('title', 'Welcome')
@section('content')
    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.index') }}">Liste des
        étudiants</a>
    <a class="text-Violetfoncer p-1 link link-underline link-underline-black" href="{{ route('etudiant.create') }}">Ajouter un
        étudiant</a>
    </nav>
    <div class="container flex flex-col items-center justify-evenly pt-6 gap-4 text-Violetfoncer">
        <div>
            <h1 class="flex_col_itemCenter_justifyCenter titre_H1 p-4">Bienvenue sur Facemaisonneuve</h1>
            <p class="font-semibold text-center">
                Le forum de discussion du collège Mainsonneuve !
            </p>
        </div>
        <div class="flex flex-col gap-4 pt-8">
            <p>
                Il s'agit d'un espace sûr et inclusif où les élèves peuvent partager leurs idées, leurs opinions et leurs
                questions
                avec leurs pairs et leurs enseignants.
            </p>
            <p>
                Que vous souhaitiez discuter de l'actualité, partager vos passe-temps et intérêts, demander des conseils ou
                simplement vous connecter avec d'autres étudiants, Facemaisonneuve est l'endroit pour vous.
            </p>
            <p>
                Nous encourageons une communication respectueuse et constructive, et nous demandons à tous les membres de
                respecter
                les directives de notre communauté.
            </p>
            <p>
                Travaillons ensemble pour créer un environnement positif et solidaire où chacun se sent bienvenu et entendu.
                Alors rejoignez-nous à Facemaisonneuve, et commençons la conversation !
            </p>
        </div>
    </div>

    </div>

@endsection
