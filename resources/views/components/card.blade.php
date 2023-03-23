{{-- Adding attributes to make the component allow more class properties in other views when called  --}}

<div {{$attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6'])}}>

{{-- Slot is used when you want to surround something with a component tag --}}
{{$slot}}
</div>