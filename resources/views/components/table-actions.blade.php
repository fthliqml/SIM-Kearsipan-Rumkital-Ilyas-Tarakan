@props([
    'action', // unduh | cetak | bagikan | kirim-pesan
    'href' => '#', // tautan opsional
])

@php
    $map = [
        'unduh' => [
            'icon' => 'fa-solid fa-download',
            'title' => 'Unduh',
            'color' => 'text-success',
        ],
        'cetak' => [
            'icon' => 'fa-solid fa-print',
            'title' => 'Cetak',
            'color' => 'text-secondary',
        ],
        'bagikan' => [
            'icon' => 'fa-solid fa-share-from-square',
            'title' => 'Bagikan',
            'color' => 'text-primary',
        ],
        'kirim-pesan' => [
            'icon' => 'fa-brands fa-google',
            'title' => 'Kirim Pesan',
            'color' => 'text-danger',
        ],
    ];

    $data = $map[$action] ?? $map['unduh'];
@endphp

<td class="text-center">
    <a href="{{ $href }}" class="btn btn-link p-0 {{ $data['color'] }}" title="{{ $data['title'] }}">
        <i class="{{ $data['icon'] }}"></i>
    </a>
</td>
