<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'category',
        'email',
        'telephone',
        'mobile',
        'location',
        'logo',
        'website',
        'description',
    ];

    public function scopeFilter($query, array $filters)
    {
        // $query->join('products', 'listings.id', '=', 'products.listing_id');

        if ($filters['category'] ?? false) {
            $query->where('category', 'like', '%' . request('category') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('category', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('company', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
        }
    }

    // relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // relationship to product
    public function products()
    {
        return $this->hasMany(Product::class, 'listing_id');
    }
}
