<x-layout>
    <x-slot:heading>About</x-slot>
@foreach ($jobs as $job)
    <li>
        <strong>{{$job['title']}}</strong> pays <strong>{{ $job['salary'] }}</strong>
    </li>
    <br>
@endforeach

</x-layout>