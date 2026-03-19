<x-layout>
    <x-slot:heading>
        <div class="flex items-center justify-between w-full">
            <span>Jobs Posting</span>
            
            <a href="/jobs/create" 
               class="inline-flex items-center gap-x-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
                Create Job
            </a>
        </div>
    </x-slot>

    <div class="space-y-4">
        @foreach ($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm ">{{$job->employer->name}}</div>
                    <div>
                        <strong>{{$job['title']}}</strong> pays <strong>{{ $job['salary'] }}</strong>
                    </div>
                </a>
        @endforeach
        <div>
            {{ $jobs->links(); }}
        </div>
    </div>
</x-layout>