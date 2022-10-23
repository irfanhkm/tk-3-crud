<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    protected $fillable = [
        'transaction_id',
        'item_id',
        'qty',
        'price'
    ];

    public function item() {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
