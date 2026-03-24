<x-layout>
    <x-slot:heading>Create Job Listing</x-slot:heading>

<form method="POST" action="/jobs">
    @csrf
  <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
      <p class="mt-1 text-sm/6 text-gray-600">We just need a quick few data points.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <x-form-field>
          <x-form-label for="title">Job Title</x-form-label>
          <div class="mt-2">
            <x-form-input id="title" name="title" placeholder="$100,000 a year" required/>
            <x-form-error id="title"/>
          </div>
        </x-form-field>

        <x-form-field>
          <x-form-label for="salary">Job Salary</x-form-label>
          <div class="mt-2">
            <x-form-input id="salary" name="salary" placeholder="$100,000 a year" required/>
            <x-form-error id="salary"/>
          </div>
        </x-form-field>
        
      </div>
      
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>






</x-layout>