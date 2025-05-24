<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kasir extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function detail_kasirs(): HasMany
    {
        return $this->hasMany(DetailKasir::class);
    }
}
