<x-layout>
    <x-slot name="heading">
        Job page
    </x-slot>
    <h1>
        Job is already running here
    </h1>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per a year</p>
</x-layout>