@php
$collectionItems = [
    [
        'aspectRatio' => 'square',
        'image' => '/images/decoration.jpg',
        'labelText' => 'Dekorasi',
    ],
    [
        'aspectRatio' => 'square',
        'image' => '/images/lamp.png',
        'labelText' => 'Lampu',
    ],
    [
        'aspectRatio' => '2/1',
        'image' => '/images/desk.jpg',
        'labelText' => 'Meja',
    ],
    [
        'aspectRatio' => '2/1',
        'image' => '/images/diningset.jpg',
        'labelText' => 'Dining Set',
    ],
    [
        'aspectRatio' => 'square',
        'image' => '/images/sofa.jpg',
        'labelText' => 'Sofa',
    ],
    [
        'aspectRatio' => 'square',
        'image' => '/images/shelves.jpg',
        'labelText' => 'Meja Rak',
    ],
];
@endphp


<div class="flex flex-col p-32 bg-[#f5f5f5] items-center justify-center gap-10">
    <div class="text-center flex items-center justify-center flex-col gap-2">
        <h2 class="font-extrabold text-2xl">Koleksi Pilihan</h2>
        <div class="w-full max-w-110 h-0.5 bg-red-500"></div>
    </div>
    <div class="grid grid-cols-4 gap-8 mt-10 w-full max-w-screen-lg">
        @foreach($collectionItems as $item)
            <a href="#" class="border-8 border-white relative shadow-lg overflow-hidden group"
                style="
                    grid-column: span {{ ($item['aspectRatio'] === 'square') ? '1' : '2' }} / span {{ ($item['aspectRatio'] === 'square') ? '1' : '2' }};
                    aspect-ratio: {{ $item['aspectRatio'] }};
                "
            >
                <img src="{{$item['image']}}" alt="{{ $item['labelText'] }}" class="object-cover w-full h-full group-hover:w-120 group-hover:h-120 smooth-transition filter grayscale-[0.5] group-hover:grayscale-0" />
                <div class="absolute bottom-2 left-4 text-xxs tracking-wide rounded-sm font-bold text-white bg-pink-500 py-xs px-2">
                    {{ $item['labelText'] }}
                </div>
            </a>
        @endforeach
    </div>
</div>
