<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
     //table
    protected $table = 'book';

    // fillable fields
    protected $fillable = [
        'title',
        'description',
        'author',
    ];
}
