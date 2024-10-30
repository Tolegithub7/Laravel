<x-layout>
    <x-slot name="heading">
        Jobs page
    </x-slot>
    <h1>
        This is jobs page where you can findout different jobs!
    </h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <h2 class="text-green-800 hover:underline"><strong>Job Title : </strong> {{ $job['title'] }}</h2>
            </a>
            <li><strong>Salary:</strong> {{ $job['salary'] }}</li>
            <li><Strong>Location:</Strong> {{ $job['location'] }}</li>
            <li><Strong>Age:</Strong> {{ $job['Age'] }}</li>
        @endforeach
    </ul>
</x-layout>