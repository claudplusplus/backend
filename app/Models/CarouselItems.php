<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItems extends Model
{
    use HasFactory;
    protected $table = 'carousel_item';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'carousel_name',
        'image_path',
        'discription',
        'user_id'
    ];

}
