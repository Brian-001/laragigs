<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-4">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Gig
            </h2>
            <p>Edit: {{$listing->title}}</p>
        </header>


        <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" 
                placeholder="Kenya Polysack" value="{{$listing->company}}">
                @error('company')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" 
                placeholder="Senior Laravel Developer" value="{{$listing->title}}">
                @error('title')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" 
                placeholder="Nairobi, Kenya" value="{{$listing->location}}">
                @error('location')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Company Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" 
                placeholder="example@domain.com" value="{{$listing->email}}">
                @error('email')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website url</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" 
                placeholder="https://www.example.com" value="{{$listing->website}}">
                @error('website')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Seperated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" 
                placeholder="Larvel, Postgress, NodeJs" value="{{$listing->tags}}">
                @error('tags')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                <img src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}"
                 alt="" class="w-48 mr-6 mb-6">

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
                    {{$listing->description}}  
                </textarea>
                @error('description')
                   <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                   </p>
                @enderror
            </div>
            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Gig
                </button>
                <a href="/" class="bg-black text-white  rounded ml-4 py-2 px-4 hover:bg-gray-500">Back</a>
            </div>
        </form>
    </x-card>
    
</x-layout>