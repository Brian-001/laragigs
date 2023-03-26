<x-layout>
    @include('partial._hero')
    @include('partial._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($listings)== 0)
            
            @foreach($listings as $listing)
                <x-listing-card :listing="$listing"/>
            @endforeach

            @else
            <div class="w-screen h-screen flex justify-center">
                <p>Sorry! No such listings found</p>
            </div>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{$listings->links()}}
    </div>
</x-layout>

b:s
