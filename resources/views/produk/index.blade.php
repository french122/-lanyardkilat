@extends('layouts.app')

@section('title', 'Produk - MitraJogja')
@section('description', 'Lihat koleksi produk berkualitas dari MitraJogja. Tersedia berbagai ukuran dan jenis.')

@section('content')

<!-- Hero Section -->
<section class="pt-20 sm:pt-32 pb-6 sm:pb-16 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center" data-reveal>
            <h1 class="text-2xl sm:text-4xl lg:text-6xl text-gray-900 mb-2 sm:mb-6 leading-tight">
                Layanan Produk Kami
            </h1>
            <p class="text-sm sm:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Temukan berbagai pilihan produk berkualitas untuk kebutuhan bisnis, event, dan komunitas Anda.
            </p>
        </div>
    </div>
</section>

<!-- Products Grid Section with Sidebar -->
<section class="py-4 sm:py-12 bg-white" x-data="{
    activeCategory: 'atk',
    sortBy: 'featured',
    allProducts: {
        atk: [
            { name: 'Alat Tulis Kantor', price: 5000, minOrder: '10 pcs', reviews: 21, img: '/images/hero/alattuliskantor.jpg', unit: 'pcs' },
            { name: 'Map / Ordner', price: 12000, minOrder: '5 pcs', reviews: 14, img: '/images/hero/idcard.png', unit: 'pcs' }
        ],
        kebersihan: [
            { name: 'Sapu & Pel', price: 25000, minOrder: '5 pcs', reviews: 18, img: '/images/hero/alatkebersihan.jpg', unit: 'pcs' },
            { name: 'Cairan Pembersih', price: 15000, minOrder: '12 pcs', reviews: 32, img: '/images/hero/alatkebersihan.jpg', unit: 'pcs' }
        ],
        kesehatan: [
            { name: 'Masker Medis', price: 2000, minOrder: '50 pcs', reviews: 45, img: '/images/hero/alatkesehatan.jpg', unit: 'pcs' },
            { name: 'Hand Sanitizer', price: 18000, minOrder: '12 pcs', reviews: 28, img: '/images/hero/alatkesehatan.jpg', unit: 'pcs' }
        ],
        home: [
            { name: 'Dispenser Air', price: 350000, minOrder: '1 pcs', reviews: 19, img: '/images/hero/homeappliances.jpg', unit: 'pcs' },
            { name: 'Kipas Angin', price: 200000, minOrder: '1 pcs', reviews: 23, img: '/images/hero/homeappliances.jpg', unit: 'pcs' }
        ],
        furniture: [
            { name: 'Kursi Kantor', price: 800000, minOrder: '2 pcs', reviews: 11, img: '/images/hero/meja.jpg', unit: 'pcs' },
            { name: 'Meja Kerja', price: 1200000, minOrder: '1 pcs', reviews: 9, img: '/images/hero/meja.jpg', unit: 'pcs' }
        ],
        it: [
            { name: 'Keyboard & Mouse', price: 150000, minOrder: '1 pcs', reviews: 37, img: '/images/hero/pc.jpg', unit: 'pcs' },
            { name: 'Lisensi Software', price: 500000, minOrder: '1 license', reviews: 22, img: '/images/hero/pc.jpg', unit: 'license' }
        ]
    },
    get sortedProducts() {
        let products = [...(this.allProducts[this.activeCategory] || [])];
        if (this.sortBy === 'price-asc') products.sort((a, b) => a.price - b.price);
        else if (this.sortBy === 'price-desc') products.sort((a, b) => b.price - a.price);
        else if (this.sortBy === 'newest') products.reverse();
        return products;
    },
    formatPrice(price) {
        return 'Rp.' + price.toLocaleString('id-ID');
    }
}">
<div class="w-full max-w-[1920px] mx-auto px-3 sm:px-10 lg:px-16 xl:px-24">

        <div class="flex flex-row gap-3 sm:gap-6 lg:gap-8">

            <!-- Sidebar -->
            <aside class="w-24 sm:w-40 lg:w-64 flex-shrink-0">

                <!-- Categories -->
                <div class="bg-[#f5f5f3] p-2 sm:p-4 lg:p-6 mb-3 sm:mb-6">
                    <h3 class="text-xs sm:text-sm lg:text-lg font-medium text-gray-900 mb-2 sm:mb-4">Categories</h3>
                    <ul class="space-y-0.5 sm:space-y-1">
                        <li>
                            <button @click="activeCategory = 'atk'"
                                :class="activeCategory === 'atk' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>ATK</span>
                                <span x-show="activeCategory === 'atk'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                        <li>
                            <button @click="activeCategory = 'kebersihan'"
                                :class="activeCategory === 'kebersihan' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>Alat Kebersihan</span>
                                <span x-show="activeCategory === 'kebersihan'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                        <li>
                            <button @click="activeCategory = 'kesehatan'"
                                :class="activeCategory === 'kesehatan' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>Alat Kesehatan</span>
                                <span x-show="activeCategory === 'kesehatan'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                        <li>
                            <button @click="activeCategory = 'home'"
                                :class="activeCategory === 'home' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>Home Appliances</span>
                                <span x-show="activeCategory === 'home'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                        <li>
                            <button @click="activeCategory = 'furniture'"
                                :class="activeCategory === 'furniture' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>Furniture</span>
                                <span x-show="activeCategory === 'furniture'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                        <li>
                            <button @click="activeCategory = 'it'"
                                :class="activeCategory === 'it' ? 'text-gray-900 font-semibold bg-white' : 'text-gray-600 hover:text-gray-900'"
                                class="w-full text-left px-1.5 sm:px-3 py-1.5 sm:py-2 rounded transition-all flex justify-between items-center text-xs sm:text-sm">
                                <span>IT Hardware Software</span>
                                <span x-show="activeCategory === 'it'" class="hidden sm:inline text-xs bg-gray-900 text-white rounded-full px-2 py-0.5">2</span>
                            </button>
                        </li>
                    </ul>
                </div>

                <!-- Active Category Info -->
                <div class="bg-gray-900 text-white p-2 sm:p-4 lg:p-6">
                    <p class="text-xs uppercase tracking-widest text-gray-400 mb-1 hidden sm:block">Kategori Aktif</p>
                    <p class="font-medium text-xs sm:text-sm" x-text="
                        activeCategory === 'atk' ? 'ATK' :
                        activeCategory === 'kebersihan' ? 'Alat Kebersihan' :
                        activeCategory === 'kesehatan' ? 'Alat Kesehatan' :
                        activeCategory === 'home' ? 'Home Appliances' :
                        activeCategory === 'furniture' ? 'Furniture' : 'IT Hardware Software'
                    "></p>
                    <p class="text-xs text-gray-400 mt-1 hidden sm:block">2 produk tersedia</p>
                </div>

            </aside>

            <!-- Main Content -->
            <div class="flex-1">

                <!-- Toolbar -->
                <div class="flex flex-wrap items-center justify-between gap-2 mb-3 sm:mb-8 pb-2 sm:pb-4 border-b border-gray-200">
                    <div class="flex items-center gap-2">
                        <span class="text-xs sm:text-sm text-gray-500">Produk:
                            <span class="font-medium text-gray-900" x-text="
                                activeCategory === 'atk' ? 'ATK' :
                                activeCategory === 'kebersihan' ? 'Alat Kebersihan' :
                                activeCategory === 'kesehatan' ? 'Alat Kesehatan' :
                                activeCategory === 'home' ? 'Home Appliances' :
                                activeCategory === 'furniture' ? 'Furniture' : 'IT Hardware Software'
                            "></span>
                        </span>
                    </div>
                    <select x-model="sortBy" class="bg-gray-900 text-white px-2 sm:px-4 py-1 sm:py-2 text-xs sm:text-sm">
                        <option value="featured">Featured</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                        <option value="newest">Newest</option>
                    </select>
                </div>

                <!-- Products Grid (sorted) -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-8">
                    <template x-for="product in sortedProducts" :key="product.name">
                        <div class="group">
                            <div class="bg-[#f5f5f3] h-24 sm:h-48 lg:h-80 overflow-hidden mb-2 sm:mb-4">
                                <img :src="product.img" :alt="product.name"
                                     class="w-full h-full object-cover lg:object-contain mix-blend-multiply group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div class="space-y-1 sm:space-y-2">
                                <h3 class="text-gray-900 font-medium text-xs sm:text-base leading-tight" x-text="product.name"></h3>
                                <div class="flex items-center gap-1 text-xs text-gray-500">
                                    <span class="text-yellow-400 text-xs">★★★★★</span>
                                    <span x-text="product.reviews"></span>
                                </div>
                                <p class="text-gray-900 font-semibold text-xs sm:text-base">
                                    <span x-text="formatPrice(product.price)"></span><span class="text-xs text-gray-400 font-normal" x-text="'/' + product.unit"></span>
                                </p>
                                <p class="text-xs text-gray-500 hidden sm:block" x-text="'Min. order ' + product.minOrder"></p>
                                <a href="#" class="inline-block px-2 sm:px-4 py-1 sm:py-2 border border-gray-300 text-gray-700 text-xs sm:text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">Lihat Detail</a>
                            </div>
                        </div>
                    </template>
                </div>


            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-8 sm:py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-xl sm:text-3xl lg:text-4xl text-gray-900 mb-3 sm:mb-6">
                Butuh Bantuan Memilih Produk?
            </h2>
            <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-8">
                Tim kami siap membantu Anda memilih produk yang tepat sesuai kebutuhan dan budget.
            </p>
            <a href="https://wa.me/6281316509191"
               class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white px-5 sm:px-8 py-3 sm:py-4 text-sm sm:text-base font-medium transition-all hover:scale-105">
                Chat WhatsApp Sekarang
            </a>
        </div>
    </div>
</section>

@endsection
