<div class="hero min-h-screen">
	<div class="hero-content gap-20  grid grid-cols-2 w-full">

		<div class="card flex-shrink-0 shadow-2xl bg-base-100 col-span-1">
			<div class="card-body">
				<div class="image-carosel h-120 flex flex-col items-center justify-center gap-5">
					<div class="h-120 w-full object-contain grid items-center overflow-hidden relative" id="carousel-images">
						<img class="w-auto h-120" id="displayeImage" src="/images/wicker.png">
					</div>
					<div id="carousel-thumbnails">
						<ul class="flex gap-5">
							<li
								class="h-12 w-12 border-[1px] border-gray-300 content-center rounded-lg cursor-pointer overflow-hidden bg-no-repeat bg-center bg-cover"
								style="background-image: url('/images/wicker.png');"></li>
							<li
								class="h-12 w-12 border-[1px] border-gray-300 content-center rounded-lg cursor-pointer overflow-hidden bg-no-repeat bg-center bg-cover"
								style="background-image: url('/images/wicker2.jpg');"></li>
							<li
								class="h-12 w-12 border-[1px] border-gray-300 content-center rounded-lg cursor-pointer overflow-hidden bg-no-repeat bg-center bg-cover"
								style="background-image: url('/images/wicker3.jpg');"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center lg:text-left w-full col-span-1">
			<h1 class="text-xl 2xl:text-5xl font-bold">Minimalis Wicker Chair</h1>
			<div class="flex gap-2 items-center">
				<div class="rating rating-xs 2xl:rating-md gap-1">
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled checked />
				</div>
				<div class="divider divider-horizontal"></div>
				<h2 class="font-bold text-xxs 2xl:text-lg">
					124 Review
				</h2>
			</div>
			<div class="py-2">
				<span class="text-red-500 text-xl 2xl:text-2xl font-bold"> 2,5Jt </span><span class="line-through text-xs"> 3,5Jt </span>
			</div>
			<ul class="text-xs">
				<li>Pengiriman Gratis</li>
				<li>Garansi 1 Tahun</li>
				<li>Gratis Konsultasi</li>
			</ul>
			<div class="divider divider-vertical"></div>
			<form action="">
				<div class="flex flex-col gap-2">
					<h3 class="text-xs">Warna:</h3>
					<div class="flex gap-2" id="variants">
						<label
							class="flex items-center justify-center w-10 h-10 rounded-md bg-cover bg-no-repeat border-[1px] border-gray-400"
							for="" style="background-image: url('/images/wicker.png')">
							<input class="checkbox checkbox-sm checkbox-accent outline-none border-none" name="productcolor" type="radio"
								checked="checked" />
						</label>
						<label
							class="flex items-center justify-center w-10 h-10 rounded-md bg-cover bg-no-repeat border-[1px] border-gray-400"
							for="" style="background-image: url('/images/wicker.png')">
							<input class="checkbox checkbox-sm checkbox-accent outline-none border-none" name="productcolor"
								type="radio" />
						</label>
						<label
							class="flex items-center justify-center w-10 h-10 rounded-md bg-cover bg-no-repeat border-[1px] border-gray-400"
							for="" style="background-image: url('/images/wicker.png')">
							<input class="checkbox checkbox-sm checkbox-accent outline-none border-none" name="productcolor"
								type="radio" />
						</label>
					</div>
				</div>
				<div class="divider divider-vertical"></div>
				<div class="flex items-center gap-2" id="input-number">
					<button class="btn btn-sm" id="sub" type="button">-</button>
					<input class="input border-gray-100 input-sm w-12 text-center border-2 rounded-lg" type="text" value="1">
					<button class="btn btn-sm" id="add" type="button">+</button>
				</div>
				<div class="h-4"></div>
				<div class="flex gap-5">
					<button class="btn btn-sm 2xl:btn-md bg-red-500 hover:bg-red-400 text-white smooth-transition capitalize" type="submit">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
						</svg>
						Masukkan Keranjang</button>
					<a href="/ar/123"
						class="btn btn-sm 2xl:btn-md bg-transparent border-2 border-red-500 hover:bg-red-400 text-red-500 hover:text-white smooth-transition capitalize"
						type="submit">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
						</svg>
						Lihat Langsung</a>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	document.getElementById("input-number").addEventListener("click", function(e) {
		let input = document.querySelector("#input-number input");
		if (e.target.id == "add") {
			input.value = parseInt(input.value) + 1;
		} else if (e.target.id == "sub") {
			if (parseInt(input.value) > 1)
				input.value = parseInt(input.value) - 1;

		}
	});

	document.querySelectorAll("#carousel-thumbnails li").forEach((item) => {
		item.addEventListener("click", function(e) {
			document.querySelector("#carousel-images img").src = e.target.style.backgroundImage.replace(
				'url("', '').replace('")', '');
		});
	})

	document.querySelectorAll("#variants label").forEach((item) => {
		item.addEventListener("click", function(e) {
			let images = e.target.style.backgroundImage;

			if (e.target.style.backgroundImage == "") {
				images = e.target.parentElement.style.backgroundImage;
			}

			document.querySelector("#carousel-images img").src = images.replace(
				'url("', '').replace('")', '');
		});
	})
</script>
