<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('dashboard.store') }}">
                        @csrf
                        <div>
                            <label for="judul" class="block font-medium text-sm text-gray-700">Judul</label>
                            <input id="judul" type="text" name="judul" required class="mt-1 block w-full" />
                        </div>

                        <div>
                            <label for="penulis" class="block font-medium text-sm text-gray-700">Penulis</label>
                            <input id="penulis" type="text" name="penulis" required class="mt-1 block w-full" />
                        </div>

                        <div>
                            <label for="tahun_terbit" class="block font-medium text-sm text-gray-700">Tahun Terbit</label>
                            <input id="tahun_terbit" type="number" name="tahun_terbit" required class="mt-1 block w-full" />
                        </div>

                        <div>
                            <label for="deskripsi" class="block font-medium text-sm text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Add Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
