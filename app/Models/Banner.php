<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $table='side_banner';
    protected $fillable=[
        'title',
        'content',
        'image_url'
    ];

}
