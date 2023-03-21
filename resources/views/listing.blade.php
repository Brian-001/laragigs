@extends('layout')

@section('content')
@include('partial._search') 
    
    <a href="/" class="inline-block text-black ml-4 mb-4">
        Back{{ svg('bx-arrow-back') }}</a>
    <div class="mx-4">
       <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="{{asset('images/no-image.png')}}" alt="" class="w-48 mr-6 mb-6">
                <h3 class="text-2xl mb-2">
                    {{$listing->title}}
                </h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Laravel</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">API</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Backend</a>
                    </li>
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Vue</a>
                    </li>
                </ul>
                <div class="text-lg my-4">
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
        </div> 
    </div>
@endsection