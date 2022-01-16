<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubContent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function article(){
        return $this->belongsTo(Article::class, 'article_id');
    }
}