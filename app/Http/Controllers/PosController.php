<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class PosController extends Controller
{
    /**
     * Menampilkan halaman POS.
     */
    public function index()
    {
        return view('pos.index');
    }

    /**
     * Menampilkan riwayat transaksi kasir.
     */
    public function history()
    {
        $transactions = Transaction::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('pos.history', compact('transactions'));
    }
}