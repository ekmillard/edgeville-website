@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'error-notice w-100 m-0 mt-2']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
