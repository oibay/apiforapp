<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    const IMAGE = [
        'https://pngimage.net/wp-content/uploads/2018/06/%D0%B2%D1%8B%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%BE-png-.png',
        'https://store-images.s-microsoft.com/image/apps.11856.13029e4c-7014-4887-a42a-90c3a3001fc3.256fbf71-1049-49d9-a6e9-4b7ae114753c.892ca41d-04d3-4dd1-a66f-23d93805511f.png',
        'https://yourielts.ru/images/2020/05/13/ielts-writing-task-2-topics-2020_thumbnail.png',
        'https://yourielts.ru/images/2020/02/16/ielts-writing-task-1-linking-words-graph.png',
        'https://yourielts.ru/images/2020/02/16/ielts-writing-task-1-structure.png',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHtr5h6WkmRynO65Jwxsc-uYoBA1ODQP8RjQ&usqp=CAU'
    ];
    public static function images()
    {
        return self::IMAGE[array_rand(self::IMAGE, 1)];
    }
}
