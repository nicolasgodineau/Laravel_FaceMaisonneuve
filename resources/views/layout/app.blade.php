<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')

    <title>{{ config('app.name') }} - @yield('title')</title>
</head>

<body>
    @php $lang = session()->get('locale') @endphp
    <main
        class="min-h-screen flex items-center justify-center font-body bg-gradient-to-tr from-indigo-700 via-violet-300 to-blue-200 ">

        <section
            class="h-[90vh] w-full max-w-7xl mx-10 flex flex-col gap-2 rounded-3xl bg-gradient-to-br from-[rgba(255,255,255,0.7)] to-[rgba(255,255,255,0.3)] p-4 z-10 shadow-2xl">
            <div class="w-full flex flex-col items-center justify-center gap-10">
                <nav class="flex gap-4 w-full items-start rounded-3xl bg-[rgba(255,255,255,0.68)] p-2">
                    <h1 class="flex-grow text-Violetfoncer font-black uppercase font-body p-1"><a
                            href="/">FaceMaisonneuve</a>
                    </h1>
                    <div class="h-full flex items-center gap-2">
                        <a class="nav-link @if ($lang == 'en') text-info @endif"
                            href="{{ route('lang', 'en') }}"><img class="h-3"
                                src="{{ asset('images/united-states-flag-icon.svg') }}" alt=""></a>
                        <a class="nav-link @if ($lang == 'en') text-info @endif"
                            href="{{ route('lang', 'fr') }}"><img class="h-3"
                                src="{{ asset('images/france-flag-icon.svg') }}" alt=""></a>
                    </div>

                    @guest
                        <a class="text-Violetfoncer p-1  link-underline link-underline-black"
                            href="{{ route('auth.create') }}">@lang('lang.register_user')</a>
                        <a class="text-Violetfoncer p-1  link-underline link-underline-black"
                            href="{{ route('auth.login') }}">@lang('lang.sign_up')</a>
                    @else
                        <a class="text-Violetfoncer p-1  link-underline link-underline-black"
                            href="{{ route('article.index') }}">@lang('lang.articles')</a>
                        <a class="text-Violetfoncer p-1  link-underline link-underline-black"
                            href="{{ route('etudiant.index') }}">@lang('lang.list_students')</a>
                        <a class="text-Violetfoncer p-1  hover:text-Violetfoncer "
                            href="{{ route('etudiant.show', Auth::user()->id) }}">@lang('lang.profil')</a>
                        <a class="text-Violetfoncer p-1  link-underline link-underline-black"
                            href="{{ route('logout') }}">@lang('lang.logout')</a>
                    @endguest
                </nav>
            </div>
            @yield('content')
        </section>
    </main>
</body>

</html>
