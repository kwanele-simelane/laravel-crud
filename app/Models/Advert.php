<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Advert extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'advert_name',
        'image',
        'web_url',
        'description',
    ];

    // filter adverts by approved
    public function scopeFilter($query)
    {
        return $query->where('approved', true);
    }

    // establish relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
