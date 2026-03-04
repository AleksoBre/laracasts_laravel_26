<x-layout>
    <x-slot:heading>About</x-slot>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{$job['title']}}</strong> pays <strong>{{ $job['salary'] }}</strong>
                </a>
            </li>
            <br>
        @endforeach
    </ul>
</x-layout>