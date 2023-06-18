<footer class="grid grid-cols-12 gap-10 p-32 max-w-7xl m-auto">
	<div class="col-span-3">
		<h1 class="text-3xl font-bold">Nuvio<span class="text-red-500">.</span></h1>
	</div>
	<div class="col-span-3 flex flex-col gap-2">
		<h1 class="text-xl font-bold">Tentang kami</h1>
		<ul class="flex flex-col gap-2 submenu">
			<li>
				<a href="#">Legalitas</a>
			</li>
			<li>
				<a href="#">Karir</a>
			</li>
			<li>
				<a href="#">Produk</a>
			</li>
		</ul>
	</div>
	<div class="col-span-3 flex flex-col gap-3">
		<h1 class="text-xl font-bold">Butuh Bantuan?</h1>
		<ul class="flex flex-col gap-2 submenu">
			<li>
				<a href="#">Cara Pembelian</a>
			</li>
			<li>
				<a href="#">Pesananku</a>
			</li>
			<li>
				<a href="#">Pembayaran</a>
			</li>
			<li>
				<a href="#">Pengembalian</a>
			</li>
			<li>
				<a href="#">Pengiriman</a>
			</li>
	</div>
	<div class="col-span-3 flex flex-col gap-3">
		<h1 class="text-xl font-bold">Hubungi Kami</h1>
		<div class="flex flex-col gap-2">
			<button class="btn text-white bg-red-500 hover:bg-red-400">
				<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
				</svg>
				Hubungi kami
			</button>
			<div class="text-gray-400 font-medium">
				<p>Senin - Jumat: 09.00 - 24.00</p>
				<p>Sabtu: 09.00 - 20.00</p>
				<p>Minggu: 09.00 - 16.00</p>
				<p>Wake Up Service: 24 Jam</p>
			</div>
		</div>
	</div>

    <div class="col-span-12 flex items-center justify-between text-xs text-gray-400">
        <div class="flex">
            <a class=" hover:text-red-500 smooth-transition"  href="/privacy-policy">Kebijakan Privasi</a>
            <div class="divider divider-horizontal"></div>
            <a class="hover:text-red-500 smooth-transition"  href="/terms-and-conditions">Syarat dan Ketentuan</a>
        </div>
        <div class="flex">
            <p>© {{ date('Y')}} <span class="text-black font-bold       ">Nuvio<span class="text-red-500">.</span></span> All Rights Reserved.</p>
        </div>
    </div>
</footer>
