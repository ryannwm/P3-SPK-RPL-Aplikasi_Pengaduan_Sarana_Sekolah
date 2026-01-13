<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aspirasi App</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="content flex min-h-screen min-w-screen">
            <div class="absolute">
                @include('layouts.partials.alert')
            </div>
            <div class="card w-md m-auto">
                <header>
                    <h2>Login to your account</h2>
                    <p>Enter your details below to login to your account</p>
                </header>
                <section>
                    <form method="POST" action="{{ route('auth.login') }}" class="form grid gap-6">
                        @csrf
                        <div class="grid gap-2">
                            <label>Username</label>
                            <input type="text" name="username" @error('username') aria-invalid="true" @enderror >
                        </div>
                        <div class="grid gap-2">
                            <div class="flex items-center gap-2">
                                <label>Password</label>
                            </div>
                            <input type="password" name="password" @error('password') aria-invalid="true" @enderror >
                        </div>
                        <footer class="flex flex-col items-center gap-2">
                            <button type="submit" class="btn w-full">Login</button>
                            <p class="mt-4 text-center text-sm">Don't have an account? <a href="#" class="underline-offset-4 hover:underline">Sign up</a></p>
                        </footer>
                    </form>
                    </section>
            </div>
        </div>
    </body>
</html>
