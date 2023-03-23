@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach($tags as $tag)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            {{-- pass in a query param (/?tag) to filter what that param is --}}
           <a href="/?tag={{$tag}}">{{$tag}}</a> 
        </li>
    @endforeach
</ul>