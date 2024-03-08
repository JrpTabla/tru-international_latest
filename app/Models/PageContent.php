<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page_name',
        'page_section',
        'content_div',
        'content_title',
        'content_title_colored',
        'content_description',
        'content_image',
        'created_date',
        'created_user',
        'updated_date',
        'updated_user',
    ];

    protected $casts = [
        'created_date' => 'datetime',
        'updated_date' => 'datetime',
    ];
}
