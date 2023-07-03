@php
	use Faker\Factory as Faker;
	$faker = Faker::create();
	
	$links = [
	    [
	        'title' => 'Shop',
	        'url' => '/shop',
	    ],
	];
	
	$listGroup = [];
	
	for ($i = 0; $i < 4; $i++) {
	    $list = [];
	
	    for ($j = 0; $j < 10; $j++) {
	        $list[] = [
	            'name' => $faker->sentence(3),
	            'image' => $faker->imageUrl(640, 480),
	            'price' => $faker->randomFloat(2, 0, 100),
	            'discount' => $faker->randomFloat(2, 0, 100),
	            'isSale' => $faker->boolean(50),
	            'isHot' => $faker->boolean(50),
				'url' => "/product/" . $faker->uuid,
	        ];
	    }
	
	    $listGroup[] = [
	        'name' => 'Group ' . ($i + 1),
	        'url' => '/shop/' . ($i + 1),
	        'items' => $list,
	    ];
	}
	
@endphp

<x-layouts.app>
	<x-product.breadcrumbs name="Shop" :links="$links" />
	<div class="flex flex-col gap-10 my-10">
		@foreach ($listGroup as $group)
		<x-shop.carousel name="{{ $group['name'] }}" url="{{ $group['url'] }}" :list="$group['items']" />
		@endforeach
	</div>
</x-layouts.app>

<script>
	class Carousel {
		constructor(element) {
			this.element = element;
			this.productsCarousel = this.element.querySelectorAll('.products-carousel');
			this.slider = this.element.querySelector('.slider');
			this.carousel = this.element.querySelector('_carousel');
			this.carouselContents = this.element.querySelectorAll('.carousel_contents');
			this.prev = this.element.querySelector('.prev');
			this.next = this.element.querySelector('.next');
			this.direction = null;

			this.elementWidth = this.carouselContents[0].clientWidth;
			window.addEventListener("resize", () => {
				this.elementWidth = this.carouselContents[0].clientWidth;
			});

			console.log(this.elementWidth);

			this.prev.addEventListener('click', this.debounce(this.prevSlide.bind(this), 100));
			this.next.addEventListener('click', this.debounce(this.nextSlide.bind(this), 100));

			this.slider.addEventListener('transitionend', this.handleTransitionEnd.bind(this));
		}

		debounce(func, wait, immediate) {
			let timeout;
			return function() {
				const context = this,
					args = arguments;
				const later = function() {
					timeout = null;
					if (!immediate) func.apply(context, args);
				};
				const callNow = immediate && !timeout;
				clearTimeout(timeout);
				timeout = setTimeout(later, wait);
				if (callNow) func.apply(context, args);
			};
		}

		prevSlide() {
			if (this.direction === -1) {
				this.slider.appendChild(this.slider.firstElementChild);
				this.direction = 1;
			}
			this.slider.style.transform = `translate(${this.elementWidth}px)`;
		}

		nextSlide() {
			this.direction = -1;
			this.slider.style.transform = `translate(-${this.elementWidth}px)`;
		}

		handleTransitionEnd() {
			if (this.direction === -1) {
				this.slider.appendChild(this.slider.firstElementChild);
			} else if (this.direction === 1) {
				this.slider.prepend(this.slider.lastElementChild);
			}
			this.slider.style.transition = 'none';
			this.slider.style.transform = 'translate(0)';
			setTimeout(() => {
				this.slider.style.transition = 'all 0.5s';
			});
		}
	}

	const caruselContainer = document.querySelectorAll('.carousel-container');

	caruselContainer.forEach(els => {
		new Carousel(els);
	});
</script>
