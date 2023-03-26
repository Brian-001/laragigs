<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-4">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p>Post a gig to find a Developer</p>
        </header>


        <form method="POST" action="/listing" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" 
                placeholder="Kenya Polysack" value="{{old('company')}}">
                @error('company')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" 
                placeholder="Senior Laravel Developer" value="{{old('title')}}">
                @error('title')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" 
                placeholder="Nairobi, Kenya" value="{{old('location')}}">
                @error('location')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Company Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" 
                placeholder="example@domain.com" value="{{old('email')}}">
                @error('email')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website url</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" 
                placeholder="https://www.example.com" value="{{old('website')}}">
                @error('website')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Seperated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" 
                placeholder="Larvel, Postgress, NodeJs" value="{{old('tags')}}">
                @error('tags')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo">
                @error('logo')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Job description</label>
                <textarea name="description" rows="10" class="border border-gray-200 rounded 
                p-2 w-full" placeholder="Include: tasks, requirements, salary etc">
                    {{old('description')}}  
                </textarea>
                @error('description')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Gig
                </button>
                <a href="/" class="bg-black text-white  rounded ml-4 py-2 px-4 hover:bg-gray-500">Back</a>
            </div>
        </form>
    </x-card>
</x-layout>