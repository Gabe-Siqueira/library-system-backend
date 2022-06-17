<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'book';

    protected $fillable = [
        'title',
        'description',
        'author',
        'number_pages',
        'registration_date'
    ];
}
