@extends('layouts.app')

@section('title', 'Produk Lanyard Custom - LanyardKendal')
@section('description', 'Lihat koleksi produk lanyard custom berkualitas dari LanyardKendal. Tersedia berbagai ukuran dan jenis.')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-16 bg-[#e8e4df]">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center" data-reveal>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                Layanan Produk Kami
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Temukan berbagai pilihan lanyard custom berkualitas untuk kebutuhan bisnis, event, dan komunitas Anda.
            </p>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8" data-reveal>

            <!-- PRODUCT 1 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/lanyardq.png') }}"
                         alt="Lanyard 1.5 cm"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Lanyard 1.5 cm</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>29 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.7000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','lanyard-1-5cm') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 2 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/idcard.png') }}"
                         alt="ID Card"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">ID Card</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>18 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.7000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','id-card') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 3 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/wristband.jpg') }}"
                         alt="Wristband"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Wristband</h3>
                            <p class="text-sm text-gray-500">Minimum order 100 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>24 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.5000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','wristband') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 4 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/lanyardp.png') }}"
                         alt="Lanyard 2 cm"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Lanyard 2 cm</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>35 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.8000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','lanyard-2cm') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 5 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/cardholder.jpg') }}"
                         alt="Card Holder"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Card Holder</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>16 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.15000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','card-holder') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 6 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/keychain.jpg') }}"
                         alt="Lanyard Polyester"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Keychain</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>27 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.8000<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','lanyard-polyester') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

            <!-- PRODUCT 7 -->
            <div class="group">
                <div class="bg-[#f5f5f3] aspect-square rounded-xl overflow-hidden mb-4 relative">
                    <img src="{{ asset('images/hero/lanyards.png') }}"
                         alt="Yoyo ID"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="space-y-2">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-medium">Lanyard 2.5cm</h3>
                            <p class="text-sm text-gray-500">Minimum order 50 pcs</p>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-xs text-gray-500">
                                <span class="text-yellow-400">★★★★★</span>
                                <span>15 Reviews</span>
                            </div>
                            <p class="text-gray-900 font-medium">Rp.2500<span class="text-xs text-gray-400">/pcs</span></p>
                        </div>
                    </div>
                    <a href="{{ route('produk.show','yoyo-id') }}"
                       class="inline-block px-4 py-2 border border-gray-300 text-gray-700 text-sm hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all">
                        Lihat Detail
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-[#e8e4df]" data-reveal>
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl sm:text-4xl text-gray-900 mb-6">
                Butuh Bantuan Memilih Produk?
            </h2>
            <p class="text-gray-600 mb-8">
                Tim kami siap membantu Anda memilih produk yang tepat sesuai kebutuhan dan budget.
            </p>
            <a href="https://wa.me/6281316509191"
               class="inline-flex items-center gap-2 bg-gray-900 hover:bg-gray-800 text-white px-8 py-4 font-medium transition-all hover:scale-105">
                Chat WhatsApp Sekarang
            </a>
        </div>
    </div>
</section>

@endsection
