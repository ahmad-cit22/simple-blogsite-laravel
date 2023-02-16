<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_blogger()
    {
       return $this->belongsTo(Blogger::class, 'blogger_id');
    }
}
