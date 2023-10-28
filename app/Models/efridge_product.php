<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class efridge_product extends Model
{
    use HasFactory;

    protected $table = 'efridge_products';
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
