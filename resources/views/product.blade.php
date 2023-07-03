@php
	$links = [
	    [
	        'title' => 'Dekorasi',
	        'url' => '/decoration',
	    ],
	    [
	        'title' => 'Kursi Modern',
	        'url' => '/decoration/chair',
	    ],
	];
@endphp

<x-layouts.app>
	<x-product.breadcrumbs name="product" :links="$links" />
	<x-product> </x-product>
	<x-product.alsoViewed> </x-product.alsoViewed>
	<x-product.comment> </x-product.comment>
</x-layouts.app>
