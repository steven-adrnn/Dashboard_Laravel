<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">Daftar Buku</h3>
                    @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) <!-- Check if the user has the admin or editor role -->
                        <a href="{{ route('dashboard.create') }}" class="btn btn-primary mt-4">Tambah Buku</a>
                    @endif
                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Judul</th>
                                <th class="px-4 py-2">Penulis</th>
                                <th class="px-4 py-2">Tahun Terbit</th>
                                <th class="px-4 py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td class="border px-4 py-2">{{ $book->judul }}</td>
                                    <td class="border px-4 py-2">{{ $book->penulis }}</td>
                                    <td class="border px-4 py-2">{{ $book->tahun_terbit }}</td>
                                    <td class="border px-4 py-2">{{ $book->deskripsi }}</td>
                                    @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('editor')) <!-- Check if the user has the admin or editor role -->
                                        <td class="border px-4 py-2">
                                                <a href="{{ route('dashboard.edit', $book->id) }}" class="btn btn-secondary ml-2">Edit Buku</a>
                                        </td>
                                    @endif
                                    @if(auth()->user()->hasRole('admin')) <!-- Check if the user has the admin role -->
                                        <td class="border px-4 py-2">
                                            <form action="{{ route('dashboard.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus Buku</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
