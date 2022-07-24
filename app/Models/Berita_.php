<?php

namespace App\Models;

class Berita_
{
    static $berita = [
        [
            'title' => 'Judul Berita 1',
            'author' => 'Nicholaus Adhyatma Surya Kusuma',
            'slug' => 'judul-post-1',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus omnis unde eius amet aliquam quaerat eligendi et assumenda dolorem necessitatibus molestias facere, ab quod consequuntur quo consequatur dolores iure?'
        ],

        [
            'title' => 'Judul Berita 2',
            'author' => 'Faris Putra',
            'slug' => 'judul-post-2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus omnis unde eius amet aliquam quaerat eligendi et assumenda dolorem necessitatibus molestias facere, ab quod consequuntur quo consequatur dolores iure?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus omnis unde eius amet aliqF uam quaerat eligendi et assumenda dolorem necessitatibus molestias facere, ab quod consequuntur quo consequatur dolores iure?'
        ]
    ];

    public static function all()
    {
        return collect(self::$berita);
    }

    public static function find($slug)
    {
        $berita = static::all();
        return $berita->firstWhere('slug', $slug);
    }
}
