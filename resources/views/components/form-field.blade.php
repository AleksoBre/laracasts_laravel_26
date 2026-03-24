@props(['id'])
<div class="sm:col-span-4">
    <x-form-label for="{{ $id }}">{{$slot}}</x-form-label>
    <div class="mt-2">
    <x-form-input id="{{ $id }}" type="text" name="{{ $id }}" {{ $attributes }} />
    <x-form-error id="{{ $id }}"></x-form-error>
    </div>
</div>