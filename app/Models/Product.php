<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Mass-assignable fields
    protected $fillable = [
        'name',
        'rasa',
        'deskripsi',
        'harga',
        'image_url',
    ];
}