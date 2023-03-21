<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs Brayo</title>
    @vite('resources/css/app.css')
</head>
<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="index.html">
            <img src="{{asset('images/logo.png')}}" alt="" class="w-24">
        </a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel">Register</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-laravel">Login</a>
            </li>
        </ul>
    </nav>
    {{-- Output is viewed --}}

    {{-- Hero Image --}}
    
    <main>
        @yield('content')
    </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start 
    font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">

        <p class="ml-2">Copyright &copy; 2022, All Rights reserverd</p>
        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>
</html>