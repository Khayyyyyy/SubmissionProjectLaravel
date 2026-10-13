@props(['tipe' => 'info'])

@php
    $bgColor = match($tipe) {
        'sukses' => '#d1e7dd',
        'bahaya' => '#f8d7da',
        default => '#cff4fc'
    };
    $textColor = match($tipe) {
        'sukses' => '#0f5132',
        'bahaya' => '#842029',
        default => '#055160'
    };
@endphp

<div style="padding: 15px; margin-bottom: 15px; background-color: {{ $bgColor }}; color: {{ $textColor }}; border-radius: 5px;">
    {{ $slot }}
</div>