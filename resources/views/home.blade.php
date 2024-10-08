<x-layout>
    <x-slot:heading>
        Home
    </x-slot:heading>
    @foreach ($jobs as $job)
    <li>{{$job['title']}} pays {{ $job['salary'] }} from {{ $job['place'] }}</li>
    @endforeach
</x-layout>