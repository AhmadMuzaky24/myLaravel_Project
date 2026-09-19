@extends('layouts.app')

@section('title', 'Riwayat Transaksi Saya')

@section('content')

<div class="container mx-auto px-4 py-8">

    {{-- Header halaman --}}
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">
            Riwayat Transaksi Saya
        </h1>

        <p class="mt-1 text-gray-500">
            Daftar transaksi yang diproses oleh Anda.
        </p>
    </div>


    {{-- Tabel transaksi --}}
    <div class="overflow-x-auto rounded-lg bg-white shadow">

        <table class="w-full text-left text-sm text-gray-600">

            <thead class="bg-gray-200 text-xs uppercase text-gray-700">
                <tr>
                    <th class="px-6 py-4">Invoice</th>
                    <th class="px-6 py-4">Tanggal</th>
                    <th class="px-6 py-4">Total</th>
                    <th class="px-6 py-4">Bayar</th>
                    <th class="px-6 py-4">Kembalian</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($transactions as $transaction)

                    <tr class="border-b hover:bg-gray-50">

                        {{-- Nomor invoice --}}
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $transaction->invoice_number }}
                        </td>

                        {{-- Tanggal transaksi --}}
                        <td class="px-6 py-4">
                            {{ $transaction->created_at->format('d/m/Y H:i') }}
                        </td>

                        {{-- Total --}}
                        <td class="px-6 py-4">
                            Rp {{ number_format($transaction->total, 0, ',', '.') }}
                        </td>

                        {{-- Pembayaran --}}
                        <td class="px-6 py-4">
                            Rp {{ number_format($transaction->pay, 0, ',', '.') }}
                        </td>

                        {{-- Kembalian --}}
                        <td class="px-6 py-4">
                            Rp {{ number_format($transaction->change, 0, ',', '.') }}
                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                            Belum ada transaksi.
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection