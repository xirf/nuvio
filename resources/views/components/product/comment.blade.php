<?php
use Faker\Factory as Faker;
use Carbon\Carbon;
$faker = Faker::create('id_ID');

$reviews = [];

$rating = [
    '1' => $faker->numberBetween(0, 100),
    '2' => $faker->numberBetween(0, 100),
    '3' => $faker->numberBetween(0, 100),
    '4' => $faker->numberBetween(0, 100),
    '5' => $faker->numberBetween(0, 100),
];

for ($i = 0; $i < 3; $i++) {
    $reviews[] = [
        'name' => $faker->name,
        'date' => Carbon::now()
            ->subDays(rand(0, 100))
            ->format('d M Y'),
        'rating' => rand(1, 5),
        'type' => $faker->colorName . ' ' . $faker->word,
        'review' => $faker->paragraph,
        'image' => ['https://source.unsplash.com/random/200x200?sig=' . $i, 'https://source.unsplash.com/random/200x200?sig=' . $i + $i * $i],
    ];
}

$averageRating = number_format(
    array_sum(
        array_map(
            function ($key, $value) {
                return $key * $value;
            },
            array_keys($rating),
            $rating,
        ),
    ) / array_sum($rating),
    1,
);

$totalReview = array_sum(
    array_map(
        function ($key, $value) {
            return $key * $value;
        },
        array_keys($rating),
        $rating,
    ),
);

?>

<div class="flex w-full bg-gray-100 p-14 mt-14 flex-col">
	<div class="flex items-center w-full justify-center gap-2 flex-col">
		<h1 class="text-3xl font-bold">Rating & Ulasan</h1>
		<div class="w-32 h-1 bg-red-500"> </div>
	</div>
	<div class="grid grid-cols-2 gap-10 mt-10">
		<div class="col-span-1 flex items-center justify-center flex-col gap-5">
			<h1 class="text-7xl font-bold">
				{{ $averageRating }}
			</h1>
			<div class="rating rating-md rating-half">
				@for ($i = 0; $i < 10; $i++)
					@php
						$isChecked = $i + 1 == (floor($averageRating * 2) / 2) * 2;
						$halfStar = ($i + 1) % 2 == 0 ? 2 : 1;
					@endphp

					<input class="mask mask-star-2 bg-red-500 mask-half-{{ $halfStar }}" type="radio" disabled
						{{ $isChecked ? 'checked' : '' }}>
				@endfor
			</div>
			<b>
				{{ $totalReview }}
				Ulasan
			</b>
		</div>
		<div class="flex flex-col-reverse col-span-1">
			{{-- print how much rating for each star --}}
			@foreach ($rating as $i => $rate)
				<div class="flex items-center justify-center gap-5">
					<div class="flex gap-5">
						<p class="text-xl font-bold">
							{{ $i }}
						</p>
					</div>
					<div class="mask h-6 w-6 mask-star-2 bg-red-500">

					</div>
					<progress class=" h-3 w-56 progress-error progress" value="{{ $rate }}"
						max="{{ max($rating) }}"></progress>
				</div>
			@endforeach
		</div>
	</div>
</div>

<div class="flex flex-col py-14">

	<div class="flex justify-between font-bold">
		<h3>Menampilkan 1-3 dari {{ count($reviews) }} ulasan</h3>
		<select class="select select-ghost ">
			<option disabled selected>Paling Relevan</option>
			<option>Terbaru</option>
			<option>Terlama</option>
			<option>Rating Tertinggi</option>
			<option>Rating Terendah</option>
		</select>
	</div>
	<div class="divider divider-vertical"></div>
	<div class="flex flex-col gap-5">
		@foreach ($reviews as $review)
			<div class="flex flex-col gap-5 py-4 h-44 overflow-hidden">
				<div class="flex">
					<b class="w-60">{{ $review['name'] }}</b>
					<div class="rating rating-sm flex-grow">
						@for ($i = 0; $i < 5; $i++)
							@if ($i == $review['rating'])
								<input class="mask mask-star-2 bg-red-500" type="radio" disabled checked>
							@else
								<input class="mask mask-star-2 bg-red-500" type="radio" disabled>
							@endif
						@endfor
					</div>
					<span class="text-gray-500 text-xs">{{ $review['date'] }}</span>
				</div>
				<div class="flex">
					<div class="flex flex-col w-60 gap-2 shrink-0">
						<span class="text-gray-500">{{ $review['type'] }}</span>
						<div class="flex">
							@foreach ($review['image'] as $image)
								<img class="w-14 h-14 object-cover rounded-lg mr-2" src="{{ $image }}" alt="">
							@endforeach
						</div>
					</div>
					<p class="flex-grow">{{ $review['review'] }}</p>

				</div>
			</div>
			<div class="divider divider-vertical"></div>
		@endforeach
		<div class="w-full flex items-center justify-center">
			<button class="text-red-500 font-bold" id="showAll">Lihat Semua Ulasan</button>
		</div>
	</div>
</div>
