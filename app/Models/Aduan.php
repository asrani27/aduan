<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    protected $table = 'aduan';
    protected $guarded = ['id'];

    public function kustomer()
    {
        return $this->belongsTo(Kustomer::class, 'kustomer_id');
    }

    public function respon()
    {
        return $this->hasMany(Solusi::class, 'aduan_id');
    }
}
