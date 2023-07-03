@php
    $fmt = new NumberFormatter('id_ID', NumberFormatter::CURRENCY);
@endphp

<a
	class="carousel_contents flex w-1/5 flex-col gap-2 items-center relative justify-center h-full carousel-item box-border px-2"
	href="{{$item['url']}}" style="box-sizing: border-box">
	<div class="w-full grow">
		<img class="w-full object-cover" src="{{ $item['image'] }}" alt="">
	</div>
	<div class="h-20 text-center">
		<h3 class="text-xs xl:text-lg font-bold">{{ $item['name'] }}</h3>
		<p class="text-xs text-red-500">
			@if ($item['discount'] > 0)
				<s class="text-gray-400 text-xxs">
					{{ $fmt->formatCurrency($item['price'], 'IDR') }}
				</s>
				<span class="font-bold">
					{{ $fmt->formatCurrency(
					    $item['price'] - ($item['price'] * $item['discount']) / 100,
					    'IDR',
					) }}
				</span>
			@else
				<span class="font-bold">
					{{ $fmt->formatCurrency($item['price'], 'IDR') }}
			@endif
		</p>
	</div>

	<div class="absolute text-center uppercase text-us top-2 left-4 flex flex-col gap-1">
		@if ($item['isSale'])
			<span class="bg-pink-500 text-white rounded-sm px-2">Sale</span>
		@endif

		@if ($item['isHot'])
			<span class="bg-pink-800 text-white rounded-sm px-2">Hot</span>
		@endif

	</div>
</a>
