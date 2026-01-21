<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function produk()
    {
        return view('produk.index');
    }

    public function tentang()
    {
        return view('tentang.index');
    }

    public function portfolio()
    {
        return view('portfolio.index');
    }

    public function blog()
    {
        return view('blog.index');
    }

    public function testimoni()
    {
        return view('testimoni.index');
    }

    public function kontak()
    {
        return view('kontak.index');
    }

    public function submitKontak(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email',
            'telepon' => 'required|max:20',
            'pesan' => 'required',
        ]);

        return back()->with('success', 'Pesan berhasil dikirim.');
    }

    // ===============================
    // ✅ SHOW PRODUK (FINAL & FIX)
    // ===============================
    public function produkShow($slug)
    {
        $products = [

            // 1. LANYARD 1.5 CM
            'lanyard-1-5cm' => [
                'slug' => 'lanyard-1-5cm',
                'name' => 'Lanyard 1.5 cm',
                'badge' => 'Best Seller',
                'description' => 'Lanyard custom 1.5 cm cocok untuk event, sekolah, dan kantor.',
                'price' => 'Rp.7.000',
                'min_order' => '50 pcs',
                'reviews' => 29,
                'images' => [
                    asset('images/products/lanyard-1-5cm.jpg'),
                    asset('images/products/lanyard-1-5cm-2.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '1.5 cm',
                    'Panjang' => '90 cm',
                    'Cetak' => 'Full Color 2 Sisi',
                ],
                'features' => [
                    'Warna tajam & tahan lama',
                    'Gratis desain',
                    'Include hook & stopper',
                ],
            ],

            // 2. LANYARD 2 CM
            'lanyard-2cm' => [
                'slug' => 'lanyard-2cm',
                'name' => 'Lanyard 2 cm',
                'badge' => 'Popular',
                'description' => 'Ukuran paling populer untuk berbagai kebutuhan.',
                'price' => 'Rp.8.000',
                'min_order' => '50 pcs',
                'reviews' => 35,
                'images' => [
                    asset('images/products/lanyard-2cm.jpg'),
                    asset('images/products/lanyard-2cm-2.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '2 cm',
                    'Panjang' => '90 cm',
                ],
                'features' => [
                    'Cetak full color',
                    'Kuat & awet',
                    'Gratis desain',
                ],
            ],

            // 3. LANYARD 2.5 CM
            'lanyard-2-5cm' => [
                'slug' => 'lanyard-2-5cm',
                'name' => 'Lanyard 2.5 cm',
                'badge' => null,
                'description' => 'Lebar ekstra untuk logo dan desain lebih jelas.',
                'price' => 'Rp.9.000',
                'min_order' => '50 pcs',
                'reviews' => 22,
                'images' => [
                    asset('images/products/lanyard-2-5cm.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Premium',
                    'Lebar' => '2.5 cm',
                    'Panjang' => '90 cm',
                ],
                'features' => [
                    'Area cetak lebih luas',
                    'Warna tidak pudar',
                    'Gratis desain',
                ],
            ],

            // 4. WRISTBAND
            'wristband' => [
                'slug' => 'wristband',
                'name' => 'Wristband',
                'badge' => 'Event',
                'description' => 'Wristband custom untuk event dan konser.',
                'price' => 'Rp.5.000',
                'min_order' => '100 pcs',
                'reviews' => 24,
                'images' => [
                    asset('images/products/wristband.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Polyester Woven',
                    'Panjang' => '35 cm',
                    'Lock' => 'Sekali pakai',
                ],
                'features' => [
                    'Cocok untuk event',
                    'Tidak mudah rusak',
                    'Gratis desain',
                ],
            ],

            // 5. ID CARD
            'id-card' => [
                'slug' => 'id-card',
                'name' => 'ID Card',
                'badge' => null,
                'description' => 'ID Card custom full color untuk karyawan dan event.',
                'price' => 'Rp.7.000',
                'min_order' => '50 pcs',
                'reviews' => 18,
                'images' => [
                    asset('images/products/id-card.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'PVC',
                    'Ukuran' => '8.5 x 5.4 cm',
                ],
                'features' => [
                    'Tahan air',
                    'Cetak tajam',
                    'Gratis desain',
                ],
            ],

            // 6. KEYCHAIN
            'keychain' => [
                'slug' => 'keychain',
                'name' => 'Keychain',
                'badge' => 'Custom',
                'description' => 'Gantungan kunci custom untuk souvenir.',
                'price' => 'Rp.8.000',
                'min_order' => '50 pcs',
                'reviews' => 27,
                'images' => [
                    asset('images/products/keychain.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Akrilik / Metal',
                    'Cetak' => 'Full Color',
                ],
                'features' => [
                    'Custom logo',
                    'Kuat & awet',
                    'Cocok souvenir',
                ],
            ],

            // 7. CARD HOLDER
            'card-holder' => [
                'slug' => 'card-holder',
                'name' => 'Card Holder',
                'badge' => 'Premium',
                'description' => 'Card holder elegan untuk ID Card.',
                'price' => 'Rp.15.000',
                'min_order' => '50 pcs',
                'reviews' => 16,
                'images' => [
                    asset('images/products/card-holder.jpg'),
                ],
                'specs' => [
                    'Bahan' => 'Kulit sintetis',
                    'Slot' => '1–2 kartu',
                ],
                'features' => [
                    'Elegan & profesional',
                    'Include tali lanyard',
                ],
            ],
        ];

        // VALIDASI SLUG
        if (!isset($products[$slug])) {
            abort(404);
        }

        $product = $products[$slug];

        // RELATED PRODUCTS
        $relatedProducts = collect($products)
            ->where('slug', '!=', $slug)
            ->take(4)
            ->map(fn ($p) => [
                'name' => $p['name'],
                'slug' => $p['slug'],
                'price' => $p['price'],
                'reviews' => $p['reviews'],
                'image' => basename($p['images'][0]),
            ])
            ->values()
            ->all();

        return view('produk.show', compact('product', 'relatedProducts'));
    }
}
