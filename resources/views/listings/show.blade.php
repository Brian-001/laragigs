<x-layout>
    @include('partial._search') 

        <div class="inline-flex ml-4">
            <x-bx-arrow-back class="w-6 h-6" />
            <a href="/" class="inline-block text-black font-bold">
                Back
            </a>
        </div>
        
        <div class="mx-4">
            {{-- Defining more class properties is allowed by attributes in ..components/card component --}}
           <x-card class="p-10">
                <div class="flex flex-col items-center justify-center text-center">
                    <img src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}" alt="" class="w-48 mr-6 mb-6">
                    <h3 class="text-2xl mb-2">
                        {{$listing->title}}
                    </h3>
                    <div class="text-xl font-bold mb-4">{{$listing->company}}</div>

                    <x-listing-tags :tagsCsv="$listing->tags"/>

                    <div class="text-lg my-4 inline-flex items-center justify-center">
                        <x-ei-location class="w-6 h-6" />
                        {{$listing->location}}
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            Job description
                        </h3>
                        <div class="text-lg space-y-6">
                            {{$listing->description}}
                            <a href="mailto:{{$listing->email}}" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                                Contact Employer
                            </a>
                            <a href="mailto:{{$listing->website}}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                                Visit Website
                            </a>
                        </div>
                    </div>
                </div>
            </x-card>
            {{-- <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{$listing->id}}/edit">
                    <div class="inline-block">
                        <x-ei-pencil />
                        Edit
                    </div>
                </a>

                <form action="/listings/{{$listing->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">
                        
                        Delete
                    </button>
                </form>
            </x-card>  --}}

        </div>
</x-layout>