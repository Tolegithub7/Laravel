<x-layout>
    <x-slot name="heading">
        Jobs page
    </x-slot>
    <h1>
        This is jobs page where you can findout different jobs!
    </h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                {{-- <div>
                    {{ $job->employeer->name }}
                </div> --}}
                <div><h2 class="block px-4 py-6 border-blue-900 border rounded-lg"><strong>Job Title : </strong> {{ $job['title'] }}</h2>
                    <li><strong>Salary:</strong> {{ $job['salary'] }}</li>
                    <li><Strong>Location:</Strong> {{ $job['location'] }}</li>
                    <li><Strong>Age:</Strong> {{ $job['Age'] }}</li>
                </div>
                
            </a>
        @endforeach
    </div>
</x-layout>