<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKasir extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kasirs(): BelongsTo
    {
        return $this->belongsTo(Kasir::class);
    }

    public function produks(): BelongsTo
    {
        return $this->belongsTo(Produk::class);
    }
}
