<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';

    protected $fillable = [
        'id',
        'image',
        'date',
        'created_at',
        'updated_at',
    ];
}
