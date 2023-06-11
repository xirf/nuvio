@php
    $menu = [
        [
            'name' => 'Home',
            'link' => '/',
        ],
        [
            'name' => 'Shop',
            'link' => '/shop',
        ],
        [
            'name' => 'About',
            'link' => '/about',
        ],
        [
            'name' => 'Contact',
            'link' => '/contact',
        ],
    ];
@endphp

<div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
        <header class="sticky top-0 left-0 w-full transition-all duration-1000 z-50">
            <div class="navbar max-w-7xl m-auto ">
                <div class="">
                    <a href="/" class="font-extrabold text-xl">
                        Nuvi<span class='text-red-500'>o</span>
                    </a>
                </div>
                <div class="flex items-center justify-center navbar-center flex-grow">
                    <div class="flex font-medium relative">
                        @foreach ($menu as $index => $item)
                            <div class=" w-28 text-center smooth-transition hover:text-red-500 {{ strtolower($active) == strtolower($item['name']) ? 'text-red-500' : '' }}"
                                id="menuItems"
                                data-active="{{ strtolower($active) == strtolower($item['name']) ? 'activeMenu' : '' }}">
                                <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                            </div>
                        @endforeach
                        <div class="h-default w-9 bg-red-500 absolute bottom-0 transition-all duration-300 translate-x-8"
                            id="menuDeco"></div>
                    </div>
                </div>
                <div class='grid gap-5 grid-cols-3'>
                    <a href='/cart'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                        </svg>
                    </a>
                    <a href='/wishlist'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                        </svg>
                    </a>
                    <a href='#'>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </header>

        <div class='max-w-screen-2xl m-auto px-10'>
            {{ $slot }}
        </div>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-4" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 h-full bg-base-200 text-base-content">
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul>
    </div>
</div>

<script>
    const menuItems = document.querySelectorAll('#menuItems');
    const menuDeco = document.querySelector('#menuDeco');
    const header = document.querySelector('header');
    let activeMenuIndex = 0;

    menuItems.forEach((item, index) => {
        if (item.dataset.active === 'activeMenu') {
            activeMenuIndex = index;
        }

        item.addEventListener('mouseover', () => {
            menuDeco.style.left = `${index * 112}px`;
        });

        item.addEventListener('mouseleave', () => {
            menuDeco.style.left = `${activeMenuIndex * 112}px`;
        });
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.classList.add('bg-white');
            header.classList.remove('bg-transparent');
        } else {
            header.classList.remove('bg-white');
            header.classList.add('bg-transparent');
        }
    });
    
</script>
