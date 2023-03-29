<body class="antialiased  body-font">
	<div class="w-full text-gray-700 bg-white">
		<div x-data="{ open: false }"
			class="flex flex-col  px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-10 lg:py-4">
			<div class="flex flex-row items-center justify-between p-4">
				<a href="<?= base_url('beranda') ?>"
					class="flex text-lg font-semibold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline items-center title-font">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full"
						viewBox="0 0 24 24">
						<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
					</svg>
					<span class="ml-3 text-xl">BiSyifa</span>
				</a>
				<button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
					<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
						<path x-show="!open" fill-rule="evenodd"
							d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
							clip-rule="evenodd"></path>
						<path x-show="open" fill-rule="evenodd"
							d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
				</button>
			</div>
			<nav :class="{'flex': open, 'hidden': !open}"
				class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open"
						class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
						<span>Tentang Kami</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
							class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
						<div class="px-2 py-2 bg-white rounded-md shadow">
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="<?= base_url('tentang/profile/profile_perusahaan') ?>">Profil Perusahaan</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="<?= base_url('tentang/partner/partner_kami') ?>">Partner</a>
						</div>
					</div>
				</div>

				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open"
						class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
						<span>Dokter Kami</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
							class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
						<div class="px-2 py-2 bg-white rounded-md shadow">
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Profil Dokter</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Cari Dokter</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Jadwal Praktek</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Jadwal Praktek Hari Ini</a>
						</div>
					</div>
				</div>

				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open"
						class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
						<span>Layanan Kami</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
							class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
						<div class="px-2 py-2 bg-white rounded-md shadow">
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Rawat Jalan</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Rawat Inap</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Unggulan</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Penunjang Medis</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Fasilitas Pendukung</a>
						</div>
					</div>
				</div>

				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open"
						class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
						<span>Pendaftaran Online</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
							class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
						<div class="px-2 py-2 bg-white rounded-md shadow">
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Pendaftaran Rawat Jalan</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Pendaftaran Vaksin Covid-19</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Pendaftaran Swab PCR</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Pendaftaran Tes Antigen</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Pendaftaran Pemeriksaan</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Laboratorium</a>
						</div>
					</div>
				</div>

				<div @click.away="open = false" class="relative" x-data="{ open: false }">
					<button @click="open = !open"
						class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
						<span>Media Informasi</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
							class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
							<path fill-rule="evenodd"
								d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
								clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-show="open" x-transition:enter="transition ease-out duration-100"
						x-transition:enter-start="transform opacity-0 scale-95"
						x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
						x-transition:leave-start="transform opacity-100 scale-100"
						x-transition:leave-end="transform opacity-0 scale-95"
						class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-30">
						<div class="px-2 py-2 bg-white rounded-md shadow">
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Promosi</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="#">Syifamagz</a>
							<a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
								href="<?= base_url('media/berita/berita_artikel') ?>">Berita & Artikel</a>
						</div>
					</div>
				</div>

				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
					href="#">Hubungi Kami</a>

				<a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
					href="#">🔴 Live Antrian Poliklinik</a>
			</nav>
		</div>
	</div>
