<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{    use HasFactory, HasUuids;
    // UUID
    public $incrementing = false;
    protected $keyType = 'string';

     //table
    protected $table = 'book';

    // fillable fields
    protected $fillable = [
        'title',
        'description',
        'author',
    ];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }
}
