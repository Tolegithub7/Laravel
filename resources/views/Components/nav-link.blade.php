@props(['active' => false])

<a class=" {{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:gbg-ray-700 hover:text-white"  }} rounded-md  px-3 py-2 text-sm font-medium" aria-current="{{ $active ? "page" : "false"}}" {{ $attributes }}> {{ $slot }} </a>

{{-- <a href="/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a> --}}