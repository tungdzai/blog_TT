<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danh_muc_dia_diem extends Model
{
    use HasFactory;
    public $table='danh_muc_dia_diem';
    protected $fillable=[
        'ten_danh_muc',
        'image'
    ];
}
