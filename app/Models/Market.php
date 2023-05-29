<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $table = 'markets';

    protected $fillable = [
        'user_id',
        'product',
        'slug',
        'price',
        'information',
        'no_telp',
        'img',
        'created_at',
        'updated_at'
    ];

    protected $guard = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
