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

    <main
        class="min-h-screen  flex items-center justify-center font-body bg-gradient-to-tr from-indigo-700 via-violet-300 to-blue-200 ">

        <section
            class="h-[80vh] w-[60%] max-w-7xl flex flex-col gap-2 rounded-3xl bg-gradient-to-br from-[rgba(255,255,255,0.7)] to-[rgba(255,255,255,0.3)] p-4 z-10 shadow-2xl">
            <div class="w-full flex flex-col items-center justify-center gap-10">
                <nav class="flex gap-4 w-full items-start rounded-3xl bg-[rgba(255,255,255,0.68)] p-2">
                    <h1 class="flex-grow text-Violetfoncer font-black uppercase font-body p-1"><a
                            href="/">FaceMaisonneuve</a>
                    </h1>
                    @yield('content')
        </section>
    </main>
</body>

</html>
