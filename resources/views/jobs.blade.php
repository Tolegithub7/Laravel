<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>
    @foreach ($jobs as $job)
        <div class="border p-3 my-2">
            <a href="">
                <strong><h3 class="text-lg font-bold">{{ $job['title'] }}</h3></strong>
                <p>pay : {{ $job['salary'] }}</p> <p>place  : {{ $job['place'] }}</p>
            </a>
        </div>
    @endforeach
</x-layout>