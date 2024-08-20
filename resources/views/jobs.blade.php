<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    {{ $job['title'] }} pay : {{ $job['salary'] }} from {{ $job['place'] }}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>