@extends('layouts.admin')

@section('header', 'Dashboard Admin')

@section('content')
    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 shadow-lg rounded-lg p-8 text-white">
        <div class="text-center mb-8">
            <h3 class="text-3xl font-extrabold">🚀 Dashboard Admin</h3>
            <p class="text-lg">Selamat datang kembali! Kelola perpustakaan dengan lebih efektif.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Card Total Buku -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md flex flex-col items-center">
                <div class="text-4xl">📚</div>
                <h4 class="text-xl font-bold mt-2">Total Buku</h4>
                <p class="text-lg font-semibold">3,250</p>
            </div>
            
            <!-- Card Total Anggota -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md flex flex-col items-center">
                <div class="text-4xl">👥</div>
                <h4 class="text-xl font-bold mt-2">Total Anggota</h4>
                <p class="text-lg font-semibold">1,480</p>
            </div>
            
            <!-- Card Transaksi Aktif -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md flex flex-col items-center">
                <div class="text-4xl">🔄</div>
                <h4 class="text-xl font-bold mt-2">Transaksi Aktif</h4>
                <p class="text-lg font-semibold">200</p>
            </div>
            
            <!-- Card Peminjaman Tertunda -->
            <div class="bg-white text-gray-800 p-6 rounded-lg shadow-md flex flex-col items-center">
                <div class="text-4xl">⏳</div>
                <h4 class="text-xl font-bold mt-2">Peminjaman Tertunda</h4>
                <p class="text-lg font-semibold">45</p>
            </div>
        </div>
        
        <div class="mt-8">
            <h4 class="text-2xl font-semibold text-white mb-4">📌 Tugas Hari Ini</h4>
            <ul class="space-y-3">
                <li class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex items-center">
                    <span class="text-2xl mr-4">✅</span> Verifikasi peminjaman baru
                </li>
                <li class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex items-center">
                    <span class="text-2xl mr-4">📦</span> Periksa pengembalian buku
                </li>
                <li class="bg-white text-gray-800 p-4 rounded-lg shadow-md flex items-center">
                    <span class="text-2xl mr-4">🛠️</span> Update katalog perpustakaan
                </li>
            </ul>
        </div>
    </div>
@endsection
