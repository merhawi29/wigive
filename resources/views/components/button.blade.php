@props(['type' => 'button', 'class' => 'btn-success', 'text' => 'Button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'btn btn-success rounded-1 p-2  btn-cart fs-7 hover:bg-success' . $class]) }}>
    {{ $text }}
</button>
