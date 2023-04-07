@props(['listing'])

<x-card>
    <div class="flex">
        <img src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')}}" alt="" class="hidden w-48 mr-6 md:block">
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="text-lg mt-4 inline-flex items-center justify-center">
                <x-ei-location class="w-6 h-6" />
                {{$listing->location}}
                
            </div>
        </div>
    </div>
</x-card>