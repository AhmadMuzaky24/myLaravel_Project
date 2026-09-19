<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    protected $fillable = [
        'invoice_number',
        'user_id',
        'total',
        'pay',
        'change',
    ];

    /**
     * Transaksi dimiliki oleh satu user/kasir.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Satu transaksi memiliki banyak detail transaksi.
     */
    public function details(): HasMany
    {
        return $this->hasMany(TransactionDetail::class);
    }
}