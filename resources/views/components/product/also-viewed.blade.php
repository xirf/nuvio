<?php
$item['products'] = [
    [
        'name' => 'Wicker Chair',
        'price' => 'Rp. 1.000.000',
        'dicount' => 'Rp. 500.000',
        'id' => '1234',
        'image' => 'wicker.png',
        'issale' => true,
    ],

    [
        'name' => 'Wicker Chair',
        'price' => 'Rp. 1.000.000',
        'dicount' => 'Rp. 500.000',
        'id' => '1234',
        'image' => 'wicker.png',
        'issale' => true,
    ],

    [
        'name' => 'Wicker Chair',
        'price' => 'Rp. 1.000.000',
        'dicount' => 'Rp. 500.000',
        'id' => '1234',
        'image' => 'wicker.png',
        'issale' => true,
    ],

    [
        'name' => 'Wicker Chair',
        'price' => 'Rp. 1.000.000',
        'dicount' => 'Rp. 500.000',
        'id' => '1234',
        'image' => 'wicker.png',
        'issale' => true,
    ],
];
?>

<div class="flex flex-col gap-14 items-center justify-center">
	<div class="flex flex-col items-center gap-2">
		<h1 class="text-4xl font-bold">
			Produk Terkait
		</h1>
		<div class="w-32 h-1 bg-red-500"></div>
	</div>

	<div class="grid grid-cols-4 gap-5">
		@foreach ($item['products'] as $product)
			<a href="/product/{{ $product['id'] }}">
				<div class="card col-span-1 relative">
                    @if ($product['issale'])
                        <div class="absolute top-0 left-0 bg-pink-500 text-white px-3 py-1 text-xxs">Sale</div>
                    @endif
					<figure><img src="{{ asset('images/' . $product['image']) }}"></figure>
					<div class="card-body">
						<h2 class="card-title">{{ $product['name'] }}</h2>
						<div class="flex flex-col">
                            @if ($product['issale'])
                                <span class="text-gray-400 text-xxs line-through">{{ $product['price'] }}</span>
                                <span class="text-red-500 font-bold">{{ $product['dicount'] }}</span>
                            @else
                                <span class="text-red-500 font-bold">{{ $product['price'] }}</span>
                            @endif
                        </div>
					</div>
				</div>
			</a>
		@endforeach
	</div>
</div>
