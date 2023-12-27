@props(['value'])
<div {{ $attributes->merge(['class' => 'register-form-label']) }}>
    {{ $value ?? $slot }}
</div>
{{--<label {{ $attributes->merge(['class' => 'register-form-label']) }}>
    {{ $value ?? $slot }}
</label>--}}
