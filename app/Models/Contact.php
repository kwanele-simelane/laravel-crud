<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'listing_id',
        'product',
        'loan_amount',
        'firstname',
        'lastname',
        'national_id',
        'phone_number',
        'email',
        'address',
        'employer',
        'employer_contact',
        'designation',
        'income_amount',
        'notes'
    ];

    // relationship to user
    public function listing()
    {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
