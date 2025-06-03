<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Katalog extends Model
{
    use HasFactory;
    protected $table = 'katalog';
    protected $fillable = [
        'name',
        'image',
    ];

    protected static function booted()
    {
        static::deleting(function ($katalog) {
            if ($katalog->image) {
                Storage::disk('public')->delete($katalog->image);
            }
        });
    }
}
