<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'slug', 'author', 'excerpt', 'body'];

    protected $guarded = ['id'];

    public static function Testing(){
        echo 'Ok ! berita baru';
    }
}

