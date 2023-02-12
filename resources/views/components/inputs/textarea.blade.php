@props(['label', 'name', 'type' => 'text', 'placeholder' => ''])
<div class="sm:col-span-2">
    <label for="company" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1">
        <textarea ype={{ $type }} id="{{$name}}" name="{{$name}}" wire:model.defer="{{ $name }}" placeholder="{{ $placeholder }}" class="block w-full px-2 py-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </textarea>
      @error($name) <span class="text-sm text-red-500">{{ $message }}</span> @enderror
    </div>
  </div>