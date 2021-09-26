<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'transaction_id',
        'product_id',
        'price',
        'shipping_status',
        'resi',
        'code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id' );
    }

    public function transaction(){
        return $this->hasOne(Transactions::class, 'id', 'transaction_id');
    }
}
