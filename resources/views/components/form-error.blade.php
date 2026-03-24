@props(['id'])

@error($id)
    <p class="text-sm mt-1 text-red-500 italic font-semibold">{{ $message }}</p>
@enderror