<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable =[
        'listing_id',
        'loan_type',
        'loan_name',
        'interest_rate',
        'amount_range'
    ];

    // create a relationship to the listing
    public function listing(){
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
