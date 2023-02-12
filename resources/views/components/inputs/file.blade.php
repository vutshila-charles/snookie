@props(['label', 'name', 'placeholder' => ''])
<div class="flex items-center">

    <div >
        <span class="ml-5 rounded-md shadow-sm">
            <input class="sr-only" type="file" id="{{$name}}" name="{{$name}}" wire:model="{{ $name }}" >
            <label class="px-3 py-2 text-sm font-medium leading-4 text-gray-700 transition duration-150 ease-in-out border border-gray-300 rounded-md cursor-pointer hover:text-gray-500 active:bg-gray-50 active:text-gray-800">
                {{ $label }}
            </label>
        </span>
    </div>
</div>

