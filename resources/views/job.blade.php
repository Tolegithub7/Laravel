<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    @foreach ($jobs as $job)
        <div class="border p-3 my-2">
            <H1>{{ $JOB['title'] }}</H1>
            <p>
                This job pays {{ $job['salary'] }} and found in {{ $job['place'] }}
            </p>
        </div>
    @endforeach
</x-layout>