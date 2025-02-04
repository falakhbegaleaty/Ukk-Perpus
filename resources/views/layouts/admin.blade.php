<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Perpustakaan Admin') }}</title>
    @vite('resources/css/app.css') <!-- Pastikan Anda sudah menggunakan Tailwind CSS dengan Vite -->
</head>
<body class="bg-gray-100">

    <!-- Sidebar and Content -->
    <div class="flex">

        <!-- Sidebar -->
<div class="w-72 bg-gray-900 text-white p-4 h-screen fixed flex flex-col shadow-lg overflow-y-auto">
    <!-- Header -->
    <div class="flex items-center gap-2 mb-6">
        <span class="text-3xl font-bold">📚</span>
        <h3 class="text-2xl font-bold">Admin Perpustakaan</h3>
    </div>
    
    <ul class="flex-1 space-y-3">
        <!-- Menu Items -->
        <li>
            <a href="{{ route('admin') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                🏠 Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.raks.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.raks.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                📂 Manajemen Rak
            </a>
        </li>
        <li>
            <a href="{{ route('admin.ddc.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.ddc.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                🏷️ Manajemen DDC
            </a>
        </li>
        <li>
            <a href="{{ route('admin.format.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.format.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                📑 Manajemen Format
            </a>
        </li>
        <li>
            <a href="{{ route('admin.penerbit.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.penerbit.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                🏢 Manajemen Penerbit
            </a>
        </li>
        <li>
            <a href="{{ route('admin.pengarang.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.pengarang.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                ✍️ Manajemen Pengarang
            </a>
        </li>
        <li>
            <a href="{{ route('admin.jenis_anggota.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.jenis_anggota.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                👥 Jenis Anggota
            </a>
        </li>
        <li>
            <a href="{{ route('admin.pustaka.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.pustaka.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                📘 Manajemen Pustaka
            </a>
        </li>
        <li>
            <a href="{{ route('admin.anggota.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.anggota.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                🆔 Manajemen Anggota
            </a>
        </li>
        <li>
            <a href="{{ route('admin.transaksi.index') }}" 
                class="flex items-center gap-3 text-lg px-4 py-3 rounded-md transition 
                {{ request()->routeIs('admin.transaksi.*') ? 'bg-blue-600' : 'hover:bg-gray-700' }}">
                🔄 Manajemen Transaksi
            </a>
        </li>
    </ul>
    
    <!-- Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" 
            class="flex items-center gap-3 text-lg w-full text-left px-4 py-3 rounded-md transition hover:bg-red-600">
            🚪 Logout
        </button>
    </form>
</div>

        <!-- Main Content -->
        <div class="flex-1 ml-72 p-6">
            <!-- Header Section -->
            {{-- <div class="bg-white shadow-md p-4 mb-6 rounded-lg">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    - 
                </h2>
            </div> --}}

            <!-- Content Section -->
            <div class="bg-white p-6 shadow-md rounded-lg">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>
