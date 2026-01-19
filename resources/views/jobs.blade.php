<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <ul>
        @foreach($jobs as $job)
            <li>
                <h3>{{$job['title']}}</h3>
                <p>Salary: {{$job['salary']}} a year</p>
                <a href="{{url("/jobs/$job[id]")}}">View more</a>
            </li>
        @endforeach
    </ul>
</x-layout>
