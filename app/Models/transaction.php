<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_invoice',
        'admin_fee',
        'user_id',
        'product_id',
        'total'
    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function User()
    {
       return $this->belongsTo(User::class);
    }
}
