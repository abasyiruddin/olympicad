<!-- 1. Gunakan Layout Master -->
@extends('layouts.app')

<!-- 2. Isi Judul Halaman -->
@section('judul_halaman', 'Berita Terkini')

<!-- 3. Isi Konten Utama -->
@section('konten_utama')

    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Kabar Sekolah Terbaru</h2>
        <p class="text-gray-600 mt-2">Update kegiatan siswa dan prestasi sekolah.</p>
        
        
    </div>

    <!-- Grid Layout -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <!-- Looping Data dari Controller -->
        @foreach($semua_berita as $item)
        <div class="card-berita">
            
            <!-- LOGIKA MENAMPILKAN GAMBAR FILAMENT -->
            <div class="h-48 overflow-hidden bg-gray-200">
                @if($item->thumbnail)
                    <!-- asset('storage/...') mengakses folder storage/app/public -->
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" 
                         alt="{{ $item->title }}" 
                         class="w-full h-full object-cover">
                @else
                    <div class="flex items-center justify-center h-full text-gray-400">
                        Tidak ada gambar
                    </div>
                @endif
            </div>
            
            <div class="p-5">
                <h3 class="text-xl font-bold mb-2">{{ $item->title }}</h3>
                <p class="text-gray-600 mb-4 line-clamp-3">
                    {{ $item->content }}
                </p>
                <a href="#" class="text-blue-600 font-semibold hover:underline">
                    Baca Selengkapnya &rarr;
                </a>
            </div>
        </div>
        @endforeach

    </div>

@endsection

@push('styles')
<style>
    h2 { color: #1e40af; } /* Override warna judul khusus halaman ini */
</style>
@endpush
