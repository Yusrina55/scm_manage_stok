<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogMasuk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function produks(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'produk_id','id');
    }
}
