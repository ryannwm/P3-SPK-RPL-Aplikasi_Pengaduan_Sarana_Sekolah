<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pengaduan Sarana Sekolah</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
    <dialog id="logout-dialog" class="dialog" aria-labelledby="logout-dialog-title" aria-describedby="logout-dialog-description">
    <div>
        <header>
        <h2 id="logout-dialog-title">Are you absolutely sure?</h2>
        <p id="logout-dialog-description">This action cannot be undone. This will permanently delete your account and remove your data from our servers.</p>
        </header>

        <footer>
            <button class="btn-outline" onclick="document.getElementById('logout-dialog').close()">Cancel</button>
            <form method="post" action="{{ route('auth.logout') }}" >
                @csrf
                <button type="submit" class="btn-destructive" onclick="document.getElementById('alert-dialog').close()">Logout</button>
            </form>
        </footer>
    </div>
    </dialog>
    <div class="content flex min-h-screen min-w-screen">
        @include('layouts.partials.sidebar')
        <main class="py-8 px-12">
                @include('layouts.partials.alert')
                @yield('content')
                {{-- <button type="button" class="btn" onclick="document.dispatchEvent(new CustomEvent('basecoat:sidebar'))">Toggle sidebar</button> --}}
            </main>
        </div>
    </body>
</html>
