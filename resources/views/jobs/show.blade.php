<x-layout>
    <x-slot:heading>Job</x-slot:heading>
    <h2><strong>{{$job['title']}}</strong></h2>

    <p>
        
        This job pays <strong>{{$job['salary']}}</strong>. 
    </p>
    
    <a href="/jobs/edit" 
        class="inline-flex items-center gap-x-2 rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-all duration-200 hover:-translate-y-0.5 active:scale-95">
        Edit Job
    </a>
</x-layout>