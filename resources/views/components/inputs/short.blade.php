
@props(['label', 'name', 'type' => 'text', 'placeholder' => ''])
<div>
    <label for="first-name" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="mt-1">
      <input type={{ $type }} id="{{$name}}" name="{{$name}}" wire:model.defer="{{ $name }}" placeholder="{{ $placeholder }}" class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
    </div>
</div>