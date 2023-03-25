<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-4">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Gig
            </h2>
            <p>Post a gig to find a Developer</p>
        </header>
        <form method="POST" action="/listings">
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" placeholder="Kenya Polysack">
            </div>
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Senior Laravel Developer">
            </div>
            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Nairobi, Kenya">
            </div>
            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">Website url</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" placeholder="https://www.example.com">
            </div>
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Seperated)</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Larvel, Postgress, NodeJs">
            </div>
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">Company Logo</label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="tags">
            </div>
            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Job description</label>
                <textarea name="description" cols="30" rows="10" class="border border-gray-200 rounded p-2 w-full" placeholder="Include: tasks, requirements, salary etc">  
                </textarea>
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