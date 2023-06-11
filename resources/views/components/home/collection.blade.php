@php
$collectionItems = [
    [
        'colSpan' => '1',
        'aspectRatio' => 'square',
        'image' => '/images/decoration.jpg',
        'labelText' => 'Dekorasi',
    ],
    [
        'colSpan' => '1',
        'aspectRatio' => 'square',
        'image' => '/images/lamp.png',
        'labelText' => 'Lampu',
    ],
    [
        'colSpan' => '2',
        'aspectRatio' => '2/1',
        'image' => '/images/desk.jpg',
        'labelText' => 'Meja',
    ],
    [
        'colSpan' => '2',
        'aspectRatio' => '2/1',
        'image' => '/images/diningset.jpg',
        'labelText' => 'Dining Set',
    ],
    [
        'colSpan' => '1',
        'aspectRatio' => 'square',
        'image' => '/images/sofa.jpg',
        'labelText' => 'Sofa',
    ],
    [
        'colSpan' => '1',
        'aspectRatio' => 'square',
        'image' => '/images/shelves.jpg',
        'labelText' => 'Meja Rak',
    ],
];
@endphp


<div class="flex flex-col p-32 bg-[#f5f5f5] items-center justify-center gap-10">
    <div class="text-center flex items-center justify-center flex-col gap-2">
        <h2 class="font-extrabold text-4xl">Koleksi Pilihan</h2>
        <div class="w-full max-w-110 h-1 bg-red-500"></div>
    </div>
    <div class="grid grid-cols-4 gap-8 mt-10 w-full max-w-screen-lg">
        @foreach($collectionItems as $item)
            <div class="col-span-{{ $item['colSpan'] }} aspect-{{ $item['aspectRatio'] }} border-8 border-white relative shadow-md"
                style="background: url('{{ $item['image'] }}') center center / cover no-repeat">
                <div class="absolute bottom-2 left-4 rounded-lg font-bold text-white bg-pink-500 py-1 px-4">
                    {{ $item['labelText'] }}
                </div>
            </div>
        @endforeach
    </div>
</div>
