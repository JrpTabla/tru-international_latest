<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents'; // Specify the table name
    protected $fillable = ['content_title', 'content_description', 'content_tag', 'created_date']; // Specify the fillable columns
}
