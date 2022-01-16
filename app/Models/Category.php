<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function article(){
        return $this->hasMany(Article::class, 'category_id');
    }

    public function tag(){
        return $this->hasMany(Tag::class, 'category_id');
    }
}