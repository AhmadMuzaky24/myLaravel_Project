<x-app-layout>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Tambah Produk
            </h1>
            <p class="text-sm text-gray-600 mt-1">
                Masukkan informasi produk baru ke dalam sistem.
            </p>
        </div>

        <div class="bg-white shadow-sm rounded-lg p-6">
            <form action="{{ route('products.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Kategori
                    </label>
                    <select name="category_id"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>
                            Pilih kategori
                        </option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @selected(old('category_id') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('category_id')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Kode Produk
                    </label>
                    <input type="text" name="code"
                        value="{{ old('code') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                    @error('code')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Nama Produk
                    </label>
                    <input type="text" name="name"
                        value="{{ old('name') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                    @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Satuan
                        </label>
                        <input type="text" name="unit"
                            value="{{ old('unit', 'pcs') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Harga
                        </label>
                        <input type="number" name="price"
                            value="{{ old('price') }}"
                            min="0"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('price')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Stok Awal
                        </label>
                        <input type="number" name="stock"
                            value="{{ old('stock', 0) }}"
                            min="0"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('stock')
                            <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-end gap-3 pt-4">
                    <a href="{{ route('products.index') }}"
                        class="px-4 py-2 rounded-md border border-gray-300 text-gray-700 hover:bg-gray-50">
                        Batal
                    </a>

                    <button type="submit"
                        class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>