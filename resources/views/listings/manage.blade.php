<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Manage Gigs
            </h1>
        </header>
        
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($listings->isEmpty())  
                @foreach ($listings as $listing)  
                
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="" class="hover:text-laravel">{{$listing->title}}</a>
                    </td>

                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <div class="inline-flex">
                            <x-ei-pencil class="w-6 text-green-500"/>
                            <a href="/listings/{{$listing->id}}/edit">Edit</a>
                        </div>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg ">
                        <form action="/listings/{{$listing->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="inline-flex">
                                <x-eos-delete-o  class="w-6 text-red-500"/>
                                <button href="">Delete</button>
                            </div>
                        </form>
                    </td>   
                </tr>
                @endforeach
                @else
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center">No Listings Found</p>
                    </td>
                </tr> 
                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>