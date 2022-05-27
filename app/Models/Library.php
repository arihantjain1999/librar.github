<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory , HasUuid;
    protected $fillable = [
        // 'id',
        'book_name',
        'author',
        'email',
        'description',
        'publisher_name',
        'issue_date',
        'phone_number',
        'price',
    ];

}
