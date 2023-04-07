<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
            <p class="mb-4">Create account to post gigs</p>
        </header>

        <form action="/users" method="POST">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg-mb-2">Name</label>
                <input type="text" name="name" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('name')}}">

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Email" class="inline-block text-lg-mb-2">Email</label>
                <input type="email" name="email" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('email')}}">

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Password" class="inline-block text-lg-mb-2">Password</label>
                <input type="password" name="password" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('password')}}">
                
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="confirm_password" class="inline-block text-lg-mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border border-gray-200 rounded p-2 w-full"
                value="{{old('password_confirmation')}}">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an Account?
                    <a href="/login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>