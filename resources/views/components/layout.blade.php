<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs Brayo</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/">
            <img src="{{asset('images/logo.png')}}" alt="" class="w-14">
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">Welcome {{auth()->user()->name}}</span>
                </li>
                <li>
                    <div class="inline-flex hover:text-laravel">
                        <x-eos-settings-suggest-o class="w-6 h-6"/>
                        <a href="/listings/manage">
                            Manage Listings
                        </a>
                </li>
                    </div>
                    
                <li>
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <div class="inline-flex hover:text-laravel">
                            <x-eos-logout class="w-6 h-6"/>
                            <button type="submit">Logout</button>
                        </div>
                    </form>
                </li>
            @else
                <li>
                    <div class="inline-flex hover:text-laravel">
                        <x-gmdi-account-circle-o class="w-6 h-6" />
                        <a href="/register">Register</a>
                    </div>
                </li>

                <li>
                    <div class="inline-flex hover:text-laravel">
                        <x-gmdi-login  class="w-6 h-6"/>
                        <a href="/login">Login</a>
                    </div>
                </li>
            @endauth
        </ul>
    </nav>
    {{-- Output is viewed --}}

    
    
    <main>
        {{$slot}}
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start 
    font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">

        <p class="ml-2">Copyright &copy; 2022, All Rights reserverd</p>
        <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>

    <x-flash-message />
</body>
</html>