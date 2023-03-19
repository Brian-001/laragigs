@extends('layout')

@section('content') 
    
    <a href="{{url('/listings.blade.php')}}" class="inline-block text-black ml-4 mb-4">Back</a>
    <div class="mx-4">
       <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="images/acme.jpg" alt="" class="w-48 mr-6 mb-6">
                <h3 class="text-2xl mb-2">Senior Laravel Developer</h3>
                <div class="text-xl font-bold mb-4">Acme Corp</div>
                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Laravel</a>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
@endsection