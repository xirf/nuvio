@php
	$id = 'carousel-' . str_replace(' ', '-', strtolower($name) . '-' . rand(0, 1000));
@endphp

<div class="carousel-container h-80">
	<div class="flex w-full justify-between items-center">
		<h1 class="font-bold">
			{{ $name }}
		</h1>

		<a href="{{ $url }}">
			<div class="grid grid-cols-2 gap-2 text-xs group text-gray-400 hover:text-red-500 smooth-transition">
				Lihat Semua <svg class="w-4 h-4 group-hover:translate-x-2 smooth-transition" xmlns="http://www.w3.org/2000/svg"
					fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
				</svg>
			</div>
		</a>
	</div>
	<div class="py-5 flex ">
		<div class="flex flex-col overflow-hidden relative">
			<span class="prev btn btn-ghost absolute top-1/2 left-0 -translate-y-1/2 z-50">
				<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
			</span>
			<div class="products-carousel _carousel masked-lr h-full full w-full smooth-transition relative shrink-0 "
				id="{{ $id }}">
				<div class="flex h-full items-center justify-center slider overflow-visible smooth-transition">
					@foreach ($list as $item)
						<x-shop.items :item="$item" />
					@endforeach
				</div>
			</div>
			<span class="next btn btn-ghost absolute top-1/2 right-0 -translate-y-1/2 z-50">
				<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
				</svg>
			</span>
		</div>
	</div>
</div>
