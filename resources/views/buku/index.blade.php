@extends('layouts.main')
@section('title', 'Daftar Buku')
@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Daftar
                Buku</h2>
            <a href="{{ route('books.create') }}"
                class="bg-gray-800 text-white py-2 px-4 rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50 transition duration-200">
                Tambah Buku
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full bg-white">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">No</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Judul</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Penulis</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Tahun</th>
                        <th class="py-3 px-6 text-left font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr class="border-t border-gray-200 hover:bg-gray-50">
                            <td class="py-4 px-6">{{ $books->firstItem() +$loop->index }}</td>
                            <td class="py-4 px-6">{{ $book->judul}}</td>
                            <td class="py-4 px-6">{{ $book->penulis}}</td>
                            <td class="py-4 px-6">{{ $book->tahun_terbit}}</td>
                            <td>
                                <a class="text-yellow-400" href="{{route('books.edit', $book->id) }}">Edit</a> |
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-400" type="submit"
                                        onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination mt-6">{{ $books->links() }}</div>
    </div>
@endsection