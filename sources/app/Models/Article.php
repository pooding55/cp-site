<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'tickers',
        'title',
        'date',
        'content',
        'image',
        'author',
        'category',
    ];

    protected $casts = [
        'date' => 'datetime'
    ];
}
