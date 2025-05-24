<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function detail_kasirs(): HasMany
    {
        return $this->hasMany(DetailKasir::class);
    }

    public function log_masuks(): HasMany
    {
        return $this->hasMany(LogMasuk::class);
    }
}
