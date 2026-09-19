@extends('layouts.app')
@section('title', 'Daftar Produk')
@section('content')

<div class="container mx-auto px-4 py-8">

    {{-- Header halaman --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Daftar Produk
        </h1>

        <p class="mt-1 text-gray-500">
            Kelola data produk yang tersedia di Barokah Mart.
        </p>
    </div>


    {{-- Tabel produk --}}
    <div class="overflow-x-auto rounded-lg bg-white shadow">

        <table class="w-full text-left text-sm text-gray-600">

            <thead class="bg-gray-200 text-xs uppercase text-gray-700">
                <tr>
                    <th class="px-6 py-4">Kode</th>
                    <th class="px-6 py-4">Produk</th>
                    <th class="px-6 py-4">Kategori</th>
                    <th class="px-6 py-4">Harga</th>
                    <th class="px-6 py-4">Stok</th>
                    <th class="px-6 py-4">Status</th>
                </tr>
            </thead>


            <tbody>

                @forelse ($products as $product)

                    <tr class="border-b hover:bg-gray-50">

                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $product->code }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $product->name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $product->category->name }}
                        </td>

                        <td class="px-6 py-4">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $product->stock }} {{ $product->unit }}
                        </td>

                        <td class="px-6 py-4">

                            @php
                                if ($product->stock == 0) {
                                    $status = 'Habis';
                                } elseif ($product->stock <= 10) {
                                    $status = 'Menipis';
                                } else {
                                    $status = 'Aman';
                                }
                            @endphp

                            <x-badge :status="$status" />

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                            Belum ada produk.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>
@endsection