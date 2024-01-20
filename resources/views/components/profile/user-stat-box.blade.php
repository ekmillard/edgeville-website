@props(['title', 'value', 'extraContent' => null])

<div class="col">
    <div class="content-box p-4 d-flex flex-column align-items-center justify-content-start text-center">
        <div class="d-flex flex-row align-items-center justify-content-start">
            <p class="h5 text-white text-uppercase">{{ $title }}:</p>
        </div>
        <p class='h5 mb-0 text-primary text-uppercase'>{{ $value }}</p>

        @if($extraContent)
            {{ $extraContent }}
        @endif
    </div>
</div>
