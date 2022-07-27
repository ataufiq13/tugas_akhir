<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function tracking()
    {
        return $this->hasMany(Tracking::class);
    }
}
