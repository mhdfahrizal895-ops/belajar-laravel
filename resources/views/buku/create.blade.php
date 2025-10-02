@extends('layouts.main')

@section('title', 'Tambah Buku')

@section('content')
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Tambah Buku</h2>
        <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-2">Judul</label>
                <input type="text" name="judul" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring 2 focus:ring-blue-500 focus:border-transparent transition duration-200" placeholder="Masukkan judul buku">
                    @error('judul')
                        <p class="text-red-600 text-sm mt-1">{{$message}}</p>
                    @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Penulis</label>
                <input type="text" name="penulis"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    placeholder="Masukkan nama penulis">
                @error('penulis')
                    <p class="text-red-600 text-sm mt-1">{{ $message}}</p>
                @enderror
            </div>
            <div>
                <label class="block text-gray-700 font-medium mb-2">Tahun Terbit</label>
                <input type="number" name="tahun_terbit"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                    placeholder="Masukkan tahun terbit">
                    @error('tahun_terbit')
                        <p class="text-red-600 text-sm mt-1">{{ $message}}</p>
                    @enderror
            </div>
            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 transition duration-200">
                    Simpan Buku </button>
            </div>
        </form>
    </div>
@endsection