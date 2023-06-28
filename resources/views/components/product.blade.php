<div class="hero min-h-screen">
	<div class="hero-content flex-col gap-20 lg:flex-row-reverse">
		<div class="text-center lg:text-left">
			<h1 class="text-xl font-bold">Minimalis Wicker Chair</h1>
			<div class="flex gap-2 items-center">
				<div class="rating rating-xs gap-1">
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled />
					<input class="mask mask-star-2 bg-orange-400" name="rating-2" type="radio" disabled checked />
				</div>
				<div class="divider divider-horizontal"></div>
				<h2 class="font-bold text-xxs">
					124 Review
				</h2>
			</div>
			<div class="py-2">
				<span class="text-red-500 text-xl font-bold"> 2,5Jt </span><span class="line-through text-xs"> 3,5Jt </span>
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
					<div class="flex gap-2">
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
				<div class="flex flex-col gap-2">
					<div class="flex items-center gap-2" id="input-number">
						<button class="btn btn-sm" id="sub" type="button">-</button>
						<input class="input border-gray-100 input-sm w-12 text-center border-2 rounded-lg" type="text" value="1">
						<button class="btn btn-sm" id="add" type="button">+</button>
					</div>
				</div>
				<div class="h-4"></div>
				<div>
					<button class="btn btn-sm bg-red-500 hover:bg-red-400 text-white smooth-transition capitalize"
						type="submit">Masukkan Keranjang</button>
					<button
						class="btn btn-sm bg-transparent border-2 border-red-500 hover:bg-red-400 text-red-500 hover:text-white smooth-transition capitalize"
						type="submit">Beli Langsung</button>
				</div>
			</form>
		</div>
		<div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
			<div class="card-body">
				<div class="image-carosel">
					<div id="carousel-images">
						<img src="/images/wicker.png" alt="">
					</div>
					<div id="carousel-thumbnails">
						<ul class="flex">
							<li class="h-12 w-12 overflow-hidden"><img class="" src="/images/wicker.png" alt=""></li>
							<li class="h-12 w-12 overflow-hidden"><img class="" src="/images/wicker2.jpg" alt=""></li>
							<li class="h-12 w-12 overflow-hidden"><img class="" src="/images/wicker3.jpg" alt=""></li>
						</ul>
					</div>
				</div>
			</div>
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
</script>
