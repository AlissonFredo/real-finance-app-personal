<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'description',
        'amount',
        'period',
        'transaction_type'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'id');
    }
}
