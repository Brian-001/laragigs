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
            <img src="{{asset('images/logo.png')}}" alt="" class="w-24">
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold uppercase">Welcome{{auth()->user()->name()}}</span>
            </li>
            <li>
                <a href="/listings/manage" class="hover:text-laravel">Manage Listings</a>
            </li>
            @else
            <li>
                <a href="/register" class="hover:text-laravel">Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel">Login</a>
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