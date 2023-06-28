<div class="px-14 pt-20 -mt-20 py-4 w-full grid grid-cols-2 rounded-md" id="_breadcrumbs">
	<div class="col-span-1 flex justify-end  flex-col">
		<h2 class="text-3xl font-bold"> Belanja </h2>
		<div class="text-xxs breadcrumbs">
			<ul>
				<li>
					<a class="flex gap-2" href="/">
						<svg class="w-4 h-4 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
							stroke-width="1.5" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
						</svg>

						Home
					</a>
				</li>
				<li>
					<a href="/decoration">
						Dekorasi
					</a>
				</li>
				<li>
					Kursi Modern
				</li>
			</ul>
		</div>
	</div>
	<div class="col-span-1 h-56 flex justify-end  object-contain overflow-hidden ">
		<img class="h-full w-auto " id="decorationImage" src="/images/wicker.png" alt="Wicker Chair">
	</div>
</div>

<script>
	function getAccentColorFromImage(url) {
		return new Promise((resolve, reject) => {
			const image = new Image();

			image.addEventListener('load', function() {
				const canvas = document.createElement('canvas');
				const context = canvas.getContext('2d');

				canvas.width = image.width;
				canvas.height = image.height;

				context.drawImage(image, 0, 0);

				const accentColor = getDominantColor(canvas);
				resolve(accentColor);
			});

			image.addEventListener('error', function() {
				reject('Failed to load image');
			});

			image.src = url;
		});
	}

	function getDominantColor(canvas) {
		const context = canvas.getContext('2d');
		const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
		const pixels = imageData.data;

		const colorCounts = {};

		for (let i = 0; i < pixels.length; i += 4) {
			const red = pixels[i];
			const green = pixels[i + 1];
			const blue = pixels[i + 2];
			const alpha = pixels[i + 3];

			if (alpha !== 0) {
				const color = `${red},${green},${blue}`;

				if (colorCounts[color]) {
					colorCounts[color]++;
				} else {
					colorCounts[color] = 1;
				}
			}
		}

		let maxCount = 0;
		let accentColor = [];

		for (const color in colorCounts) {
			if (colorCounts[color] > maxCount) {
				maxCount = colorCounts[color];
				accentColor.push(color);
			}
		}

		return accentColor[accentColor.length - 1];
	}

	const imageUrl = document.getElementById('decorationImage').src;
	getAccentColorFromImage(imageUrl)
		.then((rgb) => {
			document.getElementById("_breadcrumbs").style.backgroundImage = `linear-gradient(rgba(255, 255, 255, 0), rgba(${rgb[0]}, ${rgb[1]}, ${rgb[2]}, 0.2))`;
		})
		.catch((error) => {
			console.error('Error:', error);
		});
</script>
