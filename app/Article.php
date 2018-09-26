<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'main_photo', 'short_description', 'description', 'category_id'
    ];
}
